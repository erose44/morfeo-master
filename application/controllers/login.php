<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by JetBrains PhpStorm.
 * User: isra
 * Date: 19/01/13
 * Time: 18:51
 * To change this template use File | Settings | File Templates.
 */
class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
		$this->load->model('login_model');
		$this->load->library(array('session','form_validation'));
		$this->load->helper(array('url','form'));
		$this->load->database('default');
    }
	/*esta funcion nos permitira checar que si a la que se va a entrar no esta 
	logeada te redirecciones al index welcome*/
	public function index()
	{	
		switch ($this->session->userdata('perfil')) {
			case '':
				redirect(base_url().'index.php/welcome');
			break;

			case 'administrador':
				$this->load->helper("form"); //loads form helper as aid for the login form
				$this->load->view('templates/head');
				$this->load->view('templates/loggedHeader');
				$this->load->view('templates/content');
				$this->load->view('templates/footer');
				break;

			case 'user':
				$this->load->helper("form"); //loads form helper as aid for the login form
				$this->load->view('templates/head');
				$this->load->view('templates/loggedHeader');
				$this->load->view('templates/content');
				$this->load->view('templates/footer');
				break;	
	
		}
	}
	/*esta funcion genera una clave aleatoria por usuario, misma que se usara durante todo el 
	tiempo que este navegando entre paginas, para evitar el croossite*/
	public function token()
	{
		$token = sha1(uniqid(rand(),true));
		$this->session->set_userdata('token',$token);
		return $token;
	}
	/*esta funcion es la que nos permitira verificar que el ingreso al formulario sea el correcto,
	tambien si tiene un numero determinado de caracteres*/
	public function new_user()
	{
		// esta comentado lo siguiente por que tengo problemas al generar el token
		//y tambien en validar que se ingrese el nombre de usuario y contraseña

		/*if($this->input->post('token') && $this->input->post('token') == $this->session->userdata('token'))
		{
            $this->form_validation->set_rules('username', 'nombre de usuario', 'required|trim|min_length[2]|max_length[150]|xss_clean');
            $this->form_validation->set_rules('password', 'password', 'required|trim|min_length[5]|max_length[150]|xss_clean');
 
            //lanzamos mensajes de error si es que los hay
            $this->form_validation->set_message('required', 'El %s es requerido');
            $this->form_validation->set_message('min_length', 'El %s debe tener al menos %s carácteres');
            $this->form_validation->set_message('max_length', 'El %s debe tener al menos %s carácteres');
			if($this->form_validation->run() == FALSE)
			{
				$this->index();
			}else{*/
				$username = $this->input->post('username');
				$password = sha1($this->input->post('password'));
				$check_user = $this->login_model->login_user($username,$password);
				if($check_user == TRUE)
				{
					$data = array(
	                'is_logued_in' 	=> 		TRUE,
	                'id_usuario' 	=> 		$check_user->id,
	                'perfil'		=>		$check_user->perfil,
	                'username' 		=> 		$check_user->username,
            		);		
					$this->session->set_userdata($data);
					$this->index();
				}
		/*	}
		}*/else{
			redirect(base_url().'welcome');
		}
	}

	public function logout_ci()
	{
		$this->session->sess_destroy();
		$this->index();
	}
}
