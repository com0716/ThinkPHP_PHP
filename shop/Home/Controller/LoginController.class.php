<?php

namespace Home\Controller;

use Think\Controller;

class LoginController extends Controller {
	public function login(){		
		$this->assign("demo", "Hello 3world");
		$this->display();
	}
}

?>