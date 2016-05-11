<?php
class Main extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$session=$this->session->userdata('username');
		if(!$session){
			redirect('/login','location');
		}
	}
	
	/**
	 * SOSRP安全平台主页面
	 * @return [type] [description]
	 */
	function index(){
		$data['username']=$this->session->userdata('username');
		$this->load->view('main',$data);
	} 

	/**
	 * 登出
	 * @return [type] [description]
	 */
	function logout()
	{
		$this->session->unset_userdata('username');
		redirect('/login','location');
	}

	/**
	 * 展现SOSRP平台内页body统计
	 * @return [type] [description]
	 */
	function body()
	{
		$this->load->view('body');
	}

}