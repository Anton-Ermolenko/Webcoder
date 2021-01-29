<?php


class Controller_All_Users Extends Controller_Base
{

	public $layouts = "index";


	function index() {
		$this->template->view('index');
	}
}