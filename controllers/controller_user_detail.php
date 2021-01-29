<?php


class Controller_User_Detail Extends Controller_Base
{
	public $layouts = "index";


	function index() {
		$this->template->view('index');
	}
}