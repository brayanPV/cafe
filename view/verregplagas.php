<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Cafe
			<small>Mostrar registro plagas</small>
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
				<h3 class="box-title">Tabla de todos los registros de plagas</h3>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>ID</th>
							<th>Cultivo</th>
							<th>Plaga</th>
							<th>tipo</th>
							<th>Descripcion</th>
							<th>fecha</th>
							<th>editar</th>
							<th>eliminar</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($this->model->Listar() as $r): ?>
						<tr>
							<td><?php echo $r->ID; ?></td>
							<td><?php echo $r->cultivo; ?></td>
							<td><?php echo $r->plaga; ?></td>
							<td><?php echo $r->tipo; ?></td>
							<td><?php echo $r->descripcion; ?></td>
							<td><?php echo $r->fecha; ?></td>
							<td> <a href="?c=Suelo&a=Editar&ID=<?php echo $r->ID; ?>">Editar</a></td>
							<td><a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=zona&a=Eliminar&id=<?php echo $r->id; ?>">Eliminar</a></td>
						</tr>
						<?php endforeach; ?>
					</tbody>
					<tfoot>
						<tr>
							<th>ID</th>
							<th>Cultivo</th>
							<th>Plaga</th>
							<th>tipo</th>
							<th>Descripcion</th>
							<th>fecha</th>
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
