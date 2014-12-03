<?php
class MY_Controller extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();

		$publicURLs = array ("welcome","users/login","users/register"); //controllers that are available without usser being logged in
		
		$this->load->helper('url');
		$this->load->library('session');
				
		//Check for authentication
		$userData=$this->session->userdata('logged_in'); //get usert data from the session variable
		 //if userData is not an array it means that the user has not logged in (there's no valid session)
		if(is_array($userData)== false && !in_array(uri_string(),$publicURLs)){ //if the requested controller (page) is not in the publicURLs
			redirect('welcome');			
		}	
	}
}
?>