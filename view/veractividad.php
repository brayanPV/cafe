<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Cafe
			<small>Mostrar Actividades</small>
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
				<h3 class="box-title">Tabla de todos las Actividades realizadas</h3>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
				<table id="example1" class="table table-bordered table-striped">
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
				</table>
			</div>

			
			<!-- /.box-body -->
		</div>

	</section>
	<!-- /.content -->

</div>
<!-- /.content-wrapper -->
