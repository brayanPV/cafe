<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800">Crear Usuario</h1>

	<div class="row">
		<div class="col-lg-12">
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary">Formulario Registro Usuario</h6>
				</div>
				<form role="form" id="frm-zona" action="?c=Usuario&a=Guardar" method="post" enctype="multipart/form-data">
				<input type="hidden" name="id" value="<?php echo $alm->IDUSUARIO; ?>" />
					<div class="card-body">

						<div class="form-row">
							<div class="col">
								<label for="textInput">Nombre del Usuario</label>
								<input type="text" name="nombre" id="textInput" class="form-control mb-4" placeholder="Ingrese nombre" required>
							</div>
							<div class="col">
								<label for="textInput">Apellido del Usuario</label>
								<input type="text" name="apellido" id="textInput" class="form-control mb-4" placeholder="Ingrese apellido" required>
							</div>
						</div>
						<div class="form-row">
							<div class="col">
								<label for="textInput">Nombre de usario</label>
								<input type="text" name="nomusuario" id="textInput" class="form-control mb-4" placeholder="Ingrese nombre de usuario para logearse" required>
							</div>
							<div class="col">
								<label for="textInput">Contraseña</label>
								<input type="text" name="password" id="textInput" class="form-control mb-4" placeholder="Ingrese la contraseña" required>
							</div>
						</div>
						
						<div>
							<input type="hidden" name="idorganizacion" value="<?php echo $_SESSION['idorganizacion'] ?>" />
						</div>
					</div>
					<div class="card-footer">
						<button type="submit" class="btn btn-primary" onclick="showAlert()">Crear Usuario</button></div>


				</form>
			</div>
		</div>
	</div>


</div>
<!-- /.container-fluid -->
