<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contro_recaudacion extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        /* validacion de session creado */
        if(!$this->session->userdata('Login')){
            redirect(base_url());
        }
        $this->load->model('Model_campana');
    }
	public function index()
	{
        $this->load->view('layouts/header');
		$this->load->view('layouts/aside');	
		$this->load->view('campana/vista_recaudacion');
    }
    
    public function listar_recaudacion(){
        // valor a buscar
        $buscar = $this->input->post("buscar");
        $numeropagina = $this->input->post("numeropagina");
        $cantidad = 15;
        $inicio = ($numeropagina-1)*$cantidad;
        $data = array(
            "recaudacion"=>$this->Model_campana->Listar_Recaudacion($buscar,$inicio,$cantidad),
            "totalregistros" =>count($this->Model_campana->Listar_Recaudacion($buscar)),
            "cantidad" =>$cantidad
        );
		echo json_encode($data);
    }

    public function Desactivar_Estado(){
        $codigo = $this->input->post("codigo");
        $estado = 1;
        $data = array(
            'Est_recaudacion'=>$estado
        );
        if($this->Model_campana->DesactivarRecaudacion($codigo,$data)==true){
			$mensaje .="ok";
		}else{
			$mensaje .="mal";
		}
		echo $mensaje;
    }

    public function activar_Estado(){
        $codigo = $this->input->post("codigo");
        $estado = 0;
        $data = array(
            'Est_recaudacion'=>$estado
        );
        if($this->Model_campana->activarRecaudacion($codigo,$data)==true){
			$mensaje .="ok";
		}else{
			$mensaje .="mal";
		}
		echo $mensaje;
    }

    public function Insertar_recaudacion(){
		$txt_sector1 =$this->input->post("txt_sector1");
        $txt_total1 =$this->input->post("txt_total1");
        $txt_sector2 =$this->input->post("txt_sector2");
        $txt_total2 =$this->input->post("txt_total2");
        $txt_fecha =$this->input->post("txt_fecha");
        $txt_fecha_number =$this->input->post("txt_fecha_number");
        $txt_color = $this->input->post("txt_color");
        $txt_estado = '1';
		$mensaje = "";
		$data = array(
            'Cod_recaudacion'=>null,
			'Sc1_recaudacion' => $txt_total1,
            'Sc2_recaudacion' => $txt_total2,
            'fec_recaudacion' =>  $txt_fecha_number,
            'Est_recaudacion' => $txt_estado,
            'Pt1_recaudacion' => $txt_sector1,
            'Pt2_recaudacion' => $txt_sector2,
            'FE_LETRA' => $txt_fecha,
            'COLORSE' => $txt_color           
		);
		if($this->Model_campana->RegistrarRecaudacion($data)==true){
			$mensaje .="<span class='mensajeregistro' id='text_mesajeS'>Registro guardado </span>";
		}else{
			$mensaje .="<span class='mensajeregistro texto_mensaje' id='text_mesajes'>Error al registrar</span>";
		}
		echo $mensaje;
    }

    public function Mostrar_recaudacion(){
        $codigo = $this->input->post('codigo');
        $data = array(
            "recaudacion"=>$this->Model_campana->MostrarActualizar($codigo),
        );
		echo json_encode($data);
    }

    public function Actualizar_recaudacion(){
        $Cod_recaudacion = $this->input->post("Cod_recaudacion");
        $txt_total1 =$this->input->post("txt_total1");
        $txt_total2 =$this->input->post("txt_total2");
        $txt_fecha_number =$this->input->post("txt_fecha_number");
        $txt_estado = '1';
        $txt_sector1 =$this->input->post("txt_sector1");
        $txt_sector2 =$this->input->post("txt_sector2");
        $txt_fecha =$this->input->post("txt_fecha");
        $txt_color = $this->input->post("txt_color");
		$mensaje="";
		$data = array(
			'Sc1_recaudacion' => $txt_total1,
            'Sc2_recaudacion' => $txt_total2,
            'fec_recaudacion' =>  $txt_fecha_number,
            'Est_recaudacion' => $txt_estado,
            'Pt1_recaudacion' => $txt_sector1,
            'Pt2_recaudacion' => $txt_sector2,
            'FE_LETRA' => $txt_fecha,
            'COLORSE' => $txt_color              
		);
		if($this->Model_campana->ActualizarRecaudacion($Cod_recaudacion,$data)==true){
			$mensaje .="<span class='mensajeregistro texto_mensaje' id='text_mesajes'>Actualizo correctamente </span>";
		}else{
			$mensaje .="<span class='mensajeregistro texto_mensaje' id='text_mesajes'>Error Actualizar </span>";
		}
		echo $mensaje;
    }

    public function descargar_execel(){
        header("Pragma: public");  
		header("Expires: 0");  
		header("Cache-Control: must-revalidate, post-check=0, pre-check=0");  
		header("Content-Type: application/force-download");  
		header("Content-Type: application/octet-stream");  
		header("Content-Type: application/download");  
		header("Content-Disposition: attachment;filename=Reporte_Asistencia.xls ");  
        header("Content-Transfer-Encoding: binary ");  
        
		echo "<table border='1'>";
		echo "<tr style='background:RED;color:#fff;fon-awesome:bold;font-zise:18px'>";  
		echo "<th colspan='8' >REPORTE DE RECAUDACION</th>";
		echo "</tr>";
		echo "</table>"; 

		echo "<table border='1'>";  
		echo "<tr style='color:red'>";  
		echo "<th>CODIGO</th>";
		echo "<th>FECHA CAMPANA</th>";  
		echo "<th>CAMPANA 1</th>";  
		echo "<th>TOTAL</th>";
		echo "<th>CAMPANA 2</th>";
        echo "<th>TOTAL</th>";
        echo "<th>TOTAL RECAUDACION</th>";
        echo "<th>ESTADO</th>";    
        echo "</tr>";
        $export =$this->Model_campana->ListarReportRecaudacion();
		foreach ($export as $exp) {
			echo "<tr>";	
			echo "<td>".$exp->Cod_recaudacion."</td>";  
			echo "<td>".$exp->fec_recaudacion."</td>";  
			echo "<td>".$exp->Pt1_recaudacion."</td>";  
			echo "<td>".$exp->Sc1_recaudacion."</td>";
			echo "<td>".$exp->Pt2_recaudacion."</td>";  
            echo "<td>".$exp->Sc2_recaudacion."</td>";
            echo "<td>".$exp->Total."</td>";
            echo "<td>".$exp->Est_recaudacion."</td>";
			echo "</tr>";
		}
        echo "</table>"; 
		echo "<br>";
    }
    
}
