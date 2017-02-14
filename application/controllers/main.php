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
	 * 配置路由相关的信息
	 * @param  [type] $path_key [description]
	 * @return [type]           [description]
	 */
	private function returnUrl($path_key)
	{
		$routes = array(
			'default' => 'main/default.php',	// 大盘数据
			'users' => 'main/users.php',	// 用户列表
			'bugs' => 'main/bugs.php',	// bug管理
			'web_vulscan' => 'main/webscanner.php', // web漏洞扫描
			'scan_rules' => 'main/scanrules.php' // 扫描策略
		);

		if (empty($path_key) or !array_key_exists($path_key,$routes)){
			return $routes['default'];
		}else{
			return $routes[$path_key];
		}
	}

	/**
	 * 处理功能选择逻辑
	 * 不同的功能配置路由
	 * @param  [type] $path [路由地址]
	 * @return [type]       [description]
	 */
	public function index()
	{
		$session = $this->session->userdata('username');
		$this->load->view('default',array(
			'username' => $session,
			'url' => $this->returnUrl($this->input->get('path'))
		));
	}

	/**
	 * 退出
	 * @return [type] [description]
	 */
	public function logout()
	{
		$this->session->unset_userdata('username');
		redirect('/login','location');
	}
}