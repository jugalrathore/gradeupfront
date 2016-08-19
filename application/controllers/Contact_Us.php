<?php
//defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_Us extends CI_Controller {
	function __construct()
    {
        parent::__construct();
       // if(!$this->session->has_userdata('uid'))
			//redirect('login');
    }
	public function index()
	{
		
		$this->load->view('header');
		$this->load->view('contact');
		$this->load->view('footer');
	}
}
