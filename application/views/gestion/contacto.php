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
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/template/css/contacto/contacto1.css">
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
        <div class="col-md-5">
            <div class="tile" style="padding-left:35px;padding-right:35px">
                <div class="row row-buscar">
                    <div class="col-md-12 buscar_contribuyente">
                        <label for="codigo" class="label-control label-text">Buscar Contribuyente</label>
                        <div class="col-6 input-group mb-2" style="margin-left: -17px;margin-top: -17px;">
                            <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Username">
                            <div class="input-group-prepend ">
                                <div class="input-group-text"><i class="fa fa-search" aria-hidden="true"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mt-2 buscar_contribuyente">
                        <div class="form-row">
                            <div class="col-3">
                                <label for="codigo" class="label-control label-text">Código</label>
                                <input type="text" class="form-control text-text" placeholder="Nombre del contribuyente" name="codigo" id="codigo" value="000001">
                            </div>
                            <div class="col">
                                <label for="nombre" class="label-control label-text">Nombre</label>
                                <input type="text" class="form-control text-text" placeholder="Nombre del contribuyente" name="nombre" id="nombre" value="juan vasquez gregorio">
                            </div>
                        </div>
                        <div class="form-row" style="margin-top:5px;margin-bottom: 5px;">
                            <div class="col">
                                <label for="direccion" class="label-control label-text">Dirección</label>
                                <input type="text" class="form-control text-text" placeholder="direccion del contribuyente" name="direccion" id="direccion">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="tile">
                <div class="row mb-1" style="margin-left:-17px">
                    <div class="col-3 ">
                        <button class="btn-nuevo" id="btn_nuevo">NUEVO</button>
                    </div>
                </div>
                <div class="row" style="margin-left:-17px;margin-right:-16px">
                    <div class="col-12">
                    <table class="table-personalizado">
                        <thead >
                            <tr class="titulo-table text-center">
                                <th scope="col" style="width:20px">ID</th>
                                <th scope="col">CELULAR</th>
                                <th scope="col">TELEFONO</th>
                                <th scope="col">CORREO</th>
                                <th scope="col" style="text-align:center;width:30px">OPCIÓN</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td  scope="row"  style="padding:4px;border:2px #A21F12 solid">1</td>
                                <td  style="padding:4px; border:2px #A21F12 solid">Mark</td>
                                <td  style="padding:4px; border:2px #A21F12 solid">Otto</td>
                                <td  style="padding:4px; border:2px #A21F12 solid">@mdo</td>
                                <td  style="padding:4px; border:2px #A21F12 solid;text-align:center;">
                                    <button class="btn-editar"><i class="fa fa-pencil-square fa-1x" aria-hidden="true"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td  scope="row"  style="padding:4px;border:2px #A21F12 solid">1</td>
                                <td  style="padding:4px; border:2px #A21F12 solid">Mark</td>
                                <td  style="padding:4px; border:2px #A21F12 solid">Otto</td>
                                <td  style="padding:4px; border:2px #A21F12 solid">@mdo</td>
                                <td  style="padding:4px; border:2px #A21F12 solid;text-align:center;">
                                    <button class="btn-editar"><i class="fa fa-pencil-square fa-1x" aria-hidden="true"></i></button>
                                </td>
                            </tr>
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
        

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

</body>
</html>