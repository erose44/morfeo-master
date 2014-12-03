<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/********************
*File name: Users.php
*System Name: morfeo
*Module Name: none
*Class Name: Users
*Dependencies: MY_Controller			
*Revision: 2014-11-22
*Author: Rodrigo Morteo 
*e-mail Author: rodrigo@uabc.edu.mx
*Copyright Notice: Derechos reservados, UABC 2014
*********************/
class Users extends MY_Controller {

/**********
Name: register
Description: Processes and validates data recieved from the registration form  
Requirements: $_POST must be set, form-validation library
Input Values none
Output Values: none
Notes:
***********/
	public function	register(){
		if(empty($_POST) || !isset($_POST[""])){		
			$data = array(  //Register field names and properties. Note that field lenghts set from database definition.
				"username"=>array(
						'name'		=> 'username',
						'id'		=> 'username',
						'value'		=> '',
						'maxlength'	=> '45',
						'size'		=> '15',
						'style'		=> '',
						),
				"password"=>array(
						'name'		=> 'password',
						'id'		=> 'password',
						'value'		=> '',
						'maxlength'	=> '45',
						'size'		=> '15',
						'style'		=> '',			
						),
				"passwordVerification"=>array(
						'name'		=> 'passwordVerification',
						'id'		=> 'passwordVerification',
						'value'		=> '',
						'maxlength'	=> '45',
						'size'		=> '15',
						'style'		=> '',			
						),
				"email"=>array(
						'name'		=> 'email',
						'id'		=> 'email',
						'value'		=> '',
						'maxlength'	=> '45',
						'size'		=> '25',
						'style'		=> '',
						'placeholder'=>'example@domain.com'			
						),
				"cancelBtn" => array(
						'name' => 'button',
						'id' => 'button',
						'value' => 'true',
						'type' => 'reset',
						'content' => 'Reset'
						)
			);
							
			$this->load->helper("form"); //loads form helper as aid for the registration form
			$this->load->view('templates/head');
			$this->load->view('templates/header');
			$this->load->view('templates/register',$data);
			$this->load->view('templates/footer');
			return;
		}
		else
		{

			//Process user data 
			
			//if form invalid
			//$this->load->view("registration",$data);
		}
	}
/**********
Name: login 
Description:  
Requirements: $_POST must be set, form-validation library
Input: @var username @var password 
Output Values: none
Notes:
***********/	
	public function login(){
		
	}
}

?>