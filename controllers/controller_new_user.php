<?php


class Controller_New_User Extends Controller_Base
{
	public $layouts = "index";


	function index() {
		$this->template->view('index');
	}
}