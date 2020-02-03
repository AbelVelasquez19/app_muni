<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contro_login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model("Model_login");
    }

	public function index()
	{	
        // validando session creado 
        if($this->session->userdata('Login')){
            redirect(base_url()."Contro_inicio");
        }else{
            $this->load->view('admin/vista_login');
        }	
			
    }
    
    public function login(){
        $username = $this->input->post("txtusuario");
        $password = $this->input->post("txtpassword");

        $res=$this->Model_login->login($username,$password);

        if(!$res){
            $this->session->set_flashdata("Error","El usuario y/o contraseña incorecta");
            redirect(base_url());
        }else{
            $data = array(
                'Cod_usuario'=>$res->Cod_usuario,
                'Nom_usuario'=>ucwords(strtolower($res->Nom_usuario).' '.strtolower($res->Ape_usuario)),
                'Cod_Rol'=>$res->Cod_perfil,
                'Rol'=>$res->Niv_perfil,
                'Login'=>TRUE
            );
            $this->session->set_userdata($data);
            redirect(base_url()."Contro_inicio");
        }
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect(base_url());
    }
	
}
