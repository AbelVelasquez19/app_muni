<body class="app sidebar-mini rtl rtl-nav">
    <!-- Navbar-->
    <header class="app-header">
        <a class="app-header__logo" href="#">MDPP</a>
        <!-- Sidebar toggle button-->
        <a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
        <!-- Navbar Right Menu-->
        <ul class="app-nav">
            <li class="app-search">
                <input class="app-search__input" type="search" placeholder="Buscar">
                <button class="app-search__button"><i class="fa fa-search"></i></button>
            </li>
            <!--Notification Menu-->
            <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Show notifications"><i class="fa fa-bell-o fa-lg"></i></a>
                <ul class="app-notification dropdown-menu dropdown-menu-right">
                    <li class="app-notification__title">Tienes 4 notificaciones nuevas.</li>
                    <div class="app-notification__content">
                        <li>
                            <a class="app-notification__item" href="javascript:;">
                                <span class="app-notification__icon">
                                    <span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span>
                                </span>
                                <div>
                                    <p class="app-notification__message">Lisa te envio un correo</p>
                                    <p class="app-notification__meta">2 min ago</p>
                                </div>
                            </a>
                        </li>
                        <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-success"></i><i class="fa fa-money fa-stack-1x fa-inverse"></i></span></span>
                                <div>
                                    <p class="app-notification__message">Transacción Completada</p>
                                    <p class="app-notification__meta">hace 2 dias</p>
                                </div>
                            </a>
                        </li>
                    </div>
                    <li class="app-notification__footer"><a href="#">Ver Toda las Notificaiones</a></li>
                </ul>
            </li>
            <!-- User Menu-->
            <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
                <ul class="dropdown-menu settings-menu dropdown-menu-right">
                    <li><a class="dropdown-item" href="Vis_Configuracion.php"><i class="fa fa-cog fa-lg"></i> Configuración</a></li>
                    <li><a class="dropdown-item" href="Vis_Perfil.php"><i class="fa fa-user fa-lg"></i> Perfil</a></li>
                    <li id="focus" data-toggle="modal" data-target="#ModalRegAsis" style="cursor: pointer"><a class="dropdown-item"><i class="fa fa-user fa-lg"></i> Asistencia</a></li>
                    <li><a class="dropdown-item" href="<?php echo base_url();?>Contro_login/logout"><i class="fa fa-sign-out fa-lg"></i> Cerrar Sessión</a>
                    </li>
                </ul>
            </li>
        </ul>
    </header>