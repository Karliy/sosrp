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
			$this->session->set_userdata('username',$username);
		}
		echo json_encode($obj);
	} 
}