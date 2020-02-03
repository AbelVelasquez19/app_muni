<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contro_rptreca extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        /* validacion de session creado */
        if(!$this->session->userdata('Login')){
            redirect(base_url());
        }
        $this->load->model('Model_reporte');
    }
	public function index()
	{	
        $this->load->view('layouts/header');
		$this->load->view('layouts/aside');	
		$this->load->view('reportes/vista_rptreca');    
    }
    //controlador de funcion de reporte el total recaudado del campaña gat
    public function RptTotal(){
        $resultado=$this->Model_reporte->Rrp_Total();		
		echo json_encode($resultado);
    }

    //controlador de funcion de reporte por fecha y zona de capañana gat
    public function RptFecha(){
        $resultado=$this->Model_reporte->Rrp_FECHA();		
		echo json_encode($resultado);
    }

    //controlador de funcion de Total recaudado del campaña gat
    public function RptTotalRecaudado(){
        $resultado=$this->Model_reporte->Total_Recaudado();
        echo json_encode($resultado);
    }


}
