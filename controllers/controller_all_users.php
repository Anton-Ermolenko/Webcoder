<?php


class Controller_All_Users Extends Controller_Base
{

	public $layouts = "index";


	function index() {

		$model = new Model_All_Users();
		$users = $model->getUserList();
		$this->template->vars('result', $users);
		$this->template->view('index');
	}


}