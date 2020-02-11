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
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/template/css/main1.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/template/font-awesome-4.7.0/css/font-awesome.min.css">
    <!-- css para asistencia-->
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700&display=swap" rel="stylesheet">
    <!-- font para reloj-->
    <link href="https://fonts.googleapis.com/css?family=Black+Ops+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Saira+Stencil+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rakkas&display=swap" rel="stylesheet">
</head>
<!-- se incluyo body y header en archivo views/admin/layouts/header.php-->
<!-- Sidebar menu-->
<!-- aside en archivo views/admin/layouts/header.php-->
<main class="app-content">
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="embed-responsive embed-responsive-16by1" id="contenidorcoluma" style="height: 600px">
                    <div class="embed-responsive-item" id="ContainerColumna"></div>
                </div>
            </div>
            <div class="tile">
                <div class="embed-responsive embed-responsive-16by1" id="contenidorgrafico" style="height: 500px">
                     <div class="embed-responsive-item" id="containerlineal"></div>
              </div>
            </div>
        </div>
    </div>
    <P id="demo"></P>
</main>
<!-- aside en archivo views/admin/layouts/footer.php-->
<script src="<?php echo base_url();?>asset/template/js/jquery-3.2.1.min.js"></script>
<script src="<?php echo base_url();?>asset/template/js/popper.min.js"></script>
<script src="<?php echo base_url();?>asset/template/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>asset/template/js/main.js"></script>

<script src="<?php echo base_url();?>asset/template/js/highcharts/highcharts.js"></script> 
<script src="<?php echo base_url();?>asset/template/js/highcharts/highcharts-3d.js"></script>
<!-- <script src="asset/template/js/highcharts/highcharts-more.js"></script>-->
<script src="<?php echo base_url();?>asset/template/js/highcharts/exporting.js"></script>
<script src="<?php echo base_url();?>asset/template/js/highcharts/export-data.js"></script>
<script src="<?php echo base_url();?>asset/template/script/Rrpcampana.js"></script>
