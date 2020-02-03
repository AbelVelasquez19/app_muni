<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="description" content="Sistema Administrativo del Distrital de Puente Piedra - Modulo de Campaña">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="municipalidad de puente piedra">
    <meta property="twitter:site" content="@municipalidadpuntepiedra">
    <meta property="twitter:creator" content="@municipalidadpuntepiedra">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Municipalidad de puente piedra">
    <meta property="og:title" content="Municipalidad de puente piedra">
    <meta property="og:url" content="http://www.munipuentepiedra.gob.pe/pets/web/">
    <meta property="og:image" content="http://www.munipuentepiedra.gob.pe/pets/web/">
    <meta property="og:description" content="municipalidad de puente piedra modulo de campaña">
    <title>Municipalidad de Puente Piedra</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/template/css/main1.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/template/font-awesome-4.7.0/css/font-awesome.min.css">
    <!-- css para asistencia-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/template/css/asistencia.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/template/css/my_main.css">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700&display=swap" rel="stylesheet">
    <!-- font para reloj-->
    <link href="https://fonts.googleapis.com/css?family=Black+Ops+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Saira+Stencil+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rakkas&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Archivo+Narrow&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/template/js/sweetalert2/dist/sweetalert2.min.css">
</head>
<?php
    $url= base_url();
    echo '<p id="url" style="display:none">'.$url.'</p>';
