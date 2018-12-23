<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	

 	public function __construct()
    {
        parent::__construct();

        
    }

	public function index()
	{	
		if ($this->session->has_userdata('username')) {
        	redirect(base_url() . 'admin');
    	}else{
    		$this->load->view('tempages/header');
			$this->load->view('home/home');
			$this->load->view('tempages/footer');
    	}
	}

	function login_varidation()
	{	
		$this->load->model("Main_model");
		$this->load->library('form_validation');

		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == TRUE)
        {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            
            if ($this->Main_model->can_login($username,$password)) 
            {
            	$session_data = array(
            		'username' => $username
            	);
            	// $this->session->userdata();
            	$this->session->set_userdata($session_data);
            	redirect(base_url() . 'admin');

            }
            else
        	{
        		// $this->session->set_flashdata('error','Invalid Username and Password');
        		// echo "error";
            	redirect(base_url() . 'home');

        	}
        }
        else
        {
        	redirect(base_url() . 'home');
        }
	}

  	function logout()  
  	{  
      	$this->session->unset_userdata('username');
  		// $this->session->sess_destroy();
       	redirect(base_url().'home');  
  	}  

}
