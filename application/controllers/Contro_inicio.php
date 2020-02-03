<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contro_inicio extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        /* validacion de session creado */
        if(!$this->session->userdata('Login')){
            redirect(base_url());
        }
    }
	public function index()
	{
        $this->load->view('layouts/header');
		$this->load->view('layouts/aside');	
		$this->load->view('admin/vista_inicio');
	}
}
