<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends Public_Controller {

	function __construct()
	{
		parent::__construct();
		$this->data->actions = '';
		if (!$this->ion_auth->logged_in())
		{
			$this->data->user_msg = anchor('users/admin/login', 'login');
		}
		else{
			$usuario = $this->ion_auth->get_user()->username;
			$grupo = $this->ion_auth->get_user()->group;
			$salir = anchor('users/admin/logout','logout');
			$this->data->user_msg = "<b>Usuario:</b> $usuario <b>Grupo:</b> $grupo | $salir";
			if ($this->ion_auth->is_admin()) {
				$this->data->actions = anchor ('users/admin/index','usuarios').br().anchor ('groups/admin/index','grupos');
			}
		}
		
	}

	function index()
	{
		
		$this->template
			->set_theme('welcome')
			->set_layout('default.html')
			->set_partial('metadata', 'partials/metadata.html');
		$this->data->theme = $this->template->get_theme_path();
		$this->template
			->build('welcome_message', $this->data);
		//$this->firephp->fb($this->data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */ 
