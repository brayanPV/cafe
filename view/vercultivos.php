<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Cafe
			<small>Mostrar Cultivos</small>
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
				<h3 class="box-title">Tabla de todos los cultivos</h3>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>ID Cultivo</th>
							<th>Nombre</th>
							<th>Area</th>
							<th>fecha</th>
							<th>editar</th>
							
						</tr>
					</thead>
					<tbody>
						<?php foreach($this->model->Listar() as $r): ?>
						<tr>
							<td><?php echo $r->IDCULTIVO; ?></td>
							<td><?php echo $r->NOMBRE; ?></td>
							<td><?php echo $r->AREA; ?></td>
							<td><?php echo $r->FECHA; ?></td>
							<td> <a href="?c=Cultivo&a=Editar&ID=<?php echo $r->IDCULTIVO; ?>">Editar</a></td>
							
						</tr>
						<?php endforeach; ?>
					</tbody>
					<tfoot>
						<tr>
							<th>ID Cultivo</th>
							<th>Nombre</th>
							<th>Area</th>
							<th>fecha</th>
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
