<?php


class Controller_New_User Extends Controller_Base
{
	public $layouts = "index";


	function index($args) {
		$this->template->view('index');
	}
}