<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_login extends CI_Model {
        
         /*$this->db->where("Usu_usuario",$usuario);
         $this->db->where("Con_usuario",$password);
         $resultado = $this->db->get("tb_usuario");*/

        public function  login($usuario,$password){
            
            $this->load->database();
            $this->db->trans_start();
            $resultado = $this->db->query("call sp_ingresar_sistema('$usuario','$password');");
            //$out_param_query = $this->db->query('select @out_param as out_param;');
            $this->db->trans_complete();
            //$out_param_row = $this->db->row();
            //$out_param_val = $this->out_param;
            if($resultado->num_rows() > 0){
                return $resultado->row();
            }else{
                return false;
            }
        }
	
}
