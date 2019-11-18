<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800">Mostrar Control de calidad</h1>


	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">Tabla de todos los controles de calidad</h6>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>ID CONTROL CALIDAD</th>
							<th>Nombre</th>
							<th>Tipo</th>
							<th>editar</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th>ID CONTROL CALIDAD</th>
							<th>Nombre</th>
							<th>Tipo</th>
							<th>editar</th>
						</tr>
					</tfoot>
					<tbody>
						<?php foreach($this->model->Listar() as $r): ?>
						<tr>
							<td><?php echo $r->IDCONTROLCALIDAD; ?></td>
							<td><?php echo $r->NOMBRE; ?></td>
							<td><?php echo $r->TIPO; ?></td>
							<td> <a href="?c=ControlCalidad&a=Editar&ID=<?php echo $r->IDCONTROLCALIDAD; ?>">Editar</a></td>

						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

</div>
<!-- /.container-fluid -->
