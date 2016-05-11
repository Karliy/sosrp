<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP 5.1.6 or newer
 *
 * @package		CodeIgniter
 * @author		ExpressionEngine Dev Team
 * @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc.
 * @license		http://codeigniter.com/user_guide/license.html
 * @link		http://codeigniter.com
 * @since		Version 1.0
 * @filesource
 */

// ------------------------------------------------------------------------

/**
 * CodeIgniter Application Controller Class
 *
 * This class object is the super class that every library in
 * CodeIgniter will be assigned to.
 *
 * @package		CodeIgniter
 * @subpackage	Libraries
 * @category	Libraries
 * @author		ExpressionEngine Dev Team
 * @link		http://codeigniter.com/user_guide/general/controllers.html
 */
class CI_Controller {

	private static $instance;

	/**
	 * Constructor
	 */
	public function __construct()
	{
		self::$instance =& $this;

		// Assign all the class objects that were instantiated by the
		// bootstrap file (CodeIgniter.php) to local class variables
		// so that CI can run as one big super object.
		foreach (is_loaded() as $var => $class)
		{
			$this->$var =& load_class($class);
		}

		$this->load =& load_class('Loader', 'core');

		$this->load->initialize();
		
		log_message('debug', "Controller Class Initialized");
	}

	public function config_panding($base_url,$total_rows,$per_page)
	{
		$_config=array();
		$_config['base_url']=$base_url;
		$_config['total_rows']=$total_rows;
		$_config['per_page']=$per_page;
		$_config['uri_segment'] =3;
        $_config['full_tag_open'] = '<ul class="pagination pagination-sm pull-right">';
        $_config['full_tag_close'] = '</ul></div>';
        $_config['cur_tag_open'] = '<li class="active"><a>';
        $_config['cur_tag_close'] = '</a></li>';
        $_config['num_tag_open'] = '<li>';
        $_config['num_tag_close'] = '</li>';
        $_config['prev_tag_open'] = '<li>';
        $_config['prev_tag_close'] = '</li>';
        $_config['next_tag_open'] = '<li>';
        $_config['next_tag_close'] = '</li>';
        $this->pagination->initialize($_config);
	}

	public static function &get_instance()
	{
		return self::$instance;
	}
}
// END Controller class

/* End of file Controller.php */
/* Location: ./system/core/Controller.php */