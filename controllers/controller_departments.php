<?php


class Controller_Departments Extends Controller_Base
{
	public $layouts = "index";


	function index($args)
	{

		if (isset($args)) {
			if (array_key_exists('delete', $args)) {
				$this->deleteDepartment($args);
			} elseif (array_key_exists('add', $args)) {
				$this->addDepartment($args['add']);
			}
		}

		$model = new Model_Departments('departments_list');
		$departments = $model->getDepartmentsList();
		$this->template->vars('result', $departments);
		$this->template->view('index');
	}

	private function deleteDepartment($args)
	{
		$model = new Model_Departments('departments_list');
		$name = str_replace('delete_', '', $args);
		$model->deleteDepartment($name);
		$this->template->reload();
	}

	private function addDepartment($args)
	{
		$model = new Model_Departments('departments_list');
		$model->addDepartment($args);
		$this->template->reload();
	}

}