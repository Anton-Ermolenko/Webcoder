<?php


class Controller_Departments Extends Controller_Base
{
	public $layouts = "index";


	function index() {
		$this->template->view('index');
	}
}