<?php
class Task extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->model('task_model');
	}

	/**
	 * 默认请求
	 * @return [type] [description]
	 */
	function index()
	{
		echo json_encode(array('status'=>0));
	}

	/**
	 * 扫描任务对象操作
	 * －－－－
	 * 1、增加新的任务
	 * 2、删除任务
	 * 3、任务报告读取（临时/持久）
	 * 4、扫描列表读取
	 * 5、停止任务
	 * 6、启动任务
	 * @return [type] [description]
	 */
	function scantask_obj()
	{
		$id=intval($this->input->post('id'));
		$object=$this->input->post('obj');

		if ($object == 'add'){
			$name=$this->input->post('scan_name');
			$type=$this->input->post('scan_type');
			$modules=$this->input->post('scan_modules');
			$useranget=$this->input->post('scan_useranget');
			$cookies=$this->input->post('scan_cookies');
			$special=$this->input->post('scan_special');

			echo json_encode($this->task_model->scan_add($name,$type,$modules,$useranget,$cookies,$special));
		}else{
			if (!isset($id)){
				echo json_encode(array('status' => 0,'msg' => '恶意操作,非法提交。'));
			}else{
				if ($object == 'report_read'){
					// 扫描任务报告信息读取（读mysql)
					echo json_encode($this->task_model->scan_report_read($id));
				}elseif ($object == 'process_read') {
					// 扫描任务过程信息读取（读redis）
					echo json_encode($this->task_model->scan_process_read($id));
				}elseif($object == 'list'){
					// 扫描任务列表
					echo json_encode($this->task_model->scan_list());
				}elseif ($object == 'del'){
					// 扫描任务删除
					echo json_encode($this->task_model->scan_delete($id));
				}elseif ($object == 'stop'){
					// 扫描任务停止
					echo json_encode($this->task_model->scan_stop($id));
				}elseif ($object == 'start'){
					// 扫描任务开始
					echo json_encode($this->task_model->scan_start($id));
				}else{
					echo json_encode(array('status' => 0,'msg' => '恶意操作,非法提交。'));
				}
			}
		}
	}

	/**
	 * 可用性监控模块对象
	 * －－－－
	 * 1、添加监控任务
	 * 2、监控报告读取
	 * 3、监控列表读取
	 * 4、开启、停止监控
	 * 5、删除监控任务
	 * @return [type] [description]
	 */
	function availabilitytask_obj()
	{
		$id=intval($this->input->post('id'));
		$object=$this->input->post('obj');

		if ($object == 'add'){
			// 监控任务名称
			$name=$this->input->post('monitor_name');
			// 监控服务类型
			$service=$this->input->post('monitor_service');
			// 监控频率
			$frequency=$this->input->post('monitor_frequency');
			// 探测请求类型
			$type=$this->input->post('monitor_type');

			echo json_encode($this->task_model->availability_add($name,$service,$frequency,$type));
		}else{
			if (!isset($id)){
				echo json_encode(array('status' => 0,'msg' => '恶意操作,非法提交。'));
			}else{
				if ($object == 'report_read'){
					// 监控报告信息读取（读mysql)
					echo json_encode($this->task_model->availability_read($id));
				}elseif($object == 'list'){
					// 监控任务列表
					echo json_encode($this->task_model->availability_list());
				}elseif ($object == 'del'){
					// 监控任务删除
					echo json_encode($this->task_model->availability_delete($id));
				}elseif ($object == 'stop'){
					// 监控任务停止
					echo json_encode($this->task_model->availability_stop($id));
				}elseif ($object == 'start'){
					// 监控任务结束
					echo json_encode($this->task_model->availability_start($id));
				}else{
					echo json_encode(array('status' => 0,'msg' => '恶意操作,非法提交。'));
				}
			}
		}
	}
}