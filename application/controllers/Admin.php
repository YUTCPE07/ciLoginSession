<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {


	public function __construct()
    {
        parent::__construct();

        if ($this->session->has_userdata('username')) {
        	$output = $this->session->userdata();
        	$this->load->view('tempages/header');
			$this->load->view('admin/admin',$output);
			$this->load->view('tempages/footer');
        }else{
        	redirect(base_url().'home');
        }	

    }

	public function index()
	{
		// echo "Admib page";
		
	}
}
