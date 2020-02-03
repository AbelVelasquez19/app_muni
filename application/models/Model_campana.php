<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_campana extends CI_Model {

        public function  Listar_Recaudacion($valor,$inicio=FALSE,$cantidadregistro=FALSE){            
            $this->db->select('Cod_recaudacion,FE_LETRA,Pt1_recaudacion,FORMAT(Sc1_recaudacion,2) as Sc1_recaudacion,Pt2_recaudacion,FORMAT(Sc2_recaudacion,2)as Sc2_recaudacion,FORMAT(SUM(Sc1_recaudacion + Sc2_recaudacion),2) as Total,Est_recaudacion');
            $this->db->from('tb_recaudacion');
            //$this->db->like('FE_LETRA',$valor);
            $this->db->where('FE_LETRA like "%'.$valor.'%" or Pt1_recaudacion like "%'.$valor.'%" or Pt2_recaudacion like "%'.$valor.'%"');

            $this->db->group_by('fec_recaudacion');
            $this->db->order_by('Est_recaudacion','DESC');

            if($inicio!==FALSE && $cantidadregistro!==FALSE){
                $this->db->limit($cantidadregistro,$inicio);
            }
            
            $query = $this->db->get();
            if($query->num_rows() > 0){
                return $query->result();                        
            }else{
                return false;
            }            
        }

        public function DesactivarRecaudacion($codigo,$data){
            $this->db->where("Cod_recaudacion",$codigo);
            $this->db->update("tb_recaudacion",$data);
            if ($this->db->affected_rows()>0) {
                return true;
            }else{
                return false;
            }
        }

        public function activarRecaudacion($codigo,$data){
            $this->db->where("Cod_recaudacion",$codigo);
            $this->db->update("tb_recaudacion",$data);
            if ($this->db->affected_rows()>0) {
                return true;
            }else{
                return false;
            }
        }

        public function RegistrarRecaudacion($data){
            $this->db->insert("tb_recaudacion",$data);
            if($this->db->affected_rows() > 0){
                return true;
            }else{
                return false;
            }

        }

        public function MostrarActualizar($codigo){
            $this->db->select('Cod_recaudacion,Sc1_recaudacion,Sc2_recaudacion,fec_recaudacion,Est_recaudacion,Pt1_recaudacion,Pt2_recaudacion,FE_LETRA,COLORSE');
            $this->db->from('tb_recaudacion');
            $this->db->where('Cod_recaudacion',$codigo);
            $query = $this->db->get();
            if($query->num_rows() > 0){
                return $query->result();                        
            }else{
                return false;
            } 
        }

        public function ActualizarRecaudacion($Cod_recaudacion,$data){
            $this->db->where('Cod_recaudacion',$Cod_recaudacion);
            $this->db->update('tb_recaudacion',$data);
            if($this->db->affected_rows()>0){
                return true;
            }else{
                return false;
            }
        }

        public function  ListarReportRecaudacion(){            
            $this->db->select('Cod_recaudacion,fec_recaudacion,Pt1_recaudacion,FORMAT(Sc1_recaudacion,2) as Sc1_recaudacion,Pt2_recaudacion,FORMAT(Sc2_recaudacion,2)as Sc2_recaudacion,FORMAT(SUM(Sc1_recaudacion + Sc2_recaudacion),2) as Total,Est_recaudacion');
            $this->db->from('tb_recaudacion');
            $this->db->group_by('fec_recaudacion');
            $this->db->order_by('Est_recaudacion', 'DESC');
            $query = $this->db->get();
            if($query->num_rows() > 0){
                return $query->result();                        
            }else{
                return false;
            }            
        }

        // BUSCAR REGISTROS DE CONTRIBUYENTE //     

        public function Buscarcodigo($codigo){
            $this->db->select('CODIGO,NOMBRE,NRODOCUM,SEXO,TELEFONO,CELULAR,CORREO,DOMICILIO_FISCAL');
            $this->db->from('tb_contribuyentes');
            $this->db->where('CODIGO',$codigo);
            $query = $this->db->get();
            if($query->num_rows() > 0){
                return $query->result();
            }else{
                return false;
            }
        }

        public function Buscardni($dni){
            $this->db->select('CODIGO,NOMBRE,NRODOCUM,SEXO,TELEFONO,CELULAR,CORREO,DOMICILIO_FISCAL');
            $this->db->from('tb_contribuyentes');
            $this->db->where('NRODOCUM',$dni);
            $query= $this->db->get();
            if($query->num_rows() > 0){
                return $query->result();
            }else{
                return false;
            }
        }

        public function BuscarNombre($nombre){                                                                                                                                                          
            $this->db->select('CODIGO,NOMBRE,NRODOCUM,SEXO,TELEFONO,CELULAR,CORREO,DOMICILIO_FISCAL');
            $this->db->from('tb_contribuyentes');
            $this->db->where('NOMBRE like "%'.$nombre.'%"');
            $query= $this->db->get();
            if($query->num_rows() > 0){
                return $query->result();
            }else{
                return false;
            }
        }

        public function RegistrarContriHistoria2020($data){
            $this->db->insert("tb_contri_historial2020",$data);
            if($this->db->affected_rows() > 0){
                return true;
            }else{
                return false;
            }
        }

        public function CodigoUltRegistro(){
            return $this->db->insert_id();
        }

        public function RegistrarRelacionado($data){
            $this->db->insert("tb_relacionado2020",$data);
        }

        /*  CODIGO PARA SERVICOS */
        public function Buscarcodigo_servicios($codigo){
            $this->db->select('c.Cod_contri_historial,c.Nom_contri_historial,c.Sig_contri_historial,r.Cod_relacionado');
            $this->db->from('tb_relacionado2020 r');
            $this->db->join('tb_contri_historial2020 c','r.Cod_contri_historial=c.Cod_contri_historial');
            $this->db->where('c.Sig_contri_historial',$codigo);
            $query = $this->db->get();
            if($query->num_rows() > 0){
                return $query->result();
            }else{
                return false;
            }
        }

        public function Buscardni_servicios($dni){
            $this->db->select('c.Cod_contri_historial,c.Nom_contri_historial,c.Sig_contri_historial,r.Cod_relacionado');
            $this->db->from('tb_relacionado2020 r');
            $this->db->join('tb_contri_historial2020 c','r.Cod_contri_historial=c.Cod_contri_historial');
            $this->db->where('c.Dni_contri_historial',$dni);
            $query = $this->db->get();
            if($query->num_rows() > 0){
                return $query->result();
            }else{
                return false;
            }
        }

        public function ObtenerTipoTratamiento(){
            $this->db->select('Cod_tratamiento,Nom_tratamiento');
            $this->db->from('tb_tratamiento');
            $query = $this->db->get();
            if($query->num_rows() > 0){
                return $query->result();
            }else{
                return false;
            }
        }
        
        public function RegistrarAtencion($data){
            $this->db->insert("tb_atencion2020",$data);
            if($this->db->affected_rows() > 0){
                return true;
            }else{
                return false;
            }
        }

        public function CodigoUltAtencion(){
            return $this->db->insert_id();
        }

        public function RegistrarMascota($data){
            $this->db->insert("tb_mascota2020",$data);
            if($this->db->affected_rows() > 0){
                return true;
            }else{
                return false;
            }
        }

        public function RegistrarCaritasPintadas($data){
            $this->db->insert("tb_carita_pintada2020",$data);
            if($this->db->affected_rows() > 0){
                return true;
            }else{
                return false;
            }
        }

        public function RegistrarCorteCabello($data){
            $this->db->insert("tb_corte_cabello2020",$data);
            if($this->db->affected_rows() > 0){
                return true;
            }else{
                return false;
            }
        }
        
        public function RegistrarManicure($data){
            $this->db->insert("tb_manicure2020",$data);
            if($this->db->affected_rows() > 0){
                return true;
            }else{
                return false;
            }
        }
    
}        