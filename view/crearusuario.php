<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Cafe
			<small>Cree un Usuario</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
			<li class="active">Here</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content container-fluid">

		<!--------------------------
        | Your Page Content Here |
        -------------------------->
		<div class="box box-primary">
			<div class="box-header with-border">
				<h3 class="box-title">Crear Usuario</h3>
			</div>
			<!-- /.box-header -->
			<!-- form start -->
			<form role="form" id="frm-zona" action="?c=Usuario&a=Guardar" method="post" enctype="multipart/form-data">
				<input type="hidden" name="id" value="<?php echo $alm->IDUSUARIO; ?>" />
				<div class="box-body">
					<div class="form-group">
						<label for="textInput">Nombre del Usuario</label>
						<input type="text" name="nombre" id="textInput" class="form-control mb-4" placeholder="Ingrese nombre"    required>
					</div>
					<div class="form-group">
						<label for="textInput">Apellido del Usuario</label>
						<input type="text" name="apellido" id="textInput" class="form-control mb-4" placeholder="Ingrese apellido"    required>
					</div>
					<div class="form-group">
						<label for="textInput">Nombre de usario</label>
						<input type="text" name="nomusuario" id="textInput" class="form-control mb-4" placeholder="Ingrese nombre de usuario para logearse"    required>
					</div>
					<div class="form-group">
						<label for="textInput">Contraseña</label>
						<input type="text" name="password" id="textInput" class="form-control mb-4" placeholder="Ingrese la contraseña"    required>
					</div>
					<div>
						    <input type="hidden" name="idorganizacion" value="<?php echo $_SESSION['idorganizacion'] ?>" />
						</div>
					
				</div>
				<!-- /.box-body -->

				<div class="box-footer">
					<button type="submit" class="btn btn-primary"  onclick="showAlert()">Crear trabajador</button>
				</div>
			</form>
		</div>

	</section>
	<!-- /.content -->

</div>


<!-- /.content-wrapper -->
