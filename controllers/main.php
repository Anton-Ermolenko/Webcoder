<?php


class Main  Extends Controller_Base
{
	// шаблон
	public $layouts = "main";

	// экшен
	function index() {
		$this->template->view('index');
	}
}