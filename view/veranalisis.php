<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800">Ver Analisis de Suelo</h1>


	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">Registros de Analisis</h6>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>ID</th>
							<th>Cultivo</th>
							<th>NombreCultivo</th>
							<th>potasio</th>
							<th>nitrogeno</th>
							<th>fosforo</th>
							<th>PH</th>
							<th>FECHA</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th>ID</th>
							<th>Cultivo</th>
							<th>NombreCultivo</th>
							<th>potasio</th>
							<th>nitrogeno</th>
							<th>fosforo</th>
							<th>PH</th>
							<th>FECHA</th>
						</tr>
					</tfoot>
					<tbody>
						<?php foreach($this->model->Listar() as $r): ?>
						<tr>
							<td><?php echo $r->IDANALISIS; ?></td>
							<td><?php echo $r->IDCULTIVO; ?></td>
							<td><?php echo $r->NOMBRECULTIVO;?></td>
							<td><?php echo $r->PROPIEDAD1; ?></td>
							<td><?php echo $r->PROPIEDAD2; ?></td>
							<td><?php echo $r->PROPIEDAD3; ?></td>
							<td><?php echo $r->PROPIEDAD4; ?></td>
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
