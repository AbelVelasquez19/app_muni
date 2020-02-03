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
    <link href="https://fonts.googleapis.com/css?family=Archivo+Narrow&display=swap" rel="stylesheet">
</head>
<!-- se incluyo body y header en archivo views/admin/layouts/header.php-->
<!-- Sidebar menu-->
<!-- aside en archivo views/admin/layouts/header.php-->
<main class="app-content">
    <div class="row">
        <div class="col-md-12">
            <div class="tile" style="padding: 0px;border-radius: 5px">
                <div class="titulo">
                    <p>MANTENIMIENTO DE RECAUDACIÓN</p>
                </div>
                <div class="tabla">
                    <div class="div_contenido_recau">
                        <a href="#" class="btn_nuevo" data-toggle="modal" data-target=".bd-example-modal-lg">NUEVO <i class="fa fa-plus-square" aria-hidden="true"></i></a>
                            <a href="<?php echo base_url();?>campana/Contro_recaudacion/descargar_execel" class="btn_excel">EXCEL <i class="fa fa-file-excel-o" aria-hidden="true"></i></a>
                        <a href="#" class="btn_pdf">PDF <i class="fa fa-file-pdf-o" aria-hidden="true"></i></a>
                        <input type="text" placeholder="Buscar" class="txt_buscar_reca" name="txt_buscar_reca" id="txt_buscar" style="text-transform: uppercase">
                    </div>
                    <table class="table_reca">

                        <head>
                            <tr>
                                <!-- <th>CODIGO</th> -->
                                <th>FECHA CAMPAÑA</th>
                                <th>CAMPAÑA 1</th>
                                <th>TOTAL</th>
                                <th>CAMPAÑA 2</th>
                                <th>TOTAL</th>
                                <th>TOTAL RECAUDACIÓN</th>
                                <th>ESTADO</th>
                                <th>OPCIONES</th>
                            </tr>
                        </head>
                        <tbody id="tb_recaudacion">
                            <!-- <tr>
                                <td>01</td>
                                <td>02 NOVIEMBRE 2019</td>
                                <td>ASOC. DE VIV. CHILLON - ASOC. PROP. MERCADO MODELO CHILLON</td>
                                <td>38432.94</td>
                                <td>CHILLON MERCADO N° 01 LA ENSENADA</td>
                                <td>19420.81</td>
                                <td>36758.37</td>
                                <td>Activo</td>
                                <td>
                                    <button class="btn_editar_reca"><i class="fa fa-pencil-square" aria-hidden="true"></i></button>
                                    <button class="btn_estado_reca"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                </td>
                            </tr>-->
                        </tbody>
                    </table>
                    <div class="pagination_recaudacion">
                        <nav aria-label="..." id="paginador_html">
                            <!-- paginaciones de datos -->
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- modal para insertar recaudacion-->
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" style="margin-top: 90px">
            <div class="modal-content">
                <div class="modal-header header-css">
                    <h5 class="modal-title" id="exampleModalLabel">INSERTAR RECAUDACIÓN</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="insertar-recaudacion">
                        <div class="row">
                            <div class="col-sm-6 col-md-6 col-lg-8 col-xl-8">
                                <label for="">Nombre del sector</label>
                                <input type="text" id="txt_sector1" class="form-control" style="text-transform: uppercase">
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                <label for="">Total</label>
                                <input type="text" id="txt_total1" class="form-control" placeholder="S/." style="text-transform: uppercase">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-md-6 col-lg-8 col-xl-8">
                                <label for="">Nombre del sector</label>
                                <input type="text" id="txt_sector2" class="form-control" style="text-transform: uppercase">
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                <label for="">Total</label>
                                <input type="text" id="txt_total2" class="form-control" placeholder="S/." style="text-transform: uppercase">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-md-6 col-lg-8 col-xl-8">
                                <label for="">Fecha</label>
                                <input type="text" id="txt_fecha" class="form-control" style="text-transform: uppercase">
                                <input type="hidden" id="txt_fecha_number" class="form-control" style="text-transform: uppercase">
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                <label for="">Color</label>
                                <input type="text" id="txt_color" class="form-control">
                            </div>
                        </div>
                        <p id="mensaje"><p>
                    </div>
                </div>
                <div class="modal-footer footer-css-recaudacion">
                    <button type="button" class="btn btn-secondary btn-cerrar" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary btn-guardar" id="btn_guardar">Guardar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- modal para actualizar recaudacion -->
    <div class="modal fade Modal_Actualizar" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" style="margin-top: 90px">
            <div class="modal-content">
                <div class="modal-header header-css">
                    <h5 class="modal-title" id="exampleModalLabel">MODIFICAR RECAUDACIÓN</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="insertar-recaudacion">
                        <div class="row">
                            <div class="col-sm-6 col-md-6 col-lg-8 col-xl-8">
                                <label for="">Nombre del sector</label>
                                <input type="text" id="txt_sector1_actualizar" class="form-control" style="text-transform: uppercase">
                                <input type="hidden" id="txt_codigo_recaudacion" class="form-control" style="text-transform: uppercase">
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                <label for="">Total</label>
                                <input type="text" id="txt_total1_actualizar" class="form-control" placeholder="S/." style="text-transform: uppercase">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-md-6 col-lg-8 col-xl-8">
                                <label for="">Nombre del sector</label>
                                <input type="text" id="txt_sector2_actualizar" class="form-control" style="text-transform: uppercase">
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                <label for="">Total</label>
                                <input type="text" id="txt_total2_actualizar" class="form-control" placeholder="S/." style="text-transform: uppercase">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-md-6 col-lg-12 col-xl-12">
                                <label for="">Fecha</label>
                                <input type="text" id="txt_fecha_actualizar" class="form-control" style="text-transform: uppercase">
                                <input type="hidden" id="txt_fecha_number_actualizar" class="form-control" style="text-transform: uppercase">
                            </div>
                        </div>
                        <p id="mensaje"><p>
                    </div>
                </div>
                <div class="modal-footer footer-css-recaudacion">
                    <button type="button" class="btn btn-secondary btn-cerrar" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary btn-actualizar" id="btn_modificar">Modificar</button>
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
<script src="<?php echo base_url(); ?>asset/template/script/campana.js"></script>
</body>

</html>