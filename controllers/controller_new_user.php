<?php


class Controller_New_User Extends Controller_Base
{
	public $layouts = "index";


	function index($args) {
		if (isset($args)) {
			$this->addUser($args);
		}

		$model = new Model_Departments('departments_list');
		$departments = $model->getDepartmentsList();
		$this->template->vars('result', $departments);
		$this->template->view('index');
	}

	private function addUser($args)
	{

		$model = new Model_New_User('all_users');
		$model->addUser($args);
		$this->template->reload();
	}
}