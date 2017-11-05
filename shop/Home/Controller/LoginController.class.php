<?php

namespace Home\Controller;

use Think\Controller;
use Home\Model\AdminModel;

class LoginController extends Controller {
	public function login(){
		//$admin = M('Admin');
		$admin = new AdminModel();
		//$res = $admin->select();//
		$res = $admin->where("id > 3")->select();//

		echo "<pre>";
		for ($x = 0; $x < count($res); ++ $x)
		{
			foreach ($res[$x] as $key=>$value)
			{
				echo $key."=".$value."</br>";
			}
		}
		echo "</pre>";
		
		$this->assign("demo", "Hello 3world");
		$this->display();
	}
}

?>