<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}

	/**
	 * 登录页面
	 * @return [type] [description]
	 */
	public function index()
	{
		$this->load->view('login');
	}

	/**
	 * 注册用户页面
	 * @return [type] [description]
	 */
	public function register()
	{
		$this->load->view('register');
	}

}