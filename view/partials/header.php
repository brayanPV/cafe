<?php
if(!isset($_SESSION))
{
session_start();
}  
 echo $_SESSION["admin"];
?>


<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>C0FFee-Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous">
    <!--datatables-->
    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <!-- Ionicons -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet">
    <!-- Theme style -->
    <link rel="stylesheet" href="https://adminlte.io/themes/AdminLTE/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
    <link rel="stylesheet" href="https://adminlte.io/themes/AdminLTE/dist/css/skins/skin-blue.min.css">
    <!--a icon-->
    <link href="dist/icon.png" rel="Shortcut icon">

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <!-- Main Header -->
        <header class="main-header">

            <!-- Logo -->
            <a href="index2.html" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>C</b>0F</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>C0FFee</b></span>
            </a>

            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
                <!-- Navbar Right Menu -->
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- User Account Menu -->
                        <li class="dropdown user user-menu">
                            <!-- Menu Toggle Button -->
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <!-- The user image in the navbar-->
                                <img src="dist/profile.jpg" class="user-image" alt="User Image">
                                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                                <span class="hidden-xs">
                                    <?php
                                        echo $_SESSION["nombre"]
                                        ?> </span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- The user image in the menu -->
                                <li class="user-header">
                                    <img src="dist/profile.jpg" class="img-circle" alt="User Image">

                                    <p>
                                        <?php
                                        echo $_SESSION["nombre"]
                                        ?> 
                                        <small>Member since Nov. 2012</small>
                                    </p>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-right">
                                        <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!-- Control Sidebar Toggle Button -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">

            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">

                <!-- Sidebar user panel (optional) -->
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="dist/profile.jpg" class="img-circle" alt="User Image">
                    </div>
                    <div class="pull-left info">
                        <p><?php
                                        echo $_SESSION["nombre"]
                                        ?> </p>
                        <!-- Status -->
                        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="header">Opciones de usuario</li>
                    <!-- Optionally, you can add icons to the links -->
                    <!-- Zonas -->
                    <li class="active treeview menu-open">
                        <a href="#"><i class="fa fa-link"></i> <span>Cultivos</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="?c=Cultivo&a=Crud"><i class="fa fa-link"></i> <span>Crear Cultivos</span></a></li>
                            <li><a href="?c=cultivo&a=Ver"><i class="fa fa-link"></i> <span>Ver Cultivos</span></a></li>
                        </ul>
                    </li>
                    <!-- Entradas -->
                    <!--<li class="active treeview menu-open">
						<a href="#"><i class="fa fa-link"></i> <span>Entradas</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="?c=Entrada&a=Crud"><i class="fa fa-link"></i> <span>Registrar Entrada</span></a></li>
							<li><a href="?c=Entrada&a=Ver"><i class="fa fa-link"></i> <span>Ver Entradas</span></a></li>
						</ul>						
					</li>-->
                    <li class="active treeview menu-open">
                        <a href="#"><i class="fa fa-link"></i> <span>Analisis de suelo</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                            <ul class="treeview-menu">
                                <li><a href="?c=Analisis&a=Crud"><i class="fa fa-link"></i> <span>Registrar analisis de suelo</span></a></li>
                                <li><a href="?c=Analisis&a=Ver"><i class="fa fa-link"></i> <span>Ver Analisis de suelos</span></a></li>
                            </ul>
                        </a>
                    </li>
                    <li class="active treeview menu-open">
                        <a href="#"><i class="fa fa-link"></i> <span>Actividades</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                            <ul class="treeview-menu">
                                <li><a href="?c=Actividad&a=Crud"><i class="fa fa-link"></i> <span>crear actividades</span></a></li>
                                <li><a href="?c=Actividad&a=Ver"><i class="fa fa-link"></i> <span>ver actividades creadas</span></a></li>
                                <li><a href="?c=Cultivoact&a=Crud"><i class="fa fa-link"></i> <span>Asociar actividad</span></a></li>
                                <li><a href="?c=Cultivoact&a=Ver"><i class="fa fa-link"></i> <span>Ver actividad asociada</span></a></li>
                            </ul>
                        </a>
                    </li>
                    <li class="active treeview menu-open">
                        <a href="#"><i class="fa fa-link"></i> <span>Control De Calidad</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                            <ul class="treeview-menu">
                                <li><a href="?c=ControlCalidad&a=Crud"><i class="fa fa-link"></i> <span>Crear control de calidad</span></a></li>
                                <li><a href="?c=ControlCalidad&a=Ver"><i class="fa fa-link"></i> <span>Ver control de calidad</span></a></li>
                                <li><a href="?c=CultivoControl&a=Crud"><i class="fa fa-link"></i> <span>Asociar control de calidad </span></a>
                                </li>
                                <li><a href="?c=CultivoControl&a=Ver"><i class="fa fa-link"></i> <span>Ver control de calidad realizado</span></a>
                                </li>

                            </ul>
                        </a>
                    </li>
                    <li class="active treeview menu-open">
                        <a href="#"><i class="fa fa-link"></i> <span>Personal</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                            <ul class="treeview-menu">
                                <li><a href="?c=Trabajador&a=Crud"><i class="fa fa-link"></i> <span>Crear trabajador</span></a></li>
                                <li><a href="?c=Trabajador&a=Ver"><i class="fa fa-link"></i> <span>ver trabajadores</span></a></li>
                                <?php
                                 $rol = $_SESSION["admin"];
                                    if($rol == 1){ ?>
                                       <li><a href="?c=Usuario&a=Crud"><i class="fa fa-link"></i> <span>Registrar usuario</span></a></li>
                                       <li><a href="?c=Usuario&a=Ver"><i class="fa fa-link"></i> <span>Ver usuarios</span></a></li> <?php
                                    }?>

                            </ul>
                        </a>
                    </li>
                </ul>
                <!-- /.sidebar-menu -->
            </section>
            <!-- /.sidebar -->
        </aside>
