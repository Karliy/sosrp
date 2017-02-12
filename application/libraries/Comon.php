<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 *
 *
 *  通用的方法类，都放在这
 *  包括加密的算法等等
 *
 * 
 */

class Comon{

	/**
	 * 创建一个随机的key参数
	 * @return [type] [description]
	 */
	public function _createRomdomKey()
	{
		$rules=array(
			'a' => '294732^%GDY@*&(DDofn91wa01kfh0ga11wedf^&*^&&>>>*@*!'.rand(0,750000),
			'b' => '3canprimaryBy3mar77ang@@gl0d0N.C0m..`'.rand(3322,3355555),
			'c' => '3can3mar77an12aw23fs1e7.CoM'.rand(0,350000),
			'd' => '2wdef1r1wdjidoa^@*&I&D@^*(!)'.rand(0,150000),
			'e' => 'dwef2qse90joIfh019dkwd82keh2d$%^&*DB@W*@'.rand(0,20000000),
			'f' => 'fawef23rf23f3wrfs%@JD2'.rand(3,2222222)
		);

		// 在规则数组随机选择一个参数作为加密使用.
		return md5($this->_datetime().$rules[array_rand($rules)].rand(rand(0,350000),rand(350001,999999)));
	}

	/**
	 * 获取当前时间
	 * 1111-11-11 11:11:11
	 * @return [type] [description]
	 */
	public function _datetime()
	{
		return date('Y-m-d H:i:s',time());
	}

	/**
	 * bool判断参数是否合法
	 * 1、判断ip
	 * 2、判断邮件
	 * @param  [type] $val [description]
	 * @return [type]      [description]
	 */
	public function _boolval($val,$type)
	{
		if ($type == 'ip'){
			$status = filter_var($val,FILTER_VALIDATE_IP);
		}elseif ($type == 'email'){
			$status = filter_var($val,FILTER_VALIDATE_EMAIL);
		}elseif ($type == 'port') {
			if (intval($val) > 0 and intval($val) < 65536){
				$status = true;
			}else{
				$status = false;
			}
		}elseif ($type == 'url') {
			$status = filter_var($val,FILTER_VALIDATE_URL);
		}elseif ($type == 'md5'){
			if (preg_match("/^[a-z0-9]{32}$/", $val)){
				$status = true;
			}else{
				$status = false;
			}
		}
		if (!$status){
			return false;
		}else{
			return true;
		}
	}

}
/* End of file Someclass.php */