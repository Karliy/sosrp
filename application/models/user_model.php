<?php
/**
 * 用户操作模型
 * @Author Smarttang
 * @data 2016.5.11
 */
class User_model extends CI_Model{

	function __construct()
	{
		$this->load->helper('date');
		$this->load->model('common_model');
		$this->load->database();
	}

	/**
	 * 注册用户
	 * @param  [type] $full_name [用户全称]
	 * @param  [type] $user_name [登录名]
	 * @param  [type] $email     [邮箱]
	 * @param  [type] $password  [密码]
	 * @return [type]            [description]
	 */
	function register_user($full_name,$user_name,$email,$password)
	{
		// 生成用户HASH id
		$hash_id = $this->common_model->_createRomdomKey();

		// 插入用户主表
		$data_user = array(
			'SRP_USER_NAME' => $user_name,
			'SRP_USER_PASS' => md5($password),
			'SRP_USER_HASH_ID' => $hash_id
		);
		
		$user_create_status = $this->db->insert('sosrp_users',$data_user);

		if (!$user_create_status){
			return array('status' => 0);
		}

		// 插入用户扩展表
		$data_user_info = array(
			'SRP_USER_HASH_ID' => $hash_id,
			'SRP_USER_STATUS' => 0, # 需要通过审核后才能正常登录平台
			'SRP_USER_EMAIL' => $email,
			'SRP_USER_CREATETIME' => $this->common_model->_datetime(),
			'SRP_USER_LASTLOGIN' => 'null',
			'SRP_USER_PURVIEW' => 0 # 默认注册是未分配权限，审核的时候配置权限
		);

		$userinfo_create_status = $this->db->insert('sosrp_user_info',$data_user_info);

		if (!$userinfo_create_status){
			return array('status' => -1);
		}

		return array('status' => 1);
	}

	/**
	 * 登录用户
	 * @param  [type] $username [用户名]
	 * @param  [type] $password [密码]
	 * @return [type]           [description]
	 */
	function login($username,$password)
	{
		$this->db->where('SRP_USER_NAME',$username);
		$this->db->where('SRP_USER_PASS',$password);
		$user_obj = $this->db->get('sosrp_users');

		// 用户不存在
		if ($user_obj->num_rows() < 1){
			return array('status' => 0);
		}

		$this->db->where('SRP_USER_HASH_ID',$user_obj->row()->SRP_USER_HASH_ID);
		$this->db->select('SRP_USER_STATUS');
		$userinfo_obj = $this->db->get('sosrp_user_info');

		// 确认信息是否存在
		if ($userinfo_obj->num_rows() < 1){
			return array('status' => -1);
		}

		// 判断状态是否开启
		if ($userinfo_obj->row()->SRP_USER_STATUS == 1){
			return array('status' => 1);
		}else{
			return array('status' => -2);
		}
	}
}

?>