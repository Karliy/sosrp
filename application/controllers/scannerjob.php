<?php
class Scannerjob extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model('scanner_model');
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
			case 'web':
				$this->web_scanner($this->input);
				break;
			
			case 'port':
				$this->port_scanner($this->input);
				break;

			case 'pass':
				$this->password_scanner($this->input);
				break;
			
			default:
				echo json_encode(array('status' => 0));
				break;
		}
	}

	/**
	 * WEB漏洞扫描
	 * @param  [type] $inputs [description]
	 * @return [type]         [description]
	 */
	private function web_scanner($inputs)
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
			case 'delete':
				echo json_encode($this->user_model->user_delete($id));
				break;
			case 'add':
				echo json_encode($this->user_model->user_add($inputs));
				break;
			default:
				echo json_encode(array('status' => 0));
				break;
		}
	}
}