<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800">Ver Actividades</h1>


	<!-- DataTales Example -->
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
<!-- /.container-fluid -->
