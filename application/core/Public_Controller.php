<?php defined('BASEPATH') OR exit('No direct script access allowed');


class Public_Controller extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->benchmark->mark('public_controller_start');
		$this->benchmark->mark('public_controller_end');
	}
	
}
