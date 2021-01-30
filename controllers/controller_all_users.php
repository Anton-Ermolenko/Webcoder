<?php


class Controller_All_Users Extends Controller_Base
{

	public $layouts = "index";


	function index($args) {

		$model = new Model_All_Users('all_users');
		$users = $model->getUserList();
		$this->template->vars('result', $users);
		$this->template->view('index');
	}


}