<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800">Crear Trabajdor</h1>

	<div class="row">
		<div class="col-lg-12">
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary">Formulario Registro Trabajador</h6>
				</div>
				<form role="form" id="frm-zona" action="?c=Trabajador&a=Guardar" method="post" enctype="multipart/form-data">
				<input type="hidden" name="id" value="<?php echo $alm->IDTRABAJADOR; ?>" />
					<div class="card-body">

						<div class="form-group">
							<label>Nombre del trabajador</label>
							<input class="form-control" type="text" placeholder="ingrese el nombre " required name="nombre">
						</div>
						<div class="form-group">
							<label>apellido del trabajador</label>
							<input class="form-control" type="text" placeholder="ingrese el apellido " required name="apellido">
						</div>
						<div class="form-group">
							<label>telefono del trabajador</label>
							<input class="form-control" type="tel" placeholder="ingrese el celular" pattern="[0-9]{10}" required name="telefono">
						</div>
						<div class="form-group">
							<label>cedula del trabajador</label>
							<input class="form-control" type="number" placeholder="ingrese cedula"  required name="cedula">
						</div>
						<div class="form-group">
						<input type="hidden" name="idusuario" id="textInput" class="form-control mb-4" value ="<?php echo $_SESSION['idusuario'] ?>">
					</div>
					</div>
					<div class="card-footer">
						<button type="submit" class="btn btn-primary" onclick="showAlert()">Crear Trabajador</button></div>


				</form>
			</div>
		</div>
	</div>


</div>
<!-- /.container-fluid -->
