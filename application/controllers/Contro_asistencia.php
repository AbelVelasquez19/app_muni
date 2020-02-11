<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contro_asistencia extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_asistencia');
	}

	public function index()
	{	
		//$data = array('datos'=>$this->Model_asistencia->Listar_Asistencia(),'falta'=>$this->Model_asistencia->Listar_Faltas());
        $this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('asistencia/vista_asistencia');
		
	}
	
	public function listar_asistencia(){
		$resultado=$this->Model_asistencia->Listar_Asistencia();		
		echo json_encode($resultado);
	}
	public function Listar_Tardanza(){
		$resultado=$this->Model_asistencia->Listar_Tardanza();		
		echo json_encode($resultado);
	}
	public function listar_faltas(){
		$resultado=$this->Model_asistencia->Listar_Faltas();		
		echo json_encode($resultado);
	}

	public function reporte(){
		$id=1;		  
		$id1=1;	
		header("Pragma: public");  
		header("Expires: 0");  
		header("Cache-Control: must-revalidate, post-check=0, pre-check=0");  
		header("Content-Type: application/force-download");  
		header("Content-Type: application/octet-stream");  
		header("Content-Type: application/download");  
		header("Content-Disposition: attachment;filename=Reporte_Asistencia.xls ");  
		header("Content-Transfer-Encoding: binary ");  
		
		
		//Creamos la tabla dinamica, asignando la  
		//Propiedad Border 1, para tener un borde en excel.  
		echo "<table border='1'>";
		echo "<tr style='background:red;color:#fff;fon-awesome:bold;font-zise:16px'>";  
		echo "<th colspan='6'>REPORTE DE ASISTENCIA</th>";
		echo "</tr>";
		echo "</table>"; 
		echo "<br>";

		echo "<table border='1'>";
		echo "<tr style='background:green;color:#fff;fon-awesome:bold;font-zise:16px'>";  
		echo "<th colspan='6' >ASISTENCIA</th>";
		echo "</tr>";
		echo "</table>"; 

		echo "<table border='1'>";  
		echo "<tr style='color:red'>";  
		echo "<th>ID</th>";
		echo "<th>DNI</th>";  
		echo "<th>NOMBRES</th>";  
		echo "<th>FECHA</th>";
		echo "<th>HORA INGRESO</th>";
		echo "<th>HORA SALIDA</th>";  
		echo "</tr>";  
		  
		$export =$this->Model_asistencia->Listar_Asistencia();
		foreach ($export as $exp) {
			echo "<tr>";	
			echo "<td>".$id++."</td>";  
			echo "<td>".$exp->Dni_personal."</td>";  
			echo "<td>".$exp->Nom_personal."</td>";  
			echo "<td>".$exp->Fec_asistencia."</td>";
			echo "<td>".$exp->HoE_asistencia."</td>";  
			echo "<td>".$exp->HoS_asistencia."</td>";
			echo "</tr>";
		}   
		echo "</table>"; 
		echo "<br>";
		
		//table de tarzandaz //
		echo "<table border='1'>";
		echo "<tr style='background:red;color:#fff;fon-awesome:bold;font-zise:16px'>";  
		echo "<th colspan='6'>REPORTE DE TARDANZA</th>";
		echo "</tr>";
		echo "</table>"; 
		echo "<br>";

		echo "<table border='1'>";
		echo "<tr style='background:green;color:#fff;fon-awesome:bold;font-zise:16px'>";  
		echo "<th colspan='6' >TARDANZA</th>";
		echo "</tr>";
		echo "</table>"; 

		echo "<table border='1'>";  
		echo "<tr style='color:red'>";  
		echo "<th>ID</th>";
		echo "<th>DNI</th>";  
		echo "<th>NOMBRES</th>";  
		echo "<th>FECHA</th>";
		echo "<th>HORA INGRESO</th>";
		echo "<th>HORA SALIDA</th>";  
		echo "</tr>";  
		  
		$export1 =$this->Model_asistencia->Listar_Tardanza();
		foreach ($export1 as $exp) {
			echo "<tr>";	
			echo "<td>".$id++."</td>";  
			echo "<td>".$exp->Dni_personal."</td>";  
			echo "<td>".$exp->Nom_personal."</td>";  
			echo "<td>".$exp->Fec_asistencia."</td>";
			echo "<td>".$exp->HoE_asistencia."</td>";  
			echo "<td>".$exp->HoS_asistencia."</td>";
			echo "</tr>";
		}   
		echo "</table>"; 
		echo "<br>";




		echo "<table border='1'>";
		echo "<tr style='background:#ffff00;color:	red;fon-awesome:bold;font-zise:16px'>";  
		echo "<th colspan='3' >FALTAS</th>";
		echo "</tr>";
		echo "</table>"; 

		echo "<table border='1' style='right:50px'>";
		echo "<tr>";  
		echo "<th>ID</th>";
		echo "<th>DNI</th>";
		echo "<th>NOMBRES</th>";
		echo "</tr>";
		$export1 = $this->Model_asistencia->Listar_Faltas();
		foreach ($export1 as $exp1) {
			echo "<tr>";	
			echo "<td>".$id1++."</td>";  
			echo "<td>".$exp1["Dni_personal"]."</td>";  
			echo "<td>".$exp1["Nom_personal"]."</td>";  
			echo "</tr>";
		} 
		echo "</table>";

	}

	public function Buscar_personal(){
		//$num_personal='62126949';
		$num_personal = $this->input->post("txt_numero_personal");
		echo json_encode($this->Model_asistencia->Buscar_personal($num_personal));
	}

	public function Insertar_asistencia(){
		$codigo_personal=$this->input->post("txt_Cod_personal");
		$fecha_entrada=$this->input->post("fecha_entrada");
		$hora_entrada =$this->input->post("hora_entrada");
		$mensaje = "";
		$data = array(
			'Cod_personal' => $codigo_personal,
			'Fec_asistencia' => $fecha_entrada,
			'HoE_asistencia' => $hora_entrada
		);
		if($this->Model_asistencia->RegistrarEntrada($data)==true){
			$mensaje .="<span class='mensajeregistro texto_mensaje' id='text_mesaje'>BIENVENIDO </span>";
		}else{
			$mensaje .="<span class='mensajeregistro texto_mensaje' id='text_mesaje'>COMUNICAR CON EL SOPORTE</span>";
		}
		echo $mensaje;
	}

	public function Actualizar_asistencia(){
		$codigo_personal=$this->input->post("txt_Cod_personal");
		$fecha_entrada=$this->input->post("fecha_entrada");
		$hora_salida =$this->input->post("hora_entrada");
		$mensaje="";
		//$codigo_personal=1;
		//$fecha_entrada='2019-12-11';
		//$hora_salida ='06:12:21';
		$data = array(
			'HoS_asistencia' => $hora_salida
		);
		if($this->Model_asistencia->ActualizarSalida($codigo_personal,$fecha_entrada,$data)==true){
			$mensaje .="<span class='mensajeregistro texto_mensaje' id='text_mesaje'>HASTA LUEGO </span>";
		}else{
			$mensaje .="<span class='mensajeregistro texto_mensaje' id='text_mesaje'>COMUNICAR CON EL SOPORTE </span>";
		}
		echo $mensaje;
	}
}