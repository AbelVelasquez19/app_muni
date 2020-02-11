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
    <link rel="stylesheet" type="text/css"
        href="<?php echo base_url();?>asset/template/font-awesome-4.7.0/css/font-awesome.min.css">
    <!-- css para asistencia-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/template/css/contacto/contacto3.css">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700&display=swap" rel="stylesheet">
    <!-- font para reloj-->
    <link href="https://fonts.googleapis.com/css?family=Black+Ops+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Saira+Stencil+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rakkas&display=swap" rel="stylesheet">
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
        <div class="col-md-5">
            <div class="tile" style="padding-left:35px;padding-right:35px">
                <div class="row row-buscar buscar_contribuyente">
                    <div class="col-12">
                        <p style="background:rgb(153, 17, 17);color:#fff;paddin-left:5px;border-radius:5px;margin-top:5px;text-align:center;margin-bottom:20px">BUSCAR CONTRIBUYENTE</p>
                    </div>
                    <div class="col-md-6 mb-2" style="margin-left: -2px;margin-top: -17px;">
                        <label for="buscarcodigo"  class="label-control label-text">Ingresar codigo</label>
                        <input type="text" class="form-control" id="buscarcodigo" maxlength="7" placeholder="Código" style="margin-top:-16px; font-family: 'Saira Stencil One'">
                    </div>
                    <div class="col-md-6 " style="margin-left: -17px;margin-top: -17px;">
                        <label for="buscarcodigo"  class="label-control label-text">Ingresar DNI</label>
                        <input type="text" class="form-control" id="txt_buscardni" maxlength="11" placeholder="DNI" style="margin-top:-16px;font-family: 'Saira Stencil One'">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mt-2 buscar_contribuyente">
                        <div class="form-row">
                            <div class="col-3">
                                <label for="codigo" class="label-control label-text">Código</label>
                                <input type="text" class="form-control text-text" placeholder="Código" name="codigo"
                                    id="codigo">
                            </div>
                            <div class="col">
                                <label for="nombre" class="label-control label-text">Nombre</label>
                                <input type="text" class="form-control text-text" placeholder="Nombre del contribuyente"
                                    name="nombre" id="nombre">
                            </div>
                        </div>
                        <div class="form-row" style="margin-top:5px;margin-bottom: 5px;">
                            <div class="col">
                                <label for="direccion" class="label-control label-text">Dirección</label>
                                <input type="text" class="form-control text-text"
                                    placeholder="dirección del contribuyente" name="direccion" id="direccion">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mt-2 buscar_contribuyente">
                    <p style="background:rgb(153, 17, 17);color:#fff;paddin-left:5px;border-radius:5px;margin-top:5px;text-align:center;margin-bottom:10px">ESTADO DE CUENTA DE CONTRIBUYENTE</p>
                        <table class="table-personalizado" style="margin-top:5px;margin-bottom:5px">
                            <thead>
                                <tr class="titulo-table text-center">
                                    <th scope="col" style="width:20px">CONCEPTO</th>
                                    <th scope="col">PREDIAL</th>
                                    <th scope="col">ARBITRIOS</th>
                                    <th scope="col">SIN DESC</th>
                                    <th scope="col" >CON DESC</th>
                                </tr>
                            </thead>
                            <tbody id="tableestadocuenta">
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="tile">
                <div class="row mb-1" style="margin-left:-17px">
                    <div class="col-3 ">
                        <button class="btn-nuevo" id="btn_nuevo" data-toggle="modal"
                            data-target="#ModalRegistro">NUEVO</button>
                        <button class="btn-nuevo" id="btn_refresh"><i class="fa fa-refresh"
                                aria-hidden="true"></i></button>
                    </div>
                </div>
                <div class="row" style="margin-left:-17px;margin-right:-16px">
                    <div class="col-12">
                        <table class="table-personalizado">
                            <thead>
                                <tr class="titulo-table text-center">
                                    <th scope="col" style="width:20px">ID</th>
                                    <th scope="col">CELULAR</th>
                                    <th scope="col">TELEFONO</th>
                                    <th scope="col">CORREO</th>
                                    <th scope="col" style="text-align:center;width:10%">OPCIÓN</th>
                                </tr>
                            </thead>
                            <tbody id="tablecontacto">
                                <!-- <tr>
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
                            </tr>-->
                            </tbody>
                        </table>
                        <p id="mensajetable"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- modal de registro -->
