<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800">Mostrar actividades</h1>


	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">Registros de Actividades Realizadas</h6>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>ID actividad</th>
							<th>ID cultivo</th>
							<th>Nombre Cultivo</th>
							<th>ID Actividad</th>
							<th>Nombre Actividad</th>
							<th>ID Trabajador</th>
							<th>Nombre Trabajador</th>
							<th>Fecha Actividad</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th>ID actividad</th>
							<th>ID cultivo</th>
							<th>Nombre Cultivo</th>
							<th>ID Actividad</th>
							<th>Nombre Actividad</th>
							<th>ID Trabajador</th>
							<th>Nombre Trabajador</th>
							<th>Fecha Actividad</th>
						</tr>
					</tfoot>
					<tbody>
						<?php foreach($this->model->Listar() as $r): ?>
						<tr>
							<td><?php echo $r->IDCULTIVOACT; ?></td>
							<td><?php echo $r->IDCULTIVO; ?></td>
							<td><?php echo $r->NOMBRECULTIVO; ?></td>
							<td><?php echo $r->IDACTIVIDAD; ?></td>
							<td><?php echo $r->NOMBREACTIVIDAD; ?></td>
							<td><?php echo $r->IDTRABAJADOR; ?></td>
							<td><?php echo $r->NOMBRETRABAJADOR; ?></td>
							<td><?php echo $r->FECHA; ?></td>
						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

</div>
<!-- /.container-fluid -->
