<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800">Ver Silos</h1>


	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">Registros de Silos</h6>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>ID Silo</th>
							<th>Cantidad</th>
							<th>ID Cultivo</th>
							<th>Nombre cultvo</th>
							<th>ID trabajador</th>
							<th>Fecha</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th>ID Silo</th>
							<th>Cantidad</th>
							<th>ID Cultivo</th>
							<th>Nombre cultvo</th>
							<th>ID trabajador</th>
							<th>Fecha</th>
						</tr>
					</tfoot>
					<tbody>
						<?php foreach($this->model->Listar() as $r): ?>
						<tr>
							<td><?php echo $r->idsilo; ?></td>
							<td><?php echo $r->cantidad; ?></td>
							<td><?php echo $r->idcultivo; ?></td>
							<td><?php echo $r->nombre; ?></td>
							<td><?php echo $r->idtrabajador; ?></td>
							<td><?php echo $r->fecha; ?></td>

						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

</div>
<!-- /.container-fluid -->
