<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Cafe
			<small>Cree una actividad</small>
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
				<h3 class="box-title">Crear actividad</h3>
			</div>
			<!-- /.box-header -->
			<!-- form start -->
			<form role="form" id="frm-zona" action="?c=Actividad&a=Guardar" method="post" enctype="multipart/form-data">
				<input type="hidden" name="id" value="<?php echo $alm->id; ?>" />
				<div class="box-body">
					<div class="form-group">
						<label for="textInput">Nombre de la actividad</label>
						<input type="text" name="nombre" id="textInput" class="form-control mb-4" placeholder="Ingrese nombre"    required>
						<div>
						    <input type="hidden" name="idusuario" value="<?php echo $_SESSION['idusuario'] ?>" />
						</div>
				</div>
				<!-- /.box-body -->

				<div class="box-footer">
					<button type="submit" class="btn btn-primary"  onclick="showAlert()">Crear actividad</button>
				</div>
			</form>
		</div>

	</section>
	<!-- /.content -->

</div>


<!-- /.content-wrapper -->
