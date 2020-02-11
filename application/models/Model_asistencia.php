<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_asistencia extends CI_Model {

        public function  Listar_Asistencia(){            
            $this->db->select('a.Cod_asistencia,p.Dni_personal,p.Nom_personal,p.Ape_personal,a.Fec_asistencia,a.HoE_asistencia,a.HoS_asistencia ,p.Fot_personal');
            $this->db->from('tb_asistencia a');
            $this->db->join('tb_personal p','a.Cod_personal=p.Cod_personal');
            $this->db->where('a.Fec_asistencia=CURDATE()');
            $this->db->where("a.HoE_asistencia <= '08:00:00'");
            $this->db->order_by('a.HoE_asistencia', 'ASC');
            $query = $this->db->get();
            if($query->num_rows() > 0){
                return $query->result();                        
            }else{
                return false;
            }            
        }

        public function  Listar_Tardanza(){            
            $this->db->select('a.Cod_asistencia,p.Dni_personal,p.Nom_personal,p.Ape_personal,a.Fec_asistencia,a.HoE_asistencia,a.HoS_asistencia ,p.Fot_personal');
            $this->db->from('tb_asistencia a');
            $this->db->join('tb_personal p','a.Cod_personal=p.Cod_personal');
            $this->db->where('a.Fec_asistencia=CURDATE()');
            $this->db->where("a.HoE_asistencia >= '08:00:00'");
            $this->db->where("a.HoE_asistencia <= '09:00:00'");
            $this->db->order_by('a.HoE_asistencia', 'ASC');
            $query = $this->db->get();
            if($query->num_rows() > 0){
                return $query->result();                        
            }else{
                return false;
            }            
        }

         public function Listar_Faltas(){ 
            $sql="select Fot_personal,Dni_personal,Nom_personal from tb_personal where Est_personal=0 and  Cod_personal NOT IN  (SELECT a.Cod_personal FROM tb_asistencia a where a.Fec_asistencia = CURDATE());";
            $query=$this->db->query($sql)->result_array();
            return $query;
//          return $this->db->query($sql)->result_array();
        }
        
        /*public function Listar_Faltas(){
            $this->db->select('p.Fot_personal,p.Dni_personal,p.Nom_personal');
            $this->db->from('tb_personal p');
            $this->db->join('Tem_Puntuales t','p.Dni_personal = t.Dni_personal','left');
            $this->db->where('t.Fec_asistencia IS NULL');
            $this->db->where('p.Est_personal','0');
            $query = $this->db->get();
            if($query->num_rows() > 0 ){
                return $query->result();
            }else{
                return false;
            }         
        }*/

        public function Buscar_personal($num_persona){
            $this->db->select('Cod_personal,Nub_personal,CONCAT(substring_index(TRIM(Nom_personal)," ",1)," ",substring_index(TRIM(Ape_personal)," ",2)) AS NOMBRE,Fot_personal');
            $this->db->from('tb_personal');
            $this->db->where('Nub_personal',$num_persona);
            $query = $this->db->get();
            if($query->num_rows() > 0 ){
                return $query->result();
            }else{
                return false;
            }
        }

        public function RegistrarEntrada($data){
            $this->db->insert("tb_asistencia",$data);
            if($this->db->affected_rows() > 0){
                return true;
            }else{
                return false;
            }

        }

        public function ActualizarSalida($cod_personal,$fecha_salida,$data){
            $this->db->where('Cod_personal',$cod_personal);
            $this->db->where('Fec_asistencia',$fecha_salida);
            $this->db->update('tb_asistencia',$data);
            if($this->db->affected_rows()>0){
                return true;
            }else{
                return false;
            }
        }
}