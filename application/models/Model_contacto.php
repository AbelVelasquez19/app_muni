<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_contacto extends CI_Model {

    public function Buscarcodigo($codigo){
        $this->db->select('p.CODIGO,p.NOMBRE,p.DOMICILIO_FISCAL');
        $this->db->from('tb_contribuyentes p');
        $this->db->where('p.CODIGO',$codigo);
        $query = $this->db->get();
        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return false;
        }
    }

    public function BuscarDni($dni){
        $this->db->select('p.CODIGO,p.NOMBRE,p.DOMICILIO_FISCAL');
        $this->db->from('tb_contribuyentes p');
        $this->db->where('p.NRODOCUM',$dni);
        $query = $this->db->get();
        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return false;
        }
    }

    public function Buscarcontacto($codigo){
        $this->db->select('c.ID,c.TELEFONO,c.CELULAR,c.CORREO');
        $this->db->from('tb_contacto_6 c');
        $this->db->where('c.CODIGO',$codigo);
        $query = $this->db->get();
        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return false;
        }
    }

    public function RegistrarContacto($data){
        $this->db->insert("tb_contacto_6",$data);
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }

    }

    public function MostrarContactoActualizar($codigo){
        $this->db->select('ID,CODIGO,TELEFONO,CELULAR,CORREO,REPRESENTANTE');
        $this->db->from('tb_contacto_6');
        $this->db->where('ID',$codigo);
        $query = $this->db->get();
        if($query->num_rows() > 0){
            return $query->result();                        
        }else{
            return false;
        } 
    }

    public function ActualizarContacto($Cod_recaudacion,$data){
        $this->db->where('ID',$Cod_recaudacion);
        $this->db->update('tb_contacto_6',$data);
        if($this->db->affected_rows()>0){
            return true;
        }else{
            return false;
        }
    }

    public function EstadoCuentas($codigo){
        $this->db->select('FACODCONTR,PRE_AANT,ARB_AANT,DEU_AANT,PRE_2020,ARB_2020,DEU_2020,PRED_TOT,ARB_TOT,DEU_TOTAL_SDscto,DEU_AANT_CDscto,DEU_2020_CDscto,DEU_TOTAL_CDscto');
        $this->db->from('Beneficio_feb');
        $this->db->where('FACODCONTR',$codigo);
        $query = $this->db->get();
        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return false;
        }
    }

    public function ElimnarContacto($codigo){
        $this->db->where('ID',$codigo);
        $this->db->delete('tb_contacto_6');
        if($this->db->affected_rows()>0){
            return true;
        }else{
            return false;
        }
    }
} 
 