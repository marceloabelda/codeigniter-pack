<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Publico extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		
	}

	function index()
	{
		
		$this->data->theme = $this->template->get_theme_path();
		

		$this->template
			->set_theme('public-theme')
			->set_layout('default.html')
			->set_partial('metadata', 'partials/metadata.html')
			->set_partial('header', 'partials/header.html')
			->set_partial('sidebar', 'partials/sidebar.html')
			->set_partial('footer', 'partials/footer.html');	
		$this->template
			->build('home', $this->data);

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */ 