?>
<!-- se incluyo body y header en archivo views/admin/layouts/header.php-->
<!-- Sidebar menu-->
<!-- aside en archivo views/admin/layouts/header.php-->
<main class="app-content">
    <div class="row">
        <div class="col-md-12">
            <div class="tile" style="padding: 0px;border-radius: 5px;">
                <div class="titulo">
                    <p>ATENCIÒN DE SERVICIOS</p>
                </div>
            </div>
        </div> 
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile" style="padding: 0px;border-radius: 5px;">
                <div class="row row_servicios" style="width:100%">
                    <!-- mascota -->
                    <div class="col-sm-12 col-md-12 col-lg-1 col-xl-1 column_servicios">
                        <div class="servicios">
                            <label class="mause_pointer" for="txt_Check_Tipo_Mascota">
                                <input type="checkbox" class="form-check-input" id="txt_Check_Tipo_Mascota" name="txt_Tip_atencion" value="MASCOTA" style="display:none"> 
                                <img src="<?php echo base_url(); ?>asset/template/img/servicios/mascota.png" style="height:80%;width:70%;border-radius: 50%">
                                <p>Mascota</p>  
                            </label>
                        </div>
                    </div>
                    <!-- juridica-->
                    <div class="col-sm-12 col-md-12 col-lg-1 col-xl-1 column_servicios">
                        <div class="servicios">
                            <label class="mause_pointer" for="txt_Check_Tipo_Juridica">
                                <input type="checkbox" class="form-check-input" id="txt_Check_Tipo_Juridica" name="txt_Tip_atencion" value="JURIDICA" style="display:none"> 
                                <img src="<?php echo base_url(); ?>asset/template/img/servicios/consulta_legal-1.png" style="height:80%;width:70%;border-radius: 50%">
                                <p>Jurìdica</p>  
                            </label>
                        </div>
                    </div>
                    <!-- fisioterpia-->
                    <div class="col-sm-12 col-md-12 col-lg-1 col-xl-1 column_servicios">
                        <div class="servicios">
                            <label class="mause_pointer" for="txt_Check_Tipo_Fisioterapia">
                                <input type="checkbox" class="form-check-input" id="txt_Check_Tipo_Fisioterapia" name="txt_Tip_atencion" value="FISIOTERAPIA" style="display:none"> 
                                <img src="<?php echo base_url(); ?>asset/template/img/servicios/icono-fisio-neurologica.png" style="height:80%;width:70%;border-radius: 50%">
                                <p>Fisioterapia</p>  
                            </label>
                        </div>
                    </div>
                    <!-- odontologia-->
                    <div class="col-sm-12 col-md-12 col-lg-1 col-xl-1 column_servicios">
                        <div class="servicios">
                            <label class="mause_pointer" for="txt_Check_Tipo_Odontologia">
                                <input type="checkbox" class="form-check-input" id="txt_Check_Tipo_Odontologia" name="txt_Tip_atencion" value="ODONTOLOGIA" style="display:none"> 
                                <img src="<?php echo base_url(); ?>asset/template/img/servicios/icono-odontologia.png" style="height:80%;width:70%;border-radius: 50%">
                                <p>Odontologìa</p>  
                            </label>
                        </div>
                    </div>
                    <!-- caritas pintadas-->
                    <div class="col-sm-12 col-md-12 col-lg-1 col-xl-1 column_servicios">
                        <div class="servicios">
                            <label class="mause_pointer" for="txt_Check_Tipo_Carpintadas">
                                <input type="checkbox" class="form-check-input" id="txt_Check_Tipo_Carpintadas" name="txt_Tip_atencion" value="CARITAS PINTADAS" style="display:none"> 
                                <img src="<?php echo base_url(); ?>asset/template/img/servicios/caritapintada.jpg" style="height:80%;width:70%;border-radius: 50%">
                                <p>Caritas pintadas</p>  
                            </label>
                        </div>
                    </div>
                    <!-- corte -->
                    <div class="col-sm-12 col-md-12 col-lg-1 col-xl-1 column_servicios">
                        <div class="servicios">
                            <label class="mause_pointer" for="txt_Check_Tipo_Corpelo">
                                <input type="checkbox" class="form-check-input" id="txt_Check_Tipo_Corpelo" name="txt_Tip_atencion" value="CORTE DE PELO" style="display:none"> 
                                <img src="<?php echo base_url(); ?>asset/template/img/servicios/corteicon.png" style="height:80%;width:70%;border-radius: 50%">
                                <p>Corte de pelo</p>  
                            </label>
                        </div>
                    </div>
                    <!-- manicure-->
                    <div class="col-sm-12 col-md-12 col-lg-1 col-xl-1 column_servicios">
                        <div class="servicios">
                            <label class="mause_pointer" for="txt_Check_Tipo_Manicure">
                                <input type="checkbox" class="form-check-input" id="txt_Check_Tipo_Manicure" name="txt_Tip_atencion" value="MANICURE" style="display:none"> 
                                <img src="<?php echo base_url(); ?>asset/template/img/servicios/manicure.png" style="height:80%;width:70%;border-radius: 50%">
                                <p>manicure </p>  
                            </label>
                        </div>
                    </div>
                    <?php if(!$this->session->userdata('Login')){
                        }else{
                            echo '<input type="hidden" class="form-control1" id="txt_cod_usuario" name="txt_cod_usuario" value="'.$this->session->userdata("Cod_usuario").'">';
                        }
                    ?>
                </div>
            </div>
        </div> 
    </div>
    <!-- formulario para mascota -->
    <div class="row" style="margin-top:-21px;" id="FormMascota">
        <div class="col-md-6">
            <div class="tile" style="padding: 0px;border-radius: 5px;">
                <div class="titulo_mascota">
                    <span>REGISTRAR DATOS DEL MASCOTA</span>
                </div>
                <div class="contenido_mascota">
                    <input type="text" placeholder="Buscar por codigo" id="txt_buscar_codigo" class="txt_buscar_codigo_mas">
                    <input type="text" placeholder="Buscar por DNI" id="txt_buscar_dni" class="txt_buscar_dni_mas">
                    <input type="text" placeholder="Nombre del contribuyente" id="txt_nombre_cont" class="txt_buscar_nombre_mas">
                    <input type="hidden"  id="txt_codigo_relacionado">    
                    <hr>
                    <div class="formulario_mascota">
                        <form>
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                    <span for="">NOMBRE DEL MASCOTA:</span>
                                    <input type="text" name="txtnombremascota" id="txtnombremascota" class="form-control1" placeholder="Nombre">
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-2 col-xl-2">
                                    <span for="">EDAD</span>
                                    <input type="text" name="ttxedadmascota" id="ttxedadmascota" class="form-control1" placeholder="Edad">
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
                                    <span for="">RAZA DEL MASCOTA:</span>
                                    <input type="text" name="txtrazamascota" id="txtrazamascota" class="form-control1" placeholder="Raza">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                    <span for="">SELECCIONAR:</span>
                                    <select name="txttipomascota" id="txttipomascota" class="form-control1">
                                        <option value="CANINO">CANINO</option>
                                        <option value="FELINO">FELINO</option>
                                        <option value="OTROS">OTROS</option>
                                    </select>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                    <span for="">SELECCIONAR:</span>
                                    <select name="txttipotratamiento" id="txttipotratamiento" class="form-control1">
                                        <!-- imprimiento tipo de tratamiento -->
                                    </select>
                                </div>  
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                    <textarea name="txt_observacion" id="txt_observacion" class="txt_observacion_mascota"  rows="4" placeholder="OBSERVACION" ></textarea>
                                </div>  
                                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                    <img src="<?php echo base_url(); ?>asset/template/img/servic/mascota.jfif" alt="" class="imgan_mascota">
                                </div>
                            </div>
                        </form>
                        
                    </div>
                    <hr>
                    <div class="controladores">
                        <!-- <input type="submit" class="btn btn-primary" value="GUARDAR">-->
                        <button class="btn btn-primary" id="btnguardar">GUARDAR</button>
                        <button class="btn btn-danger" id="cancelar">CANCELAR</button>
                    </div>
                    <p id="mensaje" style="background:#00afbd; color:#fff; padding:1px; font-size:14px;margin-top:5px;border-radius:5px;text-align:center"></p>
                </div>
            </div>
        </div> 
    </div>
    <!-- formulario para juridica-->
    <div class="row" style="margin-top:-21px;" id="FormJuridica">
        <div class="col-md-6">
            <div class="tile" style="padding: 0px;border-radius: 5px;">
                <div class="titulo_mascota">
                    <span>REGISTRAR JURÍDICA</span>
                </div>
                <div class="contenido_mascota">
                    <input type="text" placeholder="Buscar por codigo" id="txt_buscar_codigo_juri" class="txt_buscar_codigo_mas">
                    <input type="text" placeholder="Buscar por DNI" id="txt_buscar_dni_juri" class="txt_buscar_dni_mas">
                    <input type="text" placeholder="Nombre del contribuyente" id="txt_nombre_cont_juri" class="txt_buscar_nombre_mas">

                    <input type="hidden"  id="txt_codigo_contr2020_juri">
                    <hr>
                    <div class="formulario_mascota">
                        <form>
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                    <span for="">SELECCIONAR TIPO ATENCION:</span>
                                    <select name="" id="" class="form-control1">
                                        <option value="">PENSIONISTA</option>
                                        <option value="">PRESCRIPCIÓN</option>
                                        <option value="">CIVILES</option>
                                        <option value="">OTROS</option>
                                    </select>
                                </div> 
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                    <textarea name="" id="" class="txt_observacion_mascota"  rows="4" placeholder="OBSERVACION"></textarea>
                                </div>  
                                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                    <img src="<?php echo base_url(); ?>asset/template/img/servic/juridica.jpg" alt="" class="imgan_mascota">
                                </div>
                            </div>
                        </form>
                    </div>
                    <hr>
                    <div class="controladores">
                        <button class="btn btn-primary" id="guardars">GUARDAR</button>
                        <button class="btn btn-danger">CANCELAR</button>
                    </div>
                </div>
            </div>
        </div> 
    </div>
    <!-- formulario para fisioterapia -->
    <div class="row" style="margin-top:-21px;" id="FormFisioterapia">
        <div class="col-md-6">
            <div class="tile" style="padding: 0px;border-radius: 5px;">
                <div class="titulo_mascota">
                    <span>REGISTRAR FISIOTERAPIA</span>
                </div>
                <div class="contenido_mascota">
                    <input type="text" placeholder="Buscar por codigo" id="txt_buscar_codigo_fisiote" class="txt_buscar_codigo_mas">
                    <input type="text" placeholder="Buscar por DNI" id="txt_buscar_dni_fisiote" class="txt_buscar_dni_mas">
                    <input type="text" placeholder="Nombre del contribuyente" id="txt_nombre_cont_fisiote" class="txt_buscar_nombre_mas">

                    <input type="hidden" id="txt_cod_cont_fisiote">
                    <hr>
                    <div class="formulario_mascota">
                        <form>
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8">
                                    <span for="">NOMBRE DEL PACIENTE:</span>
                                    <input type="text" class="form-control1" placeholder="Nombre">
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
                                    <span for="">DNI</span>
                                    <input type="text" class="form-control1" placeholder="DNI">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-3 col-xl-3">
                                    <span for="">EDAD:</span>
                                    <input type="text" class="form-control1" placeholder="Raza">
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
                                    <span for="">SELECCIONAR:</span>
                                    <select name="" id="" class="form-control1">
                                        <option value="">M</option>
                                        <option value="">F</option>
                                    </select>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-5 col-xl-5">
                                    <span for="">SELECCIONAR:</span>
                                    <select name="" id="" class="form-control1">
                                        <option value="">MASAJE DE RELAJACIÓN</option>
                                        <option value="">OTROS</option>
                                    </select>
                                </div>  
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                    <textarea name="" id="" class="txt_observacion_mascota"  rows="4" placeholder="OBSERVACION"></textarea>
                                </div>  
                                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                    <img src="<?php echo base_url(); ?>asset/template/img/servic/fisioterapia.jpg" alt="" class="imgan_mascota">
                                </div>
                            </div>
                        </form>
                        
                    </div>
                    <hr>
                    <div class="controladores">
                        <button class="btn btn-primary">GUARDAR</button>
                        <button class="btn btn-danger">CANCELAR</button>
                    </div>
                </div>
            </div>
        </div> 
    </div>
    <!-- formulario para odontologia -->
    <div class="row" style="margin-top:-21px;" id="FormOdontologia">
        <div class="col-md-6">
            <div class="tile" style="padding: 0px;border-radius: 5px;">
                <div class="titulo_mascota">
                    <span>REGISTRAR ODONTOLOGÍA</span>
                </div>
                <div class="contenido_mascota">
                    <input type="text" placeholder="Buscar por codigo" id="txt_buscar_codigo_odon" class="txt_buscar_codigo_mas">
                    <input type="text" placeholder="Buscar por DNI" id="txt_buscar_dni_odon" class="txt_buscar_dni_mas">
                    <input type="text" placeholder="Nombre del contribuyente" id="txt_nombre_cont_odon" class="txt_buscar_nombre_mas">
                    <input type="hidden" id="txt_cod_odon">
                    <hr>
                    <div class="formulario_mascota">
                        <form>
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8">
                                    <span for="">NOMBRE DEL PACIENTE:</span>
                                    <input type="text" class="form-control1" placeholder="Nombre">
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
                                    <span for="">DNI</span>
                                    <input type="text" class="form-control1" placeholder="DNI">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-3 col-xl-3">
                                    <span for="">EDAD:</span>
                                    <input type="text" class="form-control1" placeholder="Raza">
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
                                    <span for="">SELECCIONAR:</span>
                                    <select name="" id="" class="form-control1">
                                        <option value="">M</option>
                                        <option value="">F</option>
                                    </select>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-5 col-xl-5">
                                    <span for="">SELECCIONAR:</span>
                                    <select name="" id="" class="form-control1">
                                        <option value="">FLUORIZACIÓN</option>
                                        <option value="">DIAGNÓSTICO</option>
                                    </select>
                                </div>  
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                    <textarea name="" id="" class="txt_observacion_mascota"  rows="4" placeholder="OBSERVACION"></textarea>
                                </div>  
                                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                    <img src="<?php echo base_url(); ?>asset/template/img/servic/odontoligia.jpg" alt="" class="imgan_mascota">
                                </div>
                            </div>
                        </form>
                        
                    </div>
                    <hr>
                    <div class="controladores">
                        <button class="btn btn-primary">GUARDAR</button>
                        <button class="btn btn-danger">CANCELAR</button>
                    </div>
                </div>
            </div>
        </div> 
    </div>
    <!-- formulario para caritas pintadas-->
    <div class="row" style="margin-top:-21px;" id="FormCaritasPintadas">
        <div class="col-md-6">
            <div class="tile" style="padding: 0px;border-radius: 5px;">
                <div class="titulo_mascota">
                    <span>REGISTRAR CARITAS PINTADAS</span>
                </div>
                <div class="contenido_mascota">
                    <input type="text" placeholder="Buscar por codigo" id="txt_buscar_codigo_cariPin" class="txt_buscar_codigo_mas">
                    <input type="text" placeholder="Buscar por DNI" id="txt_buscar_dni_cariPin" class="txt_buscar_dni_mas">
                    <input type="text" placeholder="Nombre del contribuyente" id="txt_nombre_cont_cariPin" class="txt_buscar_nombre_mas">
                    <input type="hidden" id="txt_cod_cariPin">
                    <hr>
                    <div class="formulario_mascota">
                        <form>
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8">
                                    <span for="">NOMBRES:</span>
                                    <input type="text" id="nom_caritapint" class="form-control1" placeholder="Nombre">
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
                                    <span for="">DNI</span>
                                    <input type="text" id="dni_caritapint" class="form-control1" placeholder="DNI">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                    <span for="">EDAD:</span>
                                    <input type="text" id="edad_caritapint" class="form-control1" placeholder="edad">
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                    <span for="" >SEXO:</span>
                                    <select name="" id="sexo_caritapint" class="form-control1">
                                        <option value="MASCULINO">MASCULINO</option>
                                        <option value="FEMENINO">FEMENINO</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">   
                                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                    <textarea name="" id="obs_caritPi" class="txt_observacion_mascota"  rows="4" placeholder="OBSERVACION"></textarea>
                                </div>  
                                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                    <img src="<?php echo base_url(); ?>asset/template/img/servic/caritapintada.jpg" alt="" class="imgan_mascota">
                                </div>
                            </div>
                        </form>
                        
                    </div>
                    <hr>
                    <div class="controladores">
                        <button class="btn btn-primary" id="guardarcarit">GUARDAR</button>
                        <button class="btn btn-danger">CANCELAR</button>
                    </div>
                    <p id="mensajecar" style="background:#00afbd; color:#fff; padding:1px; font-size:14px;margin-top:5px;border-radius:5px;text-align:center"></p>
                </div>
            </div>
        </div> 
    </div>
    <!-- formulario para corte de cabello -->
    <div class="row" style="margin-top:-21px;" id="FormCorteCabello">
        <div class="col-md-6">
            <div class="tile" style="padding: 0px;border-radius: 5px;">
                <div class="titulo_mascota">
                    <span>REGISTRAR CORTE DE CABELLO</span>
                </div>
                <div class="contenido_mascota">
                    <input type="text" placeholder="Buscar por codigo" id="txt_buscar_codigo_corte" class="txt_buscar_codigo_mas">
                    <input type="text" placeholder="Buscar por DNI" id="txt_buscar_dni_corte" class="txt_buscar_dni_mas">
                    <input type="text" placeholder="Nombre del contribuyente" id="txt_nombre_cont_corte" class="txt_buscar_nombre_mas">
                    <input type="hidden"  id="txt_cod_corte" >
                    <hr>
                    <div class="formulario_mascota">
                        <form>
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8">
                                    <span for="">NOMBRES:</span>
                                    <input type="text" id="nombre_cortecabell" class="form-control1" placeholder="Nombre">
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
                                    <span for="">DNI</span>
                                    <input type="text" id="dni_cortecabell" class="form-control1" placeholder="DNI">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                    <span for="">EDAD:</span>
                                    <input type="text" id="edad_cortecabell" class="form-control1" placeholder="edad">
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                    <span for="">SEXO:</span>
                                    <select name="" id="sexo_cortecabell" class="form-control1">
                                        <option value="MASCULINO">MASCULINO</option>
                                        <option value="FEMENINO">FEMENINO</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">   
                                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                    <textarea name="" id="obs_cortecabell" class="txt_observacion_mascota"  rows="4" placeholder="OBSERVACION"></textarea>
                                </div>  
                                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                    <img src="<?php echo base_url(); ?>asset/template/img/servic/cortecabello.jfif" alt="" class="imgan_mascota">
                                </div>
                            </div>
                        </form>
                    </div>
                    <hr>
                    <div class="controladores">
                        <button class="btn btn-primary" id="guardar_cortecabell">GUARDAR</button>
                        <button class="btn btn-danger" id="btn_cancelar">CANCELAR</button>
                    </div>
                    <p id="mensajecorte" style="background:#00afbd; color:#fff; padding:1px; font-size:14px;margin-top:5px;border-radius:5px;text-align:center"></p>
                </div>
            </div>
        </div> 
    </div>
    <!-- formulario de manicure -->
    <div class="row" style="margin-top:-21px;" id="FormManicure">
        <div class="col-md-6">
            <div class="tile" style="padding: 0px;border-radius: 5px;">
                <div class="titulo_mascota">
                    <span>REGISTRAR MANICURE</span>
                </div>
                <div class="contenido_mascota">
                    <input type="text" placeholder="Buscar por codigo" id="txt_buscar_codigo_manicure" class="txt_buscar_codigo_mas">
                    <input type="text" placeholder="Buscar por DNI" id="txt_buscar_dni_manicure" class="txt_buscar_dni_mas">
                    <input type="text" placeholder="Nombre del contribuyente" id="txt_nombre_cont_manicure" class="txt_buscar_nombre_mas">
                    <input type="hidden" id="txt_cod_manicure">
                    <hr>
                    <div class="formulario_mascota">
                        <form>
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8">
                                    <span for="">NOMBRES:</span>
                                    <input type="text" id="nom_manicure" class="form-control1" placeholder="Nombre">
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
                                    <span for="">DNI</span>
                                    <input type="text" id="dni_manicure" class="form-control1" placeholder="DNI">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                    <span for="">EDAD:</span>
                                    <input type="text" id="edad_manicure" class="form-control1" placeholder="edad">
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                    <span for="">SEXO:</span>
                                    <select name="" id="sexo_manicure" class="form-control1">
                                        <option value="MASCULINO">MASCULINO</option>
                                        <option value="FEMENINO">FEMENINO</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">   
                                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                    <textarea name="" id="obs_manicure" class="txt_observacion_mascota"  rows="4" placeholder="OBSERVACION"></textarea>
                                </div>  
                                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                    <img src="<?php echo base_url(); ?>asset/template/img/servic/manicure.jpg" alt="" class="imgan_mascota">
                                </div>
                            </div>
                        </form>
                        
                    </div>
                    <hr>
                    <div class="controladores">
                        <button class="btn btn-primary" id="guardar_manicure">GUARDAR</button>
                        <button class="btn btn-danger">CANCELAR</button>
                    </div>
                    <p id="mensajemanicure" style="background:#00afbd; color:#fff; padding:1px; font-size:14px;margin-top:5px;border-radius:5px;text-align:center"></p>
                </div>
            </div>
        </div> 
    </div>
</main>
<!-- Essential javascripts for application to work-->
<!-- aside en archivo views/admin/layouts/footer.php-->
<script src="<?php echo base_url(); ?>asset/template/js/jquery-3.2.1.min.js"></script>
<script src="<?php echo base_url(); ?>asset/template/js/popper.min.js"></script>
<script src="<?php echo base_url(); ?>asset/template/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>asset/template/js/main.js"></script>
<script src="<?php echo base_url(); ?>asset/template/js/sweetalert2/dist/sweetalert2.min.js"></script>
<script src="<?php echo base_url(); ?>asset/template/script/campana/servicios1.js"></script>
</body>

</html>