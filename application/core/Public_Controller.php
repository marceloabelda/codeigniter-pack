<?php defined('BASEPATH') OR exit('No direct script access allowed');


class Public_Controller extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->benchmark->mark('public_controller_start');
		$this->template->set_theme('welcome');
		$this->data->theme = $this->template->get_theme_path();
		$this->template
			->set_layout('default.html')
			->set_partial('metadata', 'partials/metadata.html');
		$this->benchmark->mark('public_controller_end');
		
	}
	
}
