<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 
 */
class Admin extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->library(array('session'));
		$this->load->helper(array('url'));
	}
	
	public function index()
	{
		if($this->session->userdata('perfil') == FALSE || $this->session->userdata('perfil') != 'administrador')
		{
			redirect(base_url().'login');
		}
		$data['titulo'] = 'Bienvenido Administrador';

		$this->load->helper("form"); //loads form helper as aid for the login form
		$this->load->view('templates/head');
		$this->load->view('templates/loggedHeader',$data);
		$this->load->view('templates/content');
		$this->load->view('templates/footer');

	}
}
