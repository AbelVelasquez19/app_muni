<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contro_servicio extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        /* validacion de session creado */
        if(!$this->session->userdata('Login')){
            redirect(base_url());
        }
        $this->load->model('Model_campana');
        $this->load->helper('url','form');
        $this->load->library('form_validation');
    }
	public function index()
	{
        $this->load->view('layouts/header');
		$this->load->view('layouts/aside');	
		$this->load->view('campana/vista_servicio');
    }

    public function BuscarCodigo(){
        $txt_buscar_codigo  = str_pad($this->input->post('txt_buscar_codigo'),7,"0",STR_PAD_LEFT);
        $data =  array(
            "cod_contri_historial2020"=>$this->Model_campana->Buscarcodigo_servicios($txt_buscar_codigo),
        );
        echo json_encode($data);
    }

    public function Buscardni(){
        $txt_buscar_dni  = $this->input->post('txt_buscar_dni');
        $data =  array(
            "dni_contri_historial2020"=>$this->Model_campana->Buscardni_servicios($txt_buscar_dni),
        );
        echo json_encode($data);
    }

    public function MostrarTipoTratamiento(){
        $result = $this->Model_campana->ObtenerTipoTratamiento();
        echo json_encode($result);
    }

    /*public function RegistrarMascota(){
        if($this->input->post("submit")){
            $this->form_validation->set_rules('txt_codigo_contr2020', 'Codigo de contribuyente', 'required|trim');
            $this->form_validation->set_rules('txtnombremascota', 'Nombre de mascota', 'required|trim');
            $this->form_validation->set_rules('ttxedadmascota', 'edad del mascota', 'required|trim');

            $this->form_validation->set_message('required','<p id="required" style=";margin-bottom: -33px" class="text-danger">%s es obligatorio</p>');

            if ($this->form_validation->run() == true){ 
                $datos["mensaje"]="Registro Correctamente";
            }else {
                $datos["mensaje"]="Error al registrar";
            }
            $this->load->view('layouts/header');
            $this->load->view('layouts/aside');	
            $this->load->view('campana/vista_servicio',$datos);
        }
    }*/
    public function date_number(){
        return date('yy-m-d');
    }
    
  
    public function time(){
        date_default_timezone_set("America/Lima");
        return date("h:i:s");
    }

    public function RegistrarAtencionMascota(){
        $Fec_atencion = $this->date_number();
        $Hor_atencion = $this->time();

        $Tip_atencion=$this->input->post('Tip_atencion');
        $Cod_relacionado=$this->input->post('Cod_relacionado');
        $Cod_usuario=$this->input->post('Cod_usuario');

        $Nom_mascota=$this->input->post('Nom_mascota');
        $Eda_mascota=$this->input->post('Eda_mascota');
        $Raz_mascota=$this->input->post('Raz_mascota');
        $Tip_mascota=$this->input->post('Tip_mascota');
        $Obs_mascota=$this->input->post('Obs_mascota');
        $Cod_tratamiento=$this->input->post('Cod_tratamiento');
        $mensaje = "";
        $data = array(
            "Cod_atencion"=>null,
            "Fec_atencion"=> $Fec_atencion,
            "Hor_atencion"=> $Hor_atencion,
            "Tip_atencion"=> $Tip_atencion,
            "Cod_relacionado" =>$Cod_relacionado,
            "Cod_usuario" =>  $Cod_usuario
        );
        if($this->Model_campana->RegistrarAtencion($data)==true){
            $codigo_atencion = $this->Model_campana->CodigoUltAtencion();
            $this->RegistrarMascota($Nom_mascota,$Eda_mascota,$Raz_mascota,$Tip_mascota,$Obs_mascota,$Cod_tratamiento,$codigo_atencion);
            $mensaje .="Registro Exitoso";
        }
        echo $mensaje;
    }

    protected function RegistrarMascota($Nom_mascota,$Eda_mascota,$Raz_mascota,$Tip_mascota,$Obs_mascota,$Cod_tratamiento,$cod_atencion){
        $data = array(
            "Nom_mascota"=>$Nom_mascota,
            "Eda_mascota"=>$Eda_mascota,
            "Raz_mascota"=>$Raz_mascota,
            "Tip_mascota"=>$Tip_mascota,
            "Obs_mascota"=>$Obs_mascota,
            "Cod_tratamiento"=>$Cod_tratamiento,
            "Cod_atencion"=>$cod_atencion
        );

        $this->Model_campana->RegistrarMascota($data);
    }

    public function RegistrarAtencionCarPint(){
        $Fec_atencion = $this->date_number();
        $Hor_atencion = $this->time();

        $Tip_atencion=$this->input->post('Tip_atencion');
        $Cod_relacionado=$this->input->post('Cod_relacionado');
        $Cod_usuario=$this->input->post('Cod_usuario');

        $Nom_carita_pintada=$this->input->post('nom_caritapint');
        $Dni_carita_pintada=$this->input->post('dni_caritapint');
        $Eda_carita_pintada=$this->input->post('edad_caritapint');
        $Sex_carita_pintada=$this->input->post('sexo_caritapint');
        $Obs_carita_pintada=$this->input->post('obs_caritPi');

        $mensaje = "";
        $data = array(
            "Cod_atencion"=>null,
            "Fec_atencion"=> $Fec_atencion,
            "Hor_atencion"=> $Hor_atencion,
            "Tip_atencion"=> $Tip_atencion,
            "Cod_relacionado" =>$Cod_relacionado,
            "Cod_usuario" =>  $Cod_usuario
        );
        if($this->Model_campana->RegistrarAtencion($data)==true){
            $codigo_atencion = $this->Model_campana->CodigoUltAtencion();
            $this->RegistrarCaritPint($Nom_carita_pintada,$Dni_carita_pintada,$Eda_carita_pintada,$Sex_carita_pintada,$Obs_carita_pintada,$codigo_atencion);
            $mensaje .="Registro Exitoso";
        }
        echo $mensaje;
    }

    protected function RegistrarCaritPint($Nom_carita_pintada,$Dni_carita_pintada,$Eda_carita_pintada,$Sex_carita_pintada,$Obs_carita_pintada,$codigo_atencion){
        $data = array(
            "Nom_carita_pintada"=>$Nom_carita_pintada,
            "Dni_carita_pintada"=>$Dni_carita_pintada,
            "Eda_carita_pintada"=>$Eda_carita_pintada,
            "Sex_carita_pintada"=>$Sex_carita_pintada,
            "Obs_carita_pintada"=>$Obs_carita_pintada,
            "Cod_atencion"=>$codigo_atencion,
        );

        $this->Model_campana->RegistrarCaritasPintadas($data);
    }

    public function RegistrarAtencionCorteCabell(){
        $Fec_atencion = $this->date_number();
        $Hor_atencion = $this->time();

        $Tip_atencion=$this->input->post('Tip_atencion');
        $Cod_relacionado=$this->input->post('Cod_relacionado');
        $Cod_usuario=$this->input->post('Cod_usuario');

        $Nom_corte_cabello=$this->input->post('nombre_cortecabell');
        $Dni_corte_cabello=$this->input->post('dni_cortecabell');
        $Eda_corte_cabello=$this->input->post('edad_cortecabell');
        $Sex_corte_cabello=$this->input->post('sexo_cortecabell');
        $Obs_corte_cabello=$this->input->post('obs_cortecabell');

        $mensaje = "";
        $data = array(
            "Cod_atencion"=>null,
            "Fec_atencion"=> $Fec_atencion,
            "Hor_atencion"=> $Hor_atencion,
            "Tip_atencion"=> $Tip_atencion,
            "Cod_relacionado" =>$Cod_relacionado,
            "Cod_usuario" =>  $Cod_usuario
        );
        if($this->Model_campana->RegistrarAtencion($data)==true){
            $codigo_atencion = $this->Model_campana->CodigoUltAtencion();
            $this->RegistrarCorteCabell($Nom_corte_cabello,$Dni_corte_cabello,$Eda_corte_cabello,$Sex_corte_cabello,$Obs_corte_cabello,$codigo_atencion);
            $mensaje .="Registro Exitoso";
        }
        echo $mensaje;
    }

    protected function RegistrarCorteCabell($Nom_corte_cabello,$Dni_corte_cabello,$Eda_corte_cabello,$Sex_corte_cabello,$Obs_corte_cabello,$codigo_atencion){
        $data = array(
            "Nom_corte_cabello"=>$Nom_corte_cabello,
            "Dni_corte_cabello"=>$Dni_corte_cabello,
            "Eda_corte_cabello"=>$Eda_corte_cabello,
            "Sex_corte_cabello"=>$Sex_corte_cabello,
            "Obs_corte_cabello"=>$Obs_corte_cabello,
            "Cod_atencion"=>$codigo_atencion,
        );

        $this->Model_campana->RegistrarCorteCabello($data);
    }

    public function RegistrarAtencionManicure(){
        $Fec_atencion = $this->date_number();
        $Hor_atencion = $this->time();

        $Tip_atencion=$this->input->post('Tip_atencion');
        $Cod_relacionado=$this->input->post('Cod_relacionado');
        $Cod_usuario=$this->input->post('Cod_usuario');

        $Nom_manicure=$this->input->post('nom_manicure');
        $Dni_manicure=$this->input->post('dni_manicure');
        $Eda_manicure=$this->input->post('edad_manicure');
        $Sex_manicure=$this->input->post('sexo_manicure');
        $Obs_manicure=$this->input->post('obs_manicure');

        $mensaje = "";
        $data = array(
            "Cod_atencion"=>null,
            "Fec_atencion"=> $Fec_atencion,
            "Hor_atencion"=> $Hor_atencion,
            "Tip_atencion"=> $Tip_atencion,
            "Cod_relacionado" =>$Cod_relacionado,
            "Cod_usuario" =>  $Cod_usuario
        );
        if($this->Model_campana->RegistrarAtencion($data)==true){
            $codigo_atencion = $this->Model_campana->CodigoUltAtencion();
            $this->RegistrarManicur($Nom_manicure,$Dni_manicure,$Eda_manicure,$Sex_manicure,$Obs_manicure,$codigo_atencion);
            $mensaje .="Registro Exitoso";
        }
        echo $mensaje;
    }

    protected function RegistrarManicur($Nom_manicure,$Dni_manicure,$Eda_manicure,$Sex_manicure,$Obs_manicure,$Cod_atencion){
        $data = array(
            "Nom_manicure"=>$Nom_manicure,
            "Dni_manicure"=>$Dni_manicure,
            "Eda_manicure"=>$Eda_manicure,
            "Sex_manicure"=>$Sex_manicure,
            "Obs_manicure"=>$Obs_manicure,
            "Cod_atencion"=>$Cod_atencion,
        );

        $this->Model_campana->RegistrarManicure($data);  
    }
}