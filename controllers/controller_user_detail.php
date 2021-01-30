<?php


class Controller_User_Detail Extends Controller_Base
{
	public $layouts = "index";


	function index($args) {
		$model = new Model_User_Detail('all_users');
		$user = $model->getUser($args);
		$this->template->vars('result', $user);
		$this->template->view('index');
	}
}