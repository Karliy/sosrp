<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');


class UploadPath_smart{

	public function plugin($type)
	{
		if ($type=='web'){
			return '/data/swscan/plugins/web/';
		}else{
			return '/data/swscan/plugins/sys/';
		}
		
	}

	public function pic()
	{
		return '/xpic/';
	}
}
/* End of file Someclass.php */