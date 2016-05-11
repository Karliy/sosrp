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

}

?>