<?php
if(!isset($_SESSION))
{
session_start();
}
  $_SESSION["admin"];
?>

<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>C0FFee</title>
	<link rel="icon" href="../images/ico_cafe.png">

	<!-- Custom fonts for this template-->
	<link href="https://blackrockdigital.github.io/startbootstrap-sb-admin-2/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

	<!-- Custom styles for this template-->
	<link href="https://blackrockdigital.github.io/startbootstrap-sb-admin-2/css/sb-admin-2.min.css" rel="stylesheet">
	<link href="https://blackrockdigital.github.io/startbootstrap-sb-admin-2/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

	<!-- Page Wrapper -->
	<div id="wrapper">

		<!-- Sidebar -->
		<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

			<!-- Sidebar - Brand -->
			<a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
				<div class="sidebar-brand-icon rotate-n-15">
					<i class="fas fa-coffee"></i>
				</div>
				<div class="sidebar-brand-text mx-3">C0FFe <sup>2</sup></div>
			</a>

			<!-- Divider -->
			<hr class="sidebar-divider my-0">

			<!-- Heading -->
			<div class="sidebar-heading">
				Opciones de Usuario
			</div>
			<!-- Divider -->
			<hr class="sidebar-divider my-0">

			<!-- Nav Item - Cultivo Collapse Menu -->
			<li class="nav-item">
				<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCultivos" aria-expanded="true" aria-controls="collapseCultivos">
					<i class="fas fa-tractor"></i>
					<span>Cultivos</span>
				</a>
				<div id="collapseCultivos" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
					<div class="bg-white py-2 collapse-inner rounded">
						<!--            <h6 class="collapse-header">Custom Components:</h6>-->
						<a class="collapse-item" href="?c=Cultivo&a=Crud">Crear Cultivos</a>
						<a class="collapse-item" href="?c=cultivo&a=Ver">Ver Cultivos</a>
					</div>
				</div>
			</li>

			<!-- Divider -->
			<hr class="sidebar-divider">

			<!-- Nav Item - Analisis Collapse Menu -->
			<li class="nav-item">
				<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAnalisis" aria-expanded="true" aria-controls="collapseAnalisis">
					<i class="fas fa-microscope"></i>
					<span>Analisis de Suelo</span>
				</a>
				<div id="collapseAnalisis" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
					<div class="bg-white py-2 collapse-inner rounded">
						<a class="collapse-item" href="?c=Analisis&a=Crud">Registrar Analisis de Suelo</a>
						<a class="collapse-item" href="?c=Analisis&a=Ver">Ver Analisis de suelo</a>
					</div>
				</div>
			</li>

			<!-- Divider -->
			<hr class="sidebar-divider">

			<!-- Nav Item - Actividades Collapse Menu -->
			<li class="nav-item">
				<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseActividades" aria-expanded="true" aria-controls="collapseActividades">
					<i class="fas fa-clipboard-check"></i>
					<span>Actividades</span>
				</a>
				<div id="collapseActividades" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
					<div class="bg-white py-2 collapse-inner rounded">
						<a class="collapse-item" href="?c=Actividad&a=Crud">Crear Actividades</a>
						<a class="collapse-item" href="?c=Actividad&a=Ver">Ver Actividades Creadas</a>
						<a class="collapse-item" href="?c=Cultivoact&a=Crud">Asociar Actividad</a>
						<a class="collapse-item" href="?c=Cultivoact&a=Ver">Ver Actividade Asociada</a>
					</div>
				</div>
			</li>

			<!-- Divider -->
			<hr class="sidebar-divider">

			<!-- Nav Item - Calidad Collapse Menu -->
			<li class="nav-item">
				<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCalidad" aria-expanded="true" aria-controls="collapseCalidad">
					<i class="far fa-check-circle"></i>
					<span>Control de Calidad</span>
				</a>
				<div id="collapseCalidad" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
					<div class="bg-white py-2 collapse-inner rounded">
						<a class="collapse-item" href="?c=ControlCalidad&a=Crud">Crear Control de Calidad</a>
						<a class="collapse-item" href="?c=ControlCalidad&a=Ver">Ver Control de Calidad</a>
						<a class="collapse-item" href="?c=CultivoControl&a=Crud">Asociar Control de calidad</a>
						<a class="collapse-item" href="?c=CultivoControl&a=Ver">Ver Control de Calidad Asociado</a>
					</div>
				</div>
			</li>

			<!-- Divider -->
			<hr class="sidebar-divider">

			<!-- Nav Item - Calidad Collapse Menu -->
			<li class="nav-item">
				<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePersonal" aria-expanded="true" aria-controls="collapsePersonal">
					<i class="fas fa-users"></i>
					<span>Personal</span>
				</a>
				<div id="collapsePersonal" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
					<div class="bg-white py-2 collapse-inner rounded">
						<a class="collapse-item" href="?c=Trabajador&a=Crud">Crear Trabajador</a>
						<a class="collapse-item" href="?c=Trabajador&a=Ver">Ver Trabajadores</a>
						<?php
                                 $rol = $_SESSION["admin"];
                                    if($rol == 1){ ?>
						<a class="collapse-item" href="?c=Usuario&a=Crud">Registrar Usuario</a>
						<a class="collapse-item" href="?c=Usuario&a=Ver">Ver Usuarios</a> <?php
                                    }?>
					</div>
				</div>
			</li>

			<!-- Divider -->
			<hr class="sidebar-divider">
			
			<!-- Nav Item - Calidad Collapse Menu -->
			<li class="nav-item">
				<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSilos" aria-expanded="true" aria-controls="collapsePersonal">
					<i class="fas fa-users"></i>
					<span>Silos</span>
				</a>
				<div id="collapseSilos" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
					<div class="bg-white py-2 collapse-inner rounded">
						<a class="collapse-item" href="?c=Silo&a=Crud">Agregar Silos</a>
						<a class="collapse-item" href="?c=Silo&a=Ver">Ver Silos</a>
						
					</div>
				</div>
			</li>
			
			<!-- Divider -->
			<hr class="sidebar-divider">

			<!-- Sidebar Toggler (Sidebar) -->
			<div class="text-center d-none d-md-inline">
				<button class="rounded-circle border-0" id="sidebarToggle"></button>
			</div>

		</ul>
		<!-- End of Sidebar -->

		<!-- Content Wrapper -->
		<div id="content-wrapper" class="d-flex flex-column">

			<!-- Main Content -->
			<div id="content">

				<!-- Topbar -->
				<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

					<!-- Sidebar Toggle (Topbar) -->
					<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
						<i class="fa fa-bars"></i>
					</button>



					<!-- Topbar Navbar -->
					<ul class="navbar-nav ml-auto">

						<!-- Nav Item - Search Dropdown (Visible Only XS) -->
						<li class="nav-item dropdown no-arrow d-sm-none">
							<a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fas fa-search fa-fw"></i>
							</a>
							<!-- Dropdown - Messages -->
							<div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
								<form class="form-inline mr-auto w-100 navbar-search">
									<div class="input-group">
										<input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
										<div class="input-group-append">
											<button class="btn btn-primary" type="button">
												<i class="fas fa-search fa-sm"></i>
											</button>
										</div>
									</div>
								</form>
							</div>
						</li>

						

						
						<div class="topbar-divider d-none d-sm-block"></div>

						<!-- Nav Item - User Information -->
						<li class="nav-item dropdown no-arrow">
							<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="mr-2 d-none d-lg-inline text-gray-600 small"> <?php
                                        echo $_SESSION["nombre"]
                                        ?> </span>
								<img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
							</a>
							<!-- Dropdown - User Information -->
							<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
								<a class="dropdown-item" href="#">
									<i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
									Profile
								</a>
								<a class="dropdown-item" href="#">
									<i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
									Settings
								</a>
								<a class="dropdown-item" href="#">
									<i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
									Activity Log
								</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" data-toggle="modal" data-target="#logoutModal">
									<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
									Logout
								</a>
							</div>
						</li>

					</ul>

				</nav>
