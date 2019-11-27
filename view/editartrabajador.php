<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800">Editar Trabajdor</h1>

	<div class="row">
		<div class="col-lg-12">
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary">Formulario Edicion Trabajador</h6>
				</div>
				<form role="form" id="frm-zona" action="?c=Trabajador&a=Guardar" method="post" enctype="multipart/form-data">
				<input type="hidden" name="ID" value="<?php echo $alm->IDTRABAJADOR; ?>" />
					<div class="card-body">

						<div class="form-group">
							<label>Nombre del trabajador</label>
							<input class="form-control" type="text" placeholder="ingrese el nombre " required name="nombre" value="<?php echo $alm->NOMBRE; ?>">
						</div>
						<div class="form-group">
							<label>apellido del trabajador</label>
							<input class="form-control" type="text" placeholder="ingrese el apellido " required name="apellido" value="<?php echo $alm->APELLIDO; ?>">
						</div>
						<div class="form-group">
							<label>telefono del trabajador</label>
							<input class="form-control" type="tel" placeholder="ingrese el celular" pattern="[0-9]{10}" required name="telefono" required  value="<?php echo $alm->TELEFONO; ?>">
						</div>
						<div class="form-group">
							<label>cedula del trabajador</label>
							<input class="form-control" type="number" placeholder="ingrese cedula"  required name="cedula" required  value="<?php echo $alm->CEDULA; ?>">
						</div>
						
					</div>
					<div class="card-footer">
						<button type="submit" class="btn btn-primary" onclick="showAlert()">Editar Trabajador</button></div>


				</form>
			</div>
		</div>
	</div>
	
	<div class="row">
		<div class="col-lg-12">
			<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">Tabla de todos los trabajadores</h6>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>ID</th>
							<th>Nombre</th>
							<th>Apellido</th>
							<th>Telefono</th>
							<th>Cedula</th>	
							<th>editar</th>	
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th>ID</th>
							<th>Nombre</th>
							<th>Apellido</th>
							<th>Telefono</th>
							<th>Cedula</th>	
							<th>editar</th>	
						</tr>
					</tfoot>
					<tbody>
						<?php foreach($this->model->Listar() as $r): ?>
						<tr>
							<td><?php echo $r->IDTRABAJADOR; ?></td>
							<td><?php echo $r->NOMBRE; ?></td>	
							<td><?php echo $r->APELLIDO; ?></td>
							<td><?php echo $r->TELEFONO; ?></td>
							<td><?php echo $r->CEDULA; ?></td>								
							<td> <a href="?c=Trabajador&a=Editar&ID=<?php echo $r->IDTRABAJADOR; ?>">Editar</a></td>
							
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
