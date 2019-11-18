<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800">Crear Actividad</h1>

	<div class="row">
		<div class="col-lg-12">
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary">Formulario Registro Actividad</h6>
				</div>
				<form role="form" id="frm-zona" action="?c=Actividad&a=Guardar" method="post" enctype="multipart/form-data">
				<input type="hidden" name="id" value="<?php echo $alm->id; ?>" />
					<div class="card-body">

						<div class="form-group">
							<label>Nombre de la Actividad</label>
							<input class="form-control" type="text" placeholder="ingrese el nombre de la actividad" name="nombre" id="textInput">
						</div>

						<div>
							<input type="hidden" name="idusuario" value="<?php echo $_SESSION['idusuario'] ?>" />
						</div>
					</div>
					<div class="card-footer">
						<button type="submit" class="btn btn-primary" onclick="showAlert()">Crear Actividad</button>
						</div>
					

				</form>
			</div>
		</div>
	</div>


</div>
<!-- /.container-fluid -->
