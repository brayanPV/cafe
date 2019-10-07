<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Cafe
			<small>Mostrar Usaurios</small>
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
				<h3 class="box-title">Tabla de todos los usuarios</h3>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>ID</th>
							<th>Nombre</th>
							<th>Apellido</th>
							<th>Nombre usuario</th>	
							<th>Contraseña</th>
							<th>editar</th>
							<th>eliminar</th>						
						</tr>
					</thead>
					<tbody>
						<?php foreach($this->model->Listar() as $r): ?>
						<tr>
							<td><?php echo $r->IDUSUARIO; ?></td>
							<td><?php echo $r->NOMBRE; ?></td>	
							<td><?php echo $r->APELLIDO; ?></td>
							<td><?php echo $r->NOMUSUARIO; ?></td>
							<td><?php echo $r->PASSWORD; ?></td>								
							<td> <a href="?c=Usuario&a=Editar&ID=<?php echo $r->IDUSUARIO; ?>">Editar</a></td>
							<td><a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=Usuario&a=Eliminar&id=<?php echo $r->id; ?>">Eliminar</a></td>
						</tr>
						<?php endforeach; ?>
					</tbody>
					<tfoot>
						<tr>
							<th>ID</th>
							<th>Nombre</th>
							<th>Apellido</th>
							<th>Nombre usuario</th>	
							<th>Contraseña</th>
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
