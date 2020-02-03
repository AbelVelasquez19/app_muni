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
    echo '<p id="url1" style="display:none">'.$url.'</p>';
?>
<!-- se incluyo body y header en archivo views/admin/layouts/header.php-->
<!-- Sidebar menu-->
<!-- aside en archivo views/admin/layouts/header.php-->
<main class="app-content">
    <div class="row">
        <div class="col-md-12">
            <div class="tile" style="padding: 0px;border-radius: 5px;width:99%">
                <div class="titulo">
                    <p>REGISTRO DE CONTRIBUYENTE Y RELACIONADO</p>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="tile" style="padding: 0px;border-radius: 5px;width:99%">
                <div class="titulo_registro">
                    <input type="text" id="txt_buscar_codigo" class="txt_buscar_codigo" placeholder="Buscar por codigo" maxlength="7">
                    <input type="text" id="txt_buscar_dni" class="txt_buscar_dni" placeholder="Buscar por DNI" maxlength="8">
                    <input type="text" id="txt_buscar_nombre" class="txt_buscar_nombre" placeholder="Buscar por nombre">
                </div>
            </div>
        </div> 
        <div class="col-md-12">
            <form action="<?php echo base_url().'campana/Contro_registro/Registrarcontrihistorial'?>" method="post">
                <div class="tile1" style="padding: 0px;border-radius: 5px; width:99%">
                    <div class="row" style="padding-left:15px;padding-right: 15px">
                        <!-- formulario de contri historial-->
                        <div class="col-md-6" >
                            <div class="tile" style="padding: 0px;border-radius: 5px;">
                                <div class="titulo_contri">
                                        <span>DATOS DE CONTRIBUYENTES</span>
                                </div>
                                <div class="contenido_contri">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
                                            <span for="txt_codigo_con">CODIGO:</span>
                                            <input type="text" class="form-control1" id="txt_codigo_con" name="txt_codigo_con" placeholder="Codigo">
                                        </div>
                                        <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8">
                                            <span for="txt_nombre_con">NOMBRES:</span>
                                            <input type="text" class="form-control1"  id="txt_nombre_con" name="txt_nombre_con" placeholder="Nombre">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
                                            <span for="txt_dni_con">DNI:</span>
                                            <input type="text" class="form-control1" id="txt_dni_con" name="txt_dni_con" placeholder="DNI" maxlength="8">
                                        </div>
                                        <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
                                            <span for="txt_edad_con">EDAD:</span>
                                            <input type="text" class="form-control1" id="txt_edad_con" name="txt_edad_con" placeholder="Edad" maxlength="3">
                                        </div>
                                        <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
                                            <span for="txt_sexo_con">SEXO:</span>
                                            <select id="txt_sexo_con" name="txt_sexo_con" class="form-control1">
                                                <option value="M">MASCULINO</option>
                                                <option value="F">FEMENINO</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-12 col-lg-3 col-xl-3">
                                            <span for="txt_telefono_con">TELEFONO:</span>
                                            <input type="text" class="form-control1" id="txt_telefono_con" name="txt_telefono_con" placeholder="Telefono" maxlength="7">
                                        </div>
                                        <div class="col-sm-12 col-md-12 col-lg-3 col-xl-3">
                                            <span for="txt_celular_con">CELULAR:</span>
                                            <input type="text" class="form-control1" id="txt_celular_con" name="txt_celular_con" placeholder="Celular" maxlength="9">
                                        </div>
                                        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                            <span for="txt_correo_con">CORREO:</span>
                                            <input type="text" class="form-control1" id="txt_correo_con" name="txt_correo_con" placeholder="Correo">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                            <span for="txt_direccion_con">DIRECCIÓN:</span>
                                            <input type="text" class="form-control1" id="txt_direccion_con" name="txt_direccion_con" placeholder="Direcciòn">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                            <span for="txt_observacion_con">OBSERVACIÓN:</span>
                                            <textarea rows="6" id="txt_observacion_con" name="txt_observacion_con" class="form-control2">
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                                <p style="color:red;margin-bottom: -25px"><?php if(isset($mensaje)) echo $mensaje; ?></p>
                                <?=validation_errors();?>
                                    
                            </div>
                        </div>
                        <!-- fin formulario de contri historial-->
                        <!-- formulario de relacionado -->
                        <div class="col-md-6">
                            <div class="tile" style="padding: 0px;border-radius: 5px;">
                                <div class="titulo_relacionado">
                                    <spam>RELACIONADOS DEL CONTRIBUYENTE</spam>
                                </div>
                                <div class="contenido_relacionado">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-12 col-lg-3 col-xl-3 animated-radio-button">
                                            <span>Seleccionar tipo administrado</span><br>
                                            <label><input type="radio"  class="op" name="txt_Tip_relacionado" id="txt_Tip_relacionado" value="TITULAR"><span class="label-text"> Titular</span></label><br>
                                            <label><input type="radio"  class="op" name="txt_Tip_relacionado" id="txt_Tip_relacionado" value="FAMILIAR"><span class="label-text"> Familiar</span></label><br>
                                            <label><input type="radio"  class="op" name="txt_Tip_relacionado" id="txt_Tip_relacionado" value="EMPLEADO"><span class="label-text"> Empleado</span></label><br>
                                            <label><input type="radio"  class="op" name="txt_Tip_relacionado" id="txt_Tip_relacionado" value="REPRESENTANTE"><span class="label-text"> Representante</span></label><br>
                                            <label><input type="radio"  class="op" name="txt_Tip_relacionado" id="txt_Tip_relacionado" value="ENCARGADO"><span class="label-text"> Encargado</span></label><br>
                                        </div>
                                        <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8 contenido_rela">
                                            
                                                <div class="row">
                                                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                                        <span style="font-size:14px">Ingresar datos del relacionado</span><br>
                                                        <span for="">NOMBRES:</span>
                                                        <input type="text" class="form-control1" id="txt_nom_rela" name="txt_nom_rela" placeholder="Nombre relacionado">
                                                        <?php if(!$this->session->userdata('Login')){
                                                        }else{
                                                                echo '<input type="hidden" class="form-control1" id="txt_cod_usuario" name="txt_cod_usuario" value="'.$this->session->userdata("Cod_usuario").'">';
                                                        }
                                                        ?>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
                                                        <span for="">DNI:</span>
                                                        <input type="text" class="form-control1" id="txt_dni_rela" name="txt_dni_rela" placeholder="DNI" maxlength="8">
                                                    </div>
                                                    <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
                                                        <span for="">EDAD:</span>
                                                        <input type="text" class="form-control1" id="txt_edad_rela" name="txt_edad_rela" placeholder="Edad" maxlength="3">
                                                    </div>
                                                    <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
                                                        <span for="">SEXO:</span>
                                                        <input type="text" class="form-control1" id="txt_sexo_rela" name="txt_sexo_rela" placeholder="Sexo">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                                        <span for="">TIPO VINCULO:</span>
                                                        <input type="text" class="form-control1" id="txt_vinculo_rela" name="txt_vinculo_rela" placeholder="Tipo vinculo">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                                        <span for="">TELEFONO:</span>
                                                        <input type="text" class="form-control1" id="txt_telefono_rela" name="txt_telefono_rela" placeholder="Telefono" maxlength="7">
                                                    </div>
                                                    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                                        <span for="">CELULAR:</span>
                                                        <input type="text" class="form-control1" id="txtcelular_rela" name="txtcelular_rela" placeholder="Celular" maxlength="9">
                                                    </div>
                                                </div>    
                                            
                                            
                                        </div>
                                    </div>
                                    <div class="row">   
                                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 animated-radio-button">
                                            <span>Seleccionar tipo atenciòn</span><br>
                                            <label><input type="radio"  class="optiatencion" name="txt_tipo_atencion" id="txt_tipo_atencion" value="VECINO PUNTUAL"><span class="label-text"> Vecino puntual</span></label>&nbsp;&nbsp;&nbsp;
                                            <label><input type="radio"  class="optiatencion" name="txt_tipo_atencion" id="txt_tipo_atencion" value="ESTADO CUENTA"><span class="label-text"> Solo estado cuenta</span></label>&nbsp;&nbsp;&nbsp;
                                            <label><input type="radio"  class="optiatencion" name="txt_tipo_atencion" id="txt_tipo_atencion" value="PAGOS"><span class="label-text"> Pagos</span></label>
                                        </div>
                                    </div>
                                    <hr>
                                    <p id="mensaje"></p>
                                    <div class="row">   
                                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                                <input type="submit" name="submit" class="btn btn-primary mb-2" value="REGISTRAR">
                                            <button class="btn btn-danger mb-2">CANCELAR</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- fin formulario de contri historial-->
                    </div>
                </div>    
            </form>
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
<script src="<?php echo base_url(); ?>asset/template/script/campana/registro.js"></script>
</body>
</html>