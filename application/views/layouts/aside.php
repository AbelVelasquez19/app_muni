<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
    <div class="app-sidebar__user">
        <img class="app-sidebar__user-avatar" src="<?php echo base_url();?>asset/template/img/perfil1.jpg" alt="User Image">
        <div>
            <p class="app-sidebar__user-name">Iniciado como </p>
            <?php 
                if(!$this->session->userdata('Login')){
                    echo '<p class="app-sidebar__user-designation">INVITADO</p>';
                }else{
                    echo '<p class="app-sidebar__user-designation">'.$this->session->userdata('Rol').'</p>';
                }
            ?>
            
        </div>
    </div>
    <div class="nom_usuario" style="margin-top: -19.9px;color:#FFF">
         <?php if(!$this->session->userdata('Login')){
             echo '<p style="text-align: center;display:none;"></p>';
         }else{
            echo '<p style="text-align: center">Bienv.'.$this->session->userdata('Nom_usuario').'</p>';
         } 
         ?>       
    </div>
    <ul class="app-menu" id="desbloquiarlink">
        <li ><a class="app-menu__item active" href="<?php echo base_url();?>Contro_inicio"><i class="app-menu__icon fa fa-home"></i><span class="app-menu__label">Inicio</span></a></li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Campaña</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="<?php echo base_url();?>campana/Contro_registro"  rel="noopener"><i class="icon fa fa-bar-chart"></i> Registro</a></li>
            </ul>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="<?php echo base_url();?>campana/Contro_servicio"  rel="noopener"><i class="icon fa fa-bar-chart"></i> Servicios</a></li>
            </ul>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="<?php echo base_url();?>campana/Contro_recaudacion"  rel="noopener"><i class="icon fa fa-bar-chart"></i> Recaudación</a></li>
            </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-address-book"></i><span class="app-menu__label">Gestión de Cobranza</div></span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="<?php echo base_url();?>gestion/Contro_contacto"  rel="noopener"><i class="icon fa fa-volume-control-phone"></i>Contacto</a></li>
            </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-file-text"></i><span class="app-menu__label">Reportes</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="<?php echo base_url();?>reportes/Contro_rptreca"  rel="noopener"><i class="icon fa fa-bar-chart"></i> Reporte Recaudacion 2019</a></li>
                <li><a class="treeview-item" href="<?php echo base_url();?>reportes/Contro_rptrecault"  rel="noopener"><i class="icon fa fa-bar-chart"></i> Reporte Recaudacion 2020</a></li>
            </ul>
        </li>
    </ul>
</aside>