<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Cafe
			<small>Mostrar Control de calidad</small>
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
		<div class="box">
			<div class="box-header">
				<h3 class="box-title">Tabla de todos los controles de calidad</h3>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>ID CONTROL CALIDAD</th>
							<th>Nombre</th>
							<th>Tipo</th>
							
							<th>editar</th>
							
						</tr>
					</thead>
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
					<tfoot>
						<tr>
							<th>ID CONTROL CALIDAD</th>
							<th>Nombre</th>
							<th>Tipo</th>
							
							<th>editar</th>
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
