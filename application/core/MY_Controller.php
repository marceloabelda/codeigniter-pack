<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

   function __construct()
   {
		parent::__construct();		
		$this->load->library('users/ion_auth');
		$this->load->library('form_validation');
		$this->load->helper('users/user');
		$this->load->model('groups/group_m');
		$this->user = $this->ion_auth->get_user();
		self::_check_access();
		$this->template->set_theme('admin-theme');
				
		$this->data->theme = $this->template->get_theme_path();
		//$this->data->asset_url = $this->config['asset_url'];

		
		$this->template
			->set_layout('default-layout.html')
			->set_partial('metadata', 'partials/metadata.html')
			->set_partial('header', 'partials/header.php')
			->set_partial('tabs', 'partials/tabs.php')
			->set_partial('aside', 'partials/aside.php')
			->set_partial('content-header', 'partials/content-header.html')
			->set_partial('content-notices', 'partials/content-notices.php')
			->set_partial('footer-script', 'partials/footer-script.php')
			->set_partial('footer', 'partials/footer.html');
		

   }
   	private function _check_access()
	{
	    // These pages get past permission checks
	    //$ignored_pages = array('admin/login', 'admin/logout');
	    $ignored_pages = array('users/admin/login', 'users/admin/logout');

	    // Check if the current page is to be ignored
	    $current_page = $this->uri->segment(1, '') . '/' . $this->uri->segment(2, ''). '/' . $this->uri->segment(3, 'index');

	    // Dont need to log in, this is an open page
		if(in_array($current_page, $ignored_pages))
		{
			return TRUE;
		}

		else if (!$this->user)
		{
			redirect('users/admin/login');
		}

		// Well they at least better have permissions!
		else if ($this->user)
		{
			return TRUE;
		}

		// god knows what this is... erm...
		return FALSE;
	}
 }
