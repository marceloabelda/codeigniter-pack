<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Panel extends Authenticated_Controller {

	function __construct()
	{
		parent::__construct();
		
	}

	function index()
	{
		
		$this->template
			->build('panel', $this->data);

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */ 
