<?php
class Sysjob extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model('user_model');
		$session=$this->session->userdata('username');
		if(!$session){
			redirect('/login','location');
		}
	}

	/**
	 * 综合路由
	 * @return [type] [description]
	 */
	public function worker_routes()
	{
		// 方法选择
		$jump = $this->input->post('jump');

		switch ($jump) {
			case 'users':
				$this->users($this->input);
				break;
			
			case 'bugs':
				$this->bugs($this->input);
				break;

			case 'roles':
				$this->roles($this->input);
				break;
			
			default:
				echo json_encode(array('status' => 0));
				break;
		}
	}

	/**
	 * 用户的处理方法
	 * @return [type] [description]
	 */
	private function users($inputs)
	{
		$obj = $inputs->post('obj');
		$id = $inputs->post('id');

		switch ($obj) {
			case 'list':
				echo json_encode($this->user_model->user_list());
				break;
			case 'status':
				echo json_encode($this->user_model->user_status($id,$inputs->post('ustatus')));
				break;
			default:
				echo json_encode(array('status' => 0));
				break;
		}
	}
}