<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contro_registro extends CI_Controller {
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
		$this->load->view('campana/vista_registro');
    }

    public function BuscarCodigo(){
        $codigo = str_pad($this->input->post('txtcodigo'),7,"0",STR_PAD_LEFT);
        $data = array(
            "BuscarCodigo"=>$this->Model_campana->Buscarcodigo($codigo),
        );
		echo json_encode($data);
    }
    public function BuscarDni(){
        $dni = $this->input->post('txtdni');
        $data = array(
            "BuscarDni"=>$this->Model_campana->Buscardni($dni),
        );
		echo json_encode($data);
    }

    public function BuscarNombre(){
        $txtnombre = $this->input->post('txtnombre');
        $data = array(
            "Buscarnombre"=>$this->Model_campana->BuscarNombre($txtnombre),
        );
		echo json_encode($data);
    }

    public function date_number(){
        return date('yy-m-d');
    }
    
  
    public function time(){
        date_default_timezone_set("America/Lima");
        return date("h:i:s");
    }
    
    public function Registrarcontrihistorial(){
        if($this->input->post("submit")){
            $this->form_validation->set_rules('txt_codigo_con', 'Codigo de contribuyente', 'required|trim|is_unique[tb_contri_historial2020.Sig_contri_historial]');
            $this->form_validation->set_rules('txt_nombre_con', 'Nombre de contribuyente', 'required|trim');
            $this->form_validation->set_rules('txt_dni_con', 'DNI de contribuyente', 'required|trim');
            $this->form_validation->set_rules('txt_edad_con', 'Edad de contribuyente', 'required|trim');
            $this->form_validation->set_rules('txt_nom_rela', 'Nombre relacionado', 'required|trim');
            $this->form_validation->set_rules('txt_dni_rela', 'Dni relacionado', 'required|trim');
            $this->form_validation->set_rules('txt_edad_rela', 'Edad de relacionado', 'required|trim');            
            $this->form_validation->set_rules('txt_cod_usuario', 'Codigo de usuario', 'required');

            $this->form_validation->set_message('required','<p id="required" style=";margin-bottom: -33px" class="text-danger">%s es obligatorio</p>');
            $this->form_validation->set_message('is_unique','<p id="unique" style=";margin-bottom: -33px" class="text-danger">%s ya existe registrado</p>');
            
            $txt_codigo_con = $this->input->post("txt_codigo_con");
            $txt_nombre_con = $this->input->post("txt_nombre_con");
            $txt_edad_con = $this->input->post("txt_edad_con");
            $txt_sexo_con = $this->input->post("txt_sexo_con");
            $txt_dni_con = $this->input->post("txt_dni_con");
            $txt_telefono_con = $this->input->post("txt_telefono_con");
            $txt_celular_con = $this->input->post("txt_celular_con");
            $txt_correo_con = $this->input->post("txt_correo_con");
            $txt_direccion_con = $this->input->post("txt_direccion_con");
            $txt_tipo_atencion = $this->input->post("txt_tipo_atencion");
            $txt_observacion_con = $this->input->post("txt_observacion_con");
            $txt_fecha_con = $this->date_number();
            $txt_hora_con = $this->time();

            $txt_nom_rela = $this->input->post("txt_nom_rela");
            $txt_dni_rela = $this->input->post("txt_dni_rela");
            $txt_sexo_rela = $this->input->post("txt_sexo_rela");
            $txt_edad_rela = $this->input->post("txt_edad_rela");
            $txt_Tip_relacionado = $this->input->post("txt_Tip_relacionado");
            $txt_telefono_rela = $this->input->post("txt_telefono_rela");
            $txtcelular_rela = $this->input->post("txtcelular_rela");
            $txt_vinculo_rela = $this->input->post("txt_vinculo_rela");
            $txt_cod_usuario = $this->input->post("txt_cod_usuario");

            $mensaje="";
            $data = array(
                "Sig_contri_historial"=>$txt_codigo_con,
                "Nom_contri_historial"=>$txt_nombre_con,
                "Eda_contri_historial"=>$txt_edad_con,
                "Sex_contri_historial"=>$txt_sexo_con,
                "Dni_contri_historial"=>$txt_dni_con,
                "Tel_contri_historial"=>$txt_telefono_con,
                "Cel_contri_historial"=>$txt_celular_con,
                "Cor_contri_historial"=>$txt_correo_con,
                "Dir_contri_historial"=>$txt_direccion_con,
                "Pro_contri_historial"=>$txt_tipo_atencion,
                "Obs_contri_historial"=>$txt_observacion_con,
                "Fec_contri_historial"=>$txt_fecha_con,
                "Hor_contri_historial"=>$txt_hora_con
            );

            if ($this->form_validation->run() == true){                
                if($this->Model_campana->RegistrarContriHistoria2020($data)==true){
                    $codigo_con_his = $this->Model_campana->CodigoUltRegistro();
                    $this->Registrar_relacionado($txt_nom_rela,$txt_dni_rela, $txt_sexo_rela,$txt_edad_rela, $txt_Tip_relacionado, $txt_telefono_rela, $txtcelular_rela,$txt_vinculo_rela,$codigo_con_his,$txt_cod_usuario);
                    $datos["mensaje"]="Registro Correctamente";
                }else{
                    $datos["mensaje"]="Error al registrar";
                }    
            }else {
                    $datos["mensaje"]="Error al registrar";
            }
            $this->load->view('layouts/header');
            $this->load->view('layouts/aside');	
            $this->load->view('campana/vista_registro',$datos); 
        }



        
    }

   protected function Registrar_relacionado($Nom_relacionado,$Dni_relacionado,$Sex_relacionado,$Eda_relacionado,$Tip_relacionado,$Tel_relacionado,$Cel_relacionado,$Vin_relacionado,$Cod_contri_historial,$Cod_usuario){
        $data = array(
            "Nom_relacionado" => $Nom_relacionado,
            "Dni_relacionado" => $Dni_relacionado,
            "Sex_relacionado" => $Sex_relacionado,
            "Eda_relacionado" => $Eda_relacionado,
            "Tip_relacionado" => $Tip_relacionado,
            "Tel_relacionado" => $Tel_relacionado,
            "Cel_relacionado" => $Cel_relacionado,
            "Vin_relacionado" => $Vin_relacionado,
            "Cod_contri_historial" => $Cod_contri_historial,
            "Cod_usuario" => $Cod_usuario,
        );

        $this->Model_campana->RegistrarRelacionado($data);
   }

}