<!DOCTYPE html>
<html>
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
  </head>
  <body>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <div class="logo">
        <h1>MDPP</h1>
      </div>
      <div class="login-box">
        <form class="login-form" action="<?php echo base_url();?>/Contro_login/login" method="POST">
          <h3 class="login-head">INGRESAR AL SISTEMA</h3>
          <div class="form-group">
            <label class="control-label">USERNAME</label>
            <input class="form-control" type="text" placeholder="Usuario" autofocus name="txtusuario">
          </div>
          <div class="form-group">
            <label class="control-label">PASSWORD</label>
            <input class="form-control" type="password" placeholder="Password" name="txtpassword">
          </div>
          <div class="form-group">
            <div class="utility">
              <div class="animated-checkbox">
                <label>
                  <input type="checkbox"><span class="label-text">Recoradar Contraseña</span>
                </label>
              </div>
            </div>
          </div>
          <div class="form-group btn-container">
            <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>INGRESAR</button>
          </div>
          <div class="form-group btn-container text-danger text-center">
            <?php if($this->session->flashdata("Error")): ?>
                <?php echo $this->session->flashdata('Error'); ?>
            <?php endif?>
          </div>
        </form>
      </div>
    </section>
    <!-- Essential javascripts for application to work-->
    <script src="<?php echo base_url();?>asset/template/js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo base_url();?>asset/template/js/popper.min.js"></script>
    <script src="<?php echo base_url();?>asset/template/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>asset/template/js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="<?php echo base_url();?>asset/template/js/plugins/pace.min.js"></script>
    <script type="text/javascript">
      // Login Page Flipbox control
      $('.login-content [data-toggle="flip"]').click(function() {
      	$('.login-box').toggleClass('flipped');
      	return false;
      });
    </script>
  </body>
</html>