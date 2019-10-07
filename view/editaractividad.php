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
				<h3 class="box-title">Editar Actividad</h3>
			</div>
			<form role="form" id="frm-zona" action="?c=Actividad&a=Guardar" method="post" enctype="multipart/form-data">
				<input type="hidden" name="ID" value="<?php echo $alm->IDACTIVIDAD; ?>" />
				<div class="box-body">
					<div class="form-group">
						<label for="textInput">Nombre de la activiadad</label>
						<input type="text" name="nombre" id="textInput" class="form-control mb-4" value="<?php echo $alm->NOMBRE; ?>" placeholder="Ingrese nombre" required>
					</div>
				</div>

				<div class="box-footer">
					<button type="submit" class="btn btn-primary" onclick="showAlert()">Actualizar</button>
				</div>
			</form>
		</div>
		
		<div class="box">
			<div class="box-header">
				<h3 class="box-title">Tabla de todas las actividades creadas</h3>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>ID</th>
							<th>Nombre</th>
													
							<th>editar</th>
							<th>eliminar</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($this->model->Listar() as $r): ?>
						<tr>
							<td><?php echo $r->IDACTIVIDAD; ?></td>
							<td><?php echo $r->NOMBRE; ?></td>
				            <a href="?c=Actividad&a=Editar&ID=<?php echo $r->IDACTIVIDAD; ?>">Editar</a></td>
							<td><a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=Actividad&a=Eliminar&id=<?php echo $r->IDACTIVIDAD; ?>">Eliminar</a></td>
						</tr>
						<?php endforeach; ?>
					</tbody>
					<tfoot>
						<tr>
							<th>ID</th>
							<th>Nombre</th>
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
