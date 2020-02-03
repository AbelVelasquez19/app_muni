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
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700&display=swap" rel="stylesheet">
    <!-- font para reloj-->
    <link href="https://fonts.googleapis.com/css?family=Black+Ops+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Saira+Stencil+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rakkas&display=swap" rel="stylesheet">
</head>
<!-- se incluyo body y header en archivo views/admin/layouts/header.php-->
<!-- Sidebar menu-->
<!-- aside en archivo views/admin/layouts/header.php-->
<?php
    $url= base_url();
    echo '<p id="urle" style="display:none">'.$url.'</p>';
?>

<main class="app-content">
    <div class="row">
        <div class="col-md-12">
            <div class="tile titulo_asistencia">
                <span>REPORTE DE ASISTENCIA - </span>
                <span id="txt_diasemana"></span>
                <span id="txt_dia"></span>
                <span id="txt_mes"></span>
                <span>DEL</span>
                <span id="txt_ano"></span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            <div class="tile" style="padding: 0px;">
                <div class="header_asistencia">
                    <span>ASISTENCIA</span>
                </div>
                <div class="contenido_asistencia">
                    <div class="row" id="html_asistencia">                                                                       
                        <!-- recuperando los datos de javascript -->
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="tile" style="padding: 0px">
            <div class="header_faltas">
                    <span>FALTAS</span>
                </div>
                <div class="contenido_faltas">
                    <div class="row" id="html_faltas">
                                                                                                    
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
       <div class="col-12 align-align-align-content-end" style="text-align: right">             
            <form action="<?php echo base_url();?>/Contro_asistencia/reporte">             
               <button class="btn btn-success" id="registrarasistencia" type="button">REGISTRAR ASISTENCIA <i class="fa fa-hand-o-up" aria-hidden="true"></i></button> 
               <button class="btn btn-primary " type="submit">DESCARGAR REPORTE <i class="fa fa-download" aria-hidden="true"></i></button>
            </form>
       </div>                            
    </div>
</main>
<!--  modal se asistencia-->
<div class="modal fade" id="ModalRegAsis" tabindex="-1" role="dialog" aria-labelledby="ModalRegAsis" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document" style="margin-top: 90px">
        <div class="modal-content">
            <div class="modal-header header-css">
                <h5 class="modal-title" id="exampleModalLabel">SISTEMA DE CONTROL DEL TIEMPO DE ENTRA Y SALIDA DEL PERSONAL</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-6">
                        <div class="wrap">
                            <div class="widget">
                                <div class="fecha">
                                    <p id="diaSemana" clas="diaSemana"></p>
                                    <p id="dia" clas="dia"></p>
                                    <p>de</p>
                                    <p id="mes" class="mes"></p>
                                    <p>del</p>
                                    <p id="year" class="year"></p>
                                </div>
                                <div class="reloj">
                                    <p id="horas" class="horas"></p>
                                    <p>:</p>
                                    <p id="minutos" class="minutos"></p>
                                    <p>:</p>
                                    <div class="caja-segundos">
                                        <p id="ampm" class="ampm"></p>
                                        <p id="segundos" class="segundos"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="evento">
                            <p class="text-mensaje-seleccion">Seleccionar Evento</p>
                            <div class="horario1">
                                <button class="label-entrada" id="btn-entrada">Entrada</button>
                                <button class="label-salida" id="btn-salida">Salida</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="Datos_persnales">
                            <form>
                                <div class="form-group form-group-text">
                                    <label for="txt_numero_personal" class="col-form-label">CODIGO DEL TRABAJADOR</label>
                                    <input type="password" class="form-control" id="txt_numero_personal" maxlength="8">
                                </div>
                                <div class="form-group form-group-text">
                                    <label for="txt_nombre_personal" class="col-form-label">NOMBRES DEL TRABAJADOR</label>
                                    <input type="text" class="form-control" id="txt_nombre_personal" disabled>
                                    <input type="hidden" class="form-control" id="txt_Cod_personal">
                                </div>
                                <div class="form-group form-group-text">
                                    <label for="recipient-name" class="col-form-label foto-css" id="imgenesprueba">
                                        <!-- se devuelve imagen desde ajax -->
                                    </label>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer footer-css">
                <p id="mensaje"></p>
            </div>
        </div>
    </div>
</div>
<!-- Essential javascripts for application to work-->
<!-- aside en archivo views/admin/layouts/footer.php-->
<script src="<?php echo base_url();?>asset/template/js/jquery-3.2.1.min.js"></script>
<script src="<?php echo base_url();?>asset/template/js/popper.min.js"></script>
<script src="<?php echo base_url();?>asset/template/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>asset/template/js/main.js"></script>
<script src="<?php echo base_url();?>asset/template/js/asistencias2.js"></script>
</body>
</html>