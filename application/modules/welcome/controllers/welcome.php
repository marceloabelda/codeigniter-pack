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
		
		$this->load->view('welcome_message',$this->data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
