<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800">Editar Cultivos</h1>

	<div class="row">
		<div class="col-lg-12">
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary">Formulario Edicion de Cultivos</h6>
				</div>
				<form role="form" id="frm-cultivo" action="?c=Cultivo&a=Guardar" method="post" enctype="multipart/form-data">
					<input type="hidden" name="ID" value="<?php echo $alm->IDCULTIVO; ?>" />
					<div class="card-body">

						<div class="form-group">
							<label>Nombre del cultivo</label>
							<input class="form-control" type="text" placeholder="ingrese el nombre del cultivo" name="nombre" required value="<?php echo $alm->NOMBRE; ?>">
						</div>
						<div class="form-group">
							<label>Area del cultivo</label>
							<input class="form-control" type="number" placeholder="ingrese area del cultivo" min="0" max="1000" name="area" required value="<?php echo $alm->AREA; ?>">
						</div>

					</div>
					<div class="card-footer">
						<button type="submit" class="btn btn-primary" onclick="showAlert()">Editar Cultivo</button></div>


				</form>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12">
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary">Registros de Cultivos</h6>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
							<thead>
								<tr>
									<th>ID Cultivo</th>
									<th>Nombre Cultivo</th>
									<th>Area</th>
									<th>fecha</th>
									<th>editar</th>
								</tr>
							</thead>
							<tfoot>
								<tr>
									<th>ID Cultivo</th>
									<th>Nombre Cultivo</th>
									<th>Area</th>
									<th>fecha</th>
									<th>editar</th>
								</tr>
							</tfoot>
							<tbody>
								<?php foreach($this->model->Listar() as $r): ?>
								<tr>
									<td><?php echo $r->IDCULTIVO; ?></td>
									<td><?php echo $r->NOMBRE; ?></td>
									<td><?php echo $r->AREA; ?></td>
									<td><?php echo $r->FECHA; ?></td>
									<td> <a href="?c=Cultivo&a=Editar&ID=<?php echo $r->IDCULTIVO; ?>">Editar</a></td>

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
