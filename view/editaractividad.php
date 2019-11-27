<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800">Editar Actividad</h1>

	<div class="row">
		<div class="col-lg-12">
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary">Formulario Edicion Actividad</h6>
				</div>
				<form role="form" id="frm-zona" action="?c=Actividad&a=Guardar" method="post" enctype="multipart/form-data">
					<input type="hidden" name="ID" value="<?php echo $alm->IDACTIVIDAD; ?>" />
					<div class="card-body">

						<div class="form-group">
							<label>Nombre de la Actividad</label>
							<input class="form-control" type="text" placeholder="ingrese el nombre de la actividad" name="nombre" id="textInput" value="<?php echo $alm->NOMBRE; ?>">
						</div>
					</div>
					<div class="card-footer">
						<button type="submit" class="btn btn-primary" onclick="showAlert()">Actualizar Actividad</button>
					</div>


				</form>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12">
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary">Registros de Actividades Creadas</h6>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
							<thead>
								<tr>
									<th>ID</th>
									<th>Nombre</th>
									<th>editar</th>
								</tr>
							</thead>
							<tfoot>
								<tr>
									<th>ID</th>
									<th>Nombre</th>
									<th>editar</th>
								</tr>
							</tfoot>
							<tbody>
								<?php foreach($this->model->Listar() as $r): ?>
								<tr>
									<td><?php echo $r->IDACTIVIDAD; ?></td>
									<td><?php echo $r->NOMBRE; ?></td>
									<td>
										<a href="?c=Actividad&a=Editar&ID=<?php echo $r->IDACTIVIDAD; ?>">Editar</a></td>

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
