<?php
/**
 * 任务操作模型
 * @Author Smarttang
 * @data 2016.5.24
 */
class User_model extends CI_Model{

	function __construct()
	{
		$this->load->helper('date');
		$this->load->model('common_model');
		$this->load->database();
	}

	/**
	 * 扫描任务添加
	 * @param  [type] $name      [任务名称]
	 * @param  [type] $type      [任务类型]
	 * @param  [type] $useranget [useragent]
	 * @param  [type] $cookies   [cookies]
	 * @param  [type] $target    [扫描目标]
	 * @return [type]            [description]
	 */
	function scan_add($name,$type,$useranget,$cookies,$target)
	{
		// 任务的key
		$task_key = $this->common_model->_createRomdomKey();

		// 基础表信息（存放任务最基础的信息）
		$scanbase_data = array(
			'SRP_SCAN_NAME' => $name,
			'SRP_SCAN_TYPE' => $type,
			'SRP_SCAN_HASH_ID' => $task_key,
			'SRP_SCAN_CREATETIME' => $this->common_model->_datetime(),
			'SRP_SCAN_FINISHTIME' => 'null'
		);

		$scanbase_status = $this->db->insert('sosrp_scan_task',$scanbase_data);

		if (!$scanbase_status) return array('status' => -2);

		// 任务信息id
		$scaninfo_data = array(
			'SRP_SCAN_HASH_ID' => $task_key,
			'SRP_SCAN_USERAGENT' => $useranget,
			'SRP_SCAN_COOKIES' => $cookies,
			'SRP_SCAN_TARGET' => $target
		);

		$scaninfo_status = $this->db->insert('sosrp_scan_info',$scaninfo_data);

		if (!$scaninfo_status) return array('status' => -3);

		// 任务配置信息
		$scanconf_data = array(
			'SRP_SCAN_HASH_ID' => $task_key,
			'SRP_SCAN_PROCESS' => 0,
			'SRP_SCAN_COUNT' => 0
		);

		$scanconf_status = $this->db->insert('sosrp_scan_conf',$scanconf_data);

		if (!$scanconf_status) return array('status' => -4);

		return array('status' => 1);
	}

	/**
	 * 扫描列表读取
	 * @return [type] [description]
	 */
	function scan_list()
	{
		$scantask_data = $this->db->get('sosrp_scan_task');

		if (!$scantask_data) return array('status' => -2, 'data' => array());
		if ($scantask_data->num_rows() < 1) return array('status' => -3, 'data' => array());

		foreach ($scantask_data->result_array() as $scantask_item) {
			// 查看任务进度
			$this->db->where('SRP_SCAN_HASH_ID',$scantask_item['SRP_SCAN_HASH_ID']);
			$this->db->select('SRP_SCAN_PROCESS');
			$scanconf_data = $this->db->get('sosrp_scan_conf');

			if (!$scanconf_data) return array('status' => -4, 'data' => array());
			if ($scanconf_data->num_rows() < 1) return array('status' => -5, 'data' => array());

			$data[] = array(
				'id' => $scantask_item['SRP_SCAN_ID'],
				'taskname' => $scantask_item['SRP_SCAN_NAME'],
				'tasktype' => $scantask_item['SRP_SCAN_TYPE'],
				'createtime' => $scantask_item['SRP_SCAN_CREATETIME'],
				'finishtime' => $scantask_item['SRP_SCAN_FINISHTIME'],
				'process' => $scanconf_data->row()->SRP_SCAN_PROCESS
			);
		}
		return array('status' => 1,'data' => $data);
	}
}

?>