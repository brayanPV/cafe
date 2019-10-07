<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Cafe
			<small>Mostrar </small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
			<li class="active">Here</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content container-fluid">

		<!--------------------------
        | Your Page Content Here |
        -------------------------->

		<!-- /.box-header -->
		<!-- form start -->

		<!-- /.box-body -->

		<div class="box">
			<div class="box-header">
				<h3 class="box-title">Editar trabajdor</h3>
			</div>
			<form role="form" id="frm-zona" action="?c=Trabajador&a=Guardar" method="post" enctype="multipart/form-data">
				<input type="hidden" name="ID" value="<?php echo $alm->IDTRABAJADOR; ?>" />
				<div class="box-body">
					<div class="form-group">
						<label for="textInput">Nombre del trabajador</label>
						<input type="text" name="nombre" id="textInput" class="form-control mb-4" placeholder="Ingrese nombre"    required  value="<?php echo $alm->NOMBRE; ?>">
					</div>
					<div class="form-group">
						<label for="textInput">apellido del trabajador</label>
						<input type="text" name="apellido" id="textInput" class="form-control mb-4" placeholder="Ingrese apellido"    required value="<?php echo $alm->APELLIDO; ?>">
					</div>
					<div class="form-group">
						<label for="textInput">telefono del trabajador</label>
						<input type="number" name="telefono" id="textInput" class="form-control mb-4" placeholder="Ingrese telefono"    required  value="<?php echo $alm->TELEFONO; ?>">
					</div>
				</div>
				<!-- /.box-body -->

				<div class="box-footer">
					<button type="submit" class="btn btn-primary"  onclick="showAlert()">actualizar trabajador</button>
				</div>
			</form>
		</div>
		
		<div class="box">
			<div class="box-header">
				<h3 class="box-title">Tabla de todos los trabajadores</h3>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>ID</th>
							<th>Nombre</th>	
							<th>Apellido</th>
							<th>Telefono</th>
							<th>editar</th>
							<th>eliminar</th>						
						</tr>
					</thead>
					<tbody>
						<?php foreach($this->model->Listar() as $r): ?>
						<tr>
							<td><?php echo $r->IDTRABAJADOR; ?></td>
							<td><?php echo $r->NOMBRE; ?></td>	
							<td><?php echo $r->APELLIDO; ?></td>	
							<td><?php echo $r->TELEFONO; ?></td>							
							<td> <a href="?c=Trabajador&a=Editar&ID=<?php echo $r->IDTRABAJADOR; ?>">Editar</a></td>
							<td><a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=Trabajador&a=Eliminar&id=<?php echo $r->IDTRABAJADOR; ?>">Eliminar</a></td>
						</tr>
						<?php endforeach; ?>
					</tbody>
					<tfoot>
						<tr>
							<th>ID</th>
							<th>Nombre</th>
							<th>Apellido</th>
							<th>Telefono</th>							
							<th>editar</th>
							<th>eliminar</th>
						</tr>
					</tfoot>
				</table>
			</div>

			
			<!-- /.box-body -->
		</div>

	</section>
	<!-- /.content -->

</div>
<!-- /.content-wrapper -->
