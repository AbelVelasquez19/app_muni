<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contro_contacto extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_contacto');
	}

	public function index()
	{	
		//$data = array('datos'=>$this->Model_asistencia->Listar_Asistencia(),'falta'=>$this->Model_asistencia->Listar_Faltas());
        $this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('gestion/contacto');
		
	}

	public function BuscarCodigo(){
        $codigo = str_pad($this->input->post('txtcodigo'),7,"0",STR_PAD_LEFT);
        $data = array(
            "BuscarCodigo"=>$this->Model_contacto->Buscarcodigo($codigo),
        );
		echo json_encode($data);
	}

	public function Buscarcontacto(){
    	$codigo = str_pad($this->input->post('txtcodigo'),7,"0",STR_PAD_LEFT);
        $data = array(
            "BuscarContacto"=>$this->Model_contacto->Buscarcontacto($codigo),
        );
		echo json_encode($data);
	}
	
	public function BuscarcontactoDni(){
    	$dni = $this->input->post('txtdni');
        $data = array(
            "Buscardni"=>$this->Model_contacto->Buscarcontactodni($codigo),
        );
		echo json_encode($data);
	}
	
	public function Registrarcontacto(){
		$codigo =$this->input->post("CODIGO");
        $telefono =$this->input->post("TELEFONO");
        $celular =$this->input->post("CELULAR");
        $correo =$this->input->post("CORREO");
		$representante =$this->input->post("REPRESENTANTE");
		$mensaje = "";
		$data = array(
            'CODIGO'=>$codigo,
			'TELEFONO' => $telefono,
            'CELULAR' => $celular,
            'CORREO' =>  $correo,
            'REPRESENTANTE' => $representante
		);
		if($this->Model_contacto->RegistrarContacto($data)==true){
			$mensaje .="<span class='mensajeregistro' id='text_mesajeS'>Registro guardado </span>";
		}else{
			$mensaje .="<span class='mensajeregistro texto_mensaje' id='text_mesajes'>Error al registrar</span>";
		}
		echo $mensaje;
	}
	
	public function Mostrar_Contacto(){
        $codigo = $this->input->post('codigo');
        $data = array(
            "contacto"=>$this->Model_contacto->MostrarContactoActualizar($codigo),
        );
		echo json_encode($data);
	}
	
	public function ActualizarContacto(){
        $ID = $this->input->post("ID");
        $TELEFONO =$this->input->post("TELEFONO");
        $CELULAR =$this->input->post("CELULAR");
		$CORREO =$this->input->post("CORREO");
		$REPRESENTANTE =$this->input->post("REPRESENTANTE");
		
		$mensaje="";
		$data = array(
			'TELEFONO' => $TELEFONO,
            'CELULAR' => $CELULAR,
            'CORREO' =>  $CORREO,
            'REPRESENTANTE' => $REPRESENTANTE
		);
		if($this->Model_contacto->ActualizarContacto($ID,$data)==true){
			$mensaje .="<span class='mensajeregistro texto_mensaje' id='text_mesajes'>Actualizo correctamente </span>";
		}else{
			$mensaje .="<span class='mensajeregistro texto_mensaje' id='text_mesajes'>Error Actualizar </span>";
		}
		echo $mensaje;
    }

}    





