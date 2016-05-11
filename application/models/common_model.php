<?php

/**
 * 通用类（通用型方法）
 */
class Common_model extends CI_Model{

	function __construct()
	{
		$this->load->helper('date');
		$this->load->library('session');
		$this->load->library('email');
		$this->load->database();
	}

	/**
	 * 获取实时日期
	 * @return [type] [description]
	 */
	public function _datetime()
	{
		$date_type="%Y-%m-%d %h:%i:%s";
		$date_set=mdate($date_type,time());
		return $date_set;
	}

	/**
	 * 创建随机的token，主要用在两个地方
	 * -1 创建APIkey.
	 * -2 创建任务key.
	 * @param  string $value [description]
	 * @return [type]        [description]
	 */
	public function _createRomdomKey()
	{
		$rules=array(
			'a' => '294732^%GDY@*&(DDofn91wa01kfh0ga11wedf^&*^&&>>>*@*!'.rand(0,750000),
			'b' => '3canprimaryBy3mar77ang@@gl0d0N.C0m..`'.rand(3322,3355555),
			'c' => '3can3mar77ang@gl0d0n.there7.CoM'.rand(0,350000),
			'd' => '2wdef1r1wdjidoa^@*&I&D@^*(!)'.rand(0,150000),
			'e' => 'dwef2qse90joIfh019dkwd82keh2d$%^&*DB@W*@'.rand(0,20000000)
		);

		// 在规则数组随机选择一个参数作为加密使用.
		return md5($this->_datetime().array_rand($rules));
	}
}

?>