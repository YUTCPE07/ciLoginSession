<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function __construct()
    {
        parent::__construct();

        $this->load->view('tempages/header');
		$this->load->view('tempages/welcome');
		$this->load->view('tempages/footer');
    }

	public function index()
	{
		
	}
}