<div class="modal fade" id="ModalRegistro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header modal-titutlo">
                <h5 class="modal-title" id="exampleModalLabel">REGISTRAR CONTACTO DEL CONTRIBUYENTE</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group" style="border:2px rgb(153, 17, 17) solid;padding:10px">
                         <div class="row" style="margin-left:-19px">
                            <div class="col-10">
                                <label for="recipient-name" class="col-form-label">Representante:</label>
                                <input type="text" class="form-control" id="txtrepresentante">
                            </div>
                            <div class="col-2" style="margin-top:28px;margin-left:-27px">
                                <label for="" class="lable-control"></label>
                                <button type="button" class="btn-titular" id="btn-titular">TITULAR</button>
                            </div>
                        </div>
                    </div>
                    <div class="form-group" style="border:2px rgb(153, 17, 17) solid;padding:10px">
                        <div class="row" style="margin-left:-19px">
                            <div class="col-6">
                                <label for="recipient-name" class="col-form-label">Celular:</label>
                                <input type="text" class="form-control" maxlength="9" id="txtcelular">
                            </div>
                            <div class="col-6">
                                <label for="message-text" class="col-form-label">Telefono:</label>
                                <input type="text" class="form-control" maxlength="7" style="margin-left:-11px;" id="txttelefono">
                            </div>
                        </div>
                    </div>
                    <div class="form-group" style="border:2px rgb(153, 17, 17) solid;padding:10px">
                        <div class="row" style="margin-left:-19px">
                            <div class="col-12">
                                <label for="message-text" class="col-form-label">Correo:</label>
                                <input type="text" class="form-control" id="txtcorreo">
                            </div>
                        </div>
                    </div>
                </form>
                <p id="mensajeregistro" style="background:rgb(153, 17, 17);color:#fff;padding:5px;border-radius:5px"></p>
            </div>
            <div class="modal-footer modal-foote">
                <button type="button" class="btn-cerrar" id="btn-cerrar_guardar">CERRAR</button>
                <button type="button" class="btn-guardar" id="btn-guardar-contacto">GUARDAR</button>
            </div>
        </div>
        
    </div>
</div>
<!-- fin de modal de registro -->

<!-- modal de actualizacion -->
<div class="modal fade" id="ModalActuaizar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header modal-titutlo">
                <h5 class="modal-title" id="exampleModalLabel">ACTUALIZAR CONTACTO DEL CONTRIBUYENTE</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group" style="border:2px rgb(153, 17, 17) solid;padding:10px">
                         <div class="row" style="margin-left:-19px">
                            <div class="col-10">
                                <label for="recipient-name" class="col-form-label">Representante:</label>
                                <input type="text" class="form-control" id="txtrepresentante_actualizar">
                                <input type="hidden" class="form-control" id="txtid_actualizar">
                                <input type="hidden" class="form-control" id="txtcodigo_actualizar">
                            </div>
                            <div class="col-2" style="margin-top:28px;margin-left:-27px">
                                <label for="" class="lable-control"></label>
                                <button type="button" class="btn-titular" id="btn-titular-actualizar">TITULAR</button>
                            </div>
                        </div>
                    </div>
                    <div class="form-group" style="border:2px rgb(153, 17, 17) solid;padding:10px">
                        <div class="row" style="margin-left:-19px">
                            <div class="col-6">
                                <label for="recipient-name" class="col-form-label">Celular:</label>
                                <input type="text" class="form-control" maxlength="9" id="txtcelular_actualizar">
                            </div>
                            <div class="col-6">
                                <label for="message-text" class="col-form-label">Telefono:</label>
                                <input type="text" class="form-control" maxlength="7" style="margin-left:-11px;" id="txttelefono_actualizar">
                            </div>
                        </div>
                    </div>
                    <div class="form-group" style="border:2px rgb(153, 17, 17) solid;padding:10px">
                        <div class="row" style="margin-left:-19px">
                            <div class="col-12">
                                <label for="message-text" class="col-form-label">Correo:</label>
                                <input type="text" class="form-control" id="txtcorreo_actualizar">
                            </div>
                        </div>
                    </div>
                </form>
                <p id="mensajeactualizar" style="background:rgb(153, 17, 17);color:#fff;padding:5px;border-radius:5px"></p>
            </div>
            <div class="modal-footer modal-foote">
                <button type="button" class="btn-cerrar" id="btn-cerrar_actualizar">CERRAR</button>
                <button type="button" class="btn-guardar" id="btn-actualizar-contacto">ACTUALIZAR</button>
            </div>
        </div>
    </div>
</div>
<!-- fin de modal de actualizacion -->
<!-- aside en archivo views/admin/layouts/footer.php-->
<script src="<?php echo base_url();?>asset/template/js/jquery-3.2.1.min.js"></script>
<script src="<?php echo base_url();?>asset/template/js/popper.min.js"></script>
<script src="<?php echo base_url();?>asset/template/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>asset/template/js/main.js"></script>
<script src="<?php echo base_url();?>asset/template/js/sweetalert2/dist/sweetalert2.min.js"></script>
<script src="<?php echo base_url();?>asset/template/script/gestion/contacto.js"></script>

</body>

</html>