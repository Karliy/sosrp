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
		// 插入用户主表
		$data_user = array(
			'SRP_USER_FULLNAME' => $full_name,
			'SRP_USER_NAME' => $user_name,
			'SRP_USER_PASS' => md5($password),
			'SRP_USER_HASH_ID' => $this->comon->_createRomdomKey()
		);
		
		$user_create_status = $this->db->insert('sosrp_users',$data_user);

		if (!$user_create_status){
			return array('status' => 0);
		}

		// 插入用户扩展表
		$data_user_info = array(
			'SRP_USER_HASH_ID' => $data_user['SRP_USER_HASH_ID'],
			'SRP_USER_STATUS' => 0, # 需要通过审核后才能正常登录平台
			'SRP_USER_EMAIL' => $email,
			'SRP_USER_CREATETIME' => $this->comon->_datetime(),
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
		$this->db->where('SRP_USER_PASS',md5($password));
		$this->db->select('SRP_USER_HASH_ID,SRP_USER_FULLNAME');
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
		if ($userinfo_obj->row()->SRP_USER_STATUS != 1){
			return array('status' => -2);
		}

		// 更新最后登录时间
		$this->db->where('SRP_USER_HASH_ID',$user_obj->row()->SRP_USER_HASH_ID);
		$update_status = $this->db->update('sosrp_user_info',array('SRP_USER_LASTLOGIN' => $this->comon->_datetime()));

		if (!$update_status){
			return array('status' => -3);
		}

		return array('status' => 1, 'data' => $user_obj->row()->SRP_USER_FULLNAME);
	}

	/**
	 * 用户列表
	 * @return [type] [description]
	 */
	function user_list()
	{
		$this->db->select('SRP_USER_ID id,SRP_USER_FULLNAME fullname,sosrp_user_info.SRP_USER_EMAIL email,SRP_USER_CREATETIME createtime,SRP_USER_LASTLOGIN lastlogin,sosrp_user_info.SRP_USER_STATUS ustatus');
		$this->db->join('sosrp_user_info','sosrp_user_info.SRP_USER_HASH_ID = sosrp_users.SRP_USER_HASH_ID');
		$user_data = $this->db->get('sosrp_users');

		if ($user_data->num_rows() < 1){
			return array('status' => -1);
		}
		return array('status' => 1,'data' => $user_data->result_array());
	}

	/**
	 * 删除用户表信息、用户内容信息
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	function user_delete($id)
	{
		// 找到用户的hashid
		// 判断用户是否存在
		$this->db->where('SRP_USER_ID',$id);
		$this->db->select('SRP_USER_HASH_ID');
		$user_data = $this->db->get('sosrp_users');

		if ($user_data->num_rows() < 1){
			return array('status' => -1);
		}

		// 删除用户信息
		$this->db->where('SRP_USER_HASH_ID',$user_data->row()->SRP_USER_HASH_ID);
		$delete_status = $this->db->delete('sosrp_user_info');

		if (!$delete_status){
			return array('status' => -2);
		}

		// 删除用户表信息
		$this->db->where('SRP_USER_ID',$id);
		$delete_status = $this->db->delete('sosrp_users');

		if (!$delete_status){
			return array('status' => -3);
		}

		return array('status' => 1);
	}

	/**
	 * 用户状态更新
	 * @param  [type] $id      [description]
	 * @param  [type] $ustatus [description]
	 * @return [type]          [description]
	 */
	function user_status($id,$ustatus)
	{
		// 找到用户的hashid
		// 判断用户是否存在
		$this->db->where('SRP_USER_ID',$id);
		$this->db->select('SRP_USER_HASH_ID');
		$user_data = $this->db->get('sosrp_users');

		if ($user_data->num_rows() < 1){
			return array('status' => -1);
		}

		// 根据hashid查当前用户状态
		// 然后更新状态
		$this->db->where('SRP_USER_HASH_ID',$user_data->row()->SRP_USER_HASH_ID);
		$this->db->select('SRP_USER_STATUS');
		$user_info = $this->db->get('sosrp_user_info');

		if ($user_info->row()->SRP_USER_STATUS == 1){
			$update_data = array('SRP_USER_STATUS' => 0);
		}else{
			$update_data = array('SRP_USER_STATUS' => 1);
		}

		$this->db->where('SRP_USER_HASH_ID',$user_data->row()->SRP_USER_HASH_ID);
		$update_status = $this->db->update('sosrp_user_info',$update_data);

		if (!$update_status){
			return array('status' => -2);
		}
		return array('status' => 1);
	}

	/**
	 * 新用户的添加
	 * @param  [type] $inputs [description]
	 * @return [type]         [description]
	 */
	function user_add($inputs)
	{
		$user_data = array(
			'SRP_USER_FULLNAME' => $inputs->post('uname'),
			'SRP_USER_NAME' => $inputs->post('user_name'),
			'SRP_USER_PASS' => md5($inputs->post('pass_word')),
			'SRP_USER_HASH_ID' => $this->comon->_createRomdomKey()
		);

		$user_info_data = array(
			'SRP_USER_HASH_ID' => $user_data['SRP_USER_HASH_ID'],
			'SRP_USER_STATUS' => $inputs->post('status'),
			'SRP_USER_EMAIL' => $inputs->post('email'),
			'SRP_USER_CREATETIME' => $this->comon->_datetime(),
			'SRP_USER_PURVIEW' => 0
		);

		$userdata_status = $this->db->insert('sosrp_users',$user_data);
		if (!$userdata_status){
			return array('status' => -1);
		}

		$userdata_status = $this->db->insert('sosrp_user_info',$user_info_data);
		if (!$userdata_status){
			return array('status' => -2);
		}

		return array('status' => 1);
	}
}

?>