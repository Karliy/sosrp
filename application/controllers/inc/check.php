<?php
class Check extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->model('user_model');
	}

	/**
	 * 登录验证
	 * @return [type] [description]
	 */
	
	function login_in()
	{
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$obj=$this->user_model->login($username,$password);
		if ($obj['status']==1){
			$this->session->set_userdata('username',$obj['data']);
		}
		echo json_encode($obj);
	}

	/**
	 * 注册用户
	 * @return [type] [description]
	 */
	function register_user()
	{
		$full_name = $this->input->post('fullname');
		$user_name = $this->input->post('username');
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		echo json_encode($this->user_model->register_user($full_name,$user_name,$email,$password));
	}
}