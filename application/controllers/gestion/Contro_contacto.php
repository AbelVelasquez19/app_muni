<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contro_contacto extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
		//$this->load->model('Model_asistencia');
	}

	public function index()
	{	
		//$data = array('datos'=>$this->Model_asistencia->Listar_Asistencia(),'falta'=>$this->Model_asistencia->Listar_Faltas());
        $this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('gestion/contacto');
		
	}
}    