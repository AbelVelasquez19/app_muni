<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_reporte extends CI_Model {

        //reporte sumado los dos puntos del campaña de Gat
        public function  Rrp_Total(){
            $this->db->select("REPLACE(FE_LETRA,' 2019','') AS FE_LETRA, ROUND(SUM(Sc1_recaudacion) + SUM(Sc2_recaudacion),2)AS Total");
            $this->db->from('tb_recaudacion');
            $this->db->where('YEAR(fec_recaudacion)','2019');
            $this->db->group_by('fec_recaudacion');
            $query = $this->db->get();
            if($query->num_rows() > 0){
                return $query->result();                        
            }else{
                return false;
            }
        }

        //reporte por fecha y zona del campaña Gat
        public function  Rrp_FECHA(){
            $this->db->select("REPLACE(FE_LETRA,' 2019','') AS FE_LETRA,Pt1_recaudacion,Pt2_recaudacion,COLORSE,Sc1_recaudacion,Sc2_recaudacion");
            $this->db->from('tb_recaudacion');
            $this->db->where('YEAR(fec_recaudacion)','2019');
            $this->db->group_by('fec_recaudacion');
            $query = $this->db->get();
            if($query->num_rows() > 0){
                return $query->result();                        
            }else{
                return false;
            }
        }

        //reporte generando el total recaudado de la campaña Gat
        public function Total_Recaudado(){
            $this->db->select("FORMAT(SUM(Sc1_recaudacion) + SUM(Sc2_recaudacion),2) as Total_recaudado");
            $this->db->from('tb_recaudacion');
            $this->db->where('YEAR(fec_recaudacion)','2019');
            $query=$this->db->get();
            if($query->num_rows() > 0){
                return $query->result();                        
            }else{
                return false;
            }
        }
        
        // reporte de recaudacion por dos puntos
        public function Reporte_recaudacion(){
            $this->db->select("Pt1_recaudacion,Sc1_recaudacion,Pt2_recaudacion,Sc2_recaudacion,ROUND(SUM(Sc1_recaudacion)+SUM(Sc2_recaudacion),2)AS TOTAL");
            $this->db->from("tb_recaudacion");
            $this->db->where("fec_recaudacion ='2020-02-08'");
            $this->db->where("Est_recaudacion = 1 ");
            $this->db->group_by("fec_recaudacion");
            $query = $this->db->get();
            if($query->num_rows()>0){
                return $query->result();
            }else{
                return false;
            }
        }


        // reporte de 2020 //
         //reporte sumado los dos puntos del campaña de Gat
         public function  Rrp_Total2020(){
            $this->db->select("REPLACE(FE_LETRA,' 2020','') AS FE_LETRA, ROUND(SUM(Sc1_recaudacion) + SUM(Sc2_recaudacion),2)AS Total");
            $this->db->from('tb_recaudacion');
            $this->db->where('YEAR(fec_recaudacion)','2020');
            $this->db->group_by('fec_recaudacion');
            $query = $this->db->get();
            if($query->num_rows() > 0){
                return $query->result();                        
            }else{
                return false;
            }
        }
         //reporte por fecha y zona del campaña Gat
         public function  Rrp_FECHA2020(){
            $this->db->select("REPLACE(FE_LETRA,' 2020','') AS FE_LETRA,Pt1_recaudacion,Pt2_recaudacion,COLORSE,Sc1_recaudacion,Sc2_recaudacion");
            $this->db->from('tb_recaudacion');
            $this->db->where('YEAR(fec_recaudacion)','2020');
            $this->db->group_by('fec_recaudacion');
            $query = $this->db->get();
            if($query->num_rows() > 0){
                return $query->result();                        
            }else{
                return false;
            }
        }
        //reporte generando el total recaudado de la campaña Gat
        public function Total_RecaudadoCam(){
            $this->db->select("FORMAT(SUM(Sc1_recaudacion) + SUM(Sc2_recaudacion),2) as Total_recaudado");
            $this->db->from('tb_recaudacion');
            $this->db->where('YEAR(fec_recaudacion)','2020');
            $query=$this->db->get();
            if($query->num_rows() > 0){
                return $query->result();                        
            }else{
                return false;
            }
        }
	
}
