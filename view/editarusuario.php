<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800">Editar Usuario</h1>

	<div class="row">
		<div class="col-lg-12">
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary">Formulario Edicion Usuario</h6>
				</div>
				<form role="form" id="frm-zona" action="?c=Usuario&a=Guardar" method="post" enctype="multipart/form-data">
				<input type="hidden" name="id" value="<?php echo $alm->IDUSUARIO; ?>" />
					<div class="card-body">

						<div class="form-row">
							<div class="col">
								<label for="textInput">Nombre del Usuario</label>
								<input type="text" name="nombre" id="textInput" class="form-control mb-4" placeholder="Ingrese nombre" required value="<?php echo $alm->NOMBRE; ?>">
							</div>
							<div class="col">
								<label for="textInput">Apellido del Usuario</label>
								<input type="text" name="apellido" id="textInput" class="form-control mb-4" placeholder="Ingrese apellido" required value="<?php echo $alm->APELLIDO; ?>">
							</div>
						</div>
						<div class="form-row">
							<div class="col">
								<label for="textInput">Nombre de usario</label>
								<input type="text" name="nomusuario" id="textInput" class="form-control mb-4" placeholder="Ingrese nombre de usuario para logearse" required value="<?php echo $alm->NOMUSUARIO; ?>">
							</div>
							<div class="col">
								<label for="textInput">Contraseña</label>
								<input type="text" name="password" id="textInput" class="form-control mb-4" placeholder="Ingrese la contraseña" required value="<?php echo $alm->PASSWORD; ?>">
							</div>
						</div>						
						
					</div>
					<div class="card-footer">
						<button type="submit" class="btn btn-primary" onclick="showAlert()">Actualizar Usuario</button></div>


				</form>
			</div>
		</div>
	</div>
	
	<div class="row">
		<div class="col-lg-12">
			<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">Tabla de todos los Usuarios</h6>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>ID</th>
							<th>Nombre</th>
							<th>Apellido</th>
							<th>Nombre usuario</th>
							<th>editar</th>
							<th>eliminar</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th>ID</th>
							<th>Nombre</th>
							<th>Apellido</th>
							<th>Nombre usuario</th>
							<th>editar</th>
							<th>eliminar</th>
						</tr>
					</tfoot>
					<tbody>
						<?php foreach($this->model->Listar() as $r): ?>
						<tr>
							<td><?php echo $r->IDUSUARIO; ?></td>
							<td><?php echo $r->NOMBRE; ?></td>
							<td><?php echo $r->APELLIDO; ?></td>
							<td><?php echo $r->NOMUSUARIO; ?></td>
							<td> <a href="?c=Usuario&a=Editar&ID=<?php echo $r->IDUSUARIO; ?>">Editar</a></td>
							<td><a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=Usuario&a=Eliminar&id=<?php echo $r->id; ?>">Eliminar</a></td>
						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
		</div>
	</div>


</div>
<!-- /.container-fluid -->
