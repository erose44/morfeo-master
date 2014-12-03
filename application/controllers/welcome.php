<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/********************
*File name: welcome.php
*System Name: morfeo
*Module Name: none
*Class Name: Welcome
*Dependencies: MY_Controller			
*Revision: 2014-11-22
*Author: Rodrigo Morteo 
*e-mail Author: rodrigo@uabc.edu.mx
*Copyright Notice: Derechos reservados, UABC 2014
*********************/
class Welcome extends MY_Controller {

/**********
Name: index
Description: Displays welcome page  
Requirements: 
Input Values none
Output Values: none
Notes:
***********/
	public function index()
	{
		$data=array( //login Form fields and properties
			"username"=>array(
				'name'		=> 'username',
				'id'		=> 'username',
				'value'		=> '',
				'maxlength'	=> '45',
				'size'		=> '20',
				'style'		=> '',
				'placeholder'=>'Username'
            ),
			"password"=>array(
				'name'		=> 'password',
				'type'		=> 'password',
				'value'		=> '',
				'maxlength'	=> '45',
				'size'		=> '20',
				'style'		=> '',
				'placeholder'=>'Password'			
			),
			"submit"=>array(
				'name'		=> 'submit',
				'type'		=> 'submit',
				'value'		=> 'Login',
				'class'		=> 'buttom',
				'content' => 'Login'
			),
			"register"=>array(
				'name'		=> 'register',
				'type'		=> 'submit',
				'value'		=> 'register',
				'class'		=> 'buttom',
				'content' => 'Register'
				)
		);
		
		$this->load->helper("form"); //loads form helper as aid for the login form
		$this->load->view('templates/head');
		$this->load->view('templates/header',$data);
		$this->load->view('templates/content');
		$this->load->view('templates/footer');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */