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
				<h3 class="box-title">Editar Plaga</h3>
			</div>
			<form role="form" id="frm-zona" action="?c=Zona&a=Guardar" method="post" enctype="multipart/form-data">
				<input type="hidden" name="id" value="<?php echo $alm->id; ?>" />
				<div class="box-body">
					<div class="form-group">
						<label for="textInput">Nombre de la plaga</label>
						<input type="text" name="nombre" id="textInput" class="form-control mb-4" placeholder="Ingrese nombre"    required>
					</div>
					<div class="form-group">
                  <label>Slelccione el tipo</label>
                  <select class="form-control">
                    <option>option 1</option>
                    <option>option 2</option>
                    <option>option 3</option>
                    <option>option 4</option>
                    <option>option 5</option>
                  </select>
                </div>
					<div class="form-group">
						<label for="textInput">descripcion</label>
						<input type="text" id="textInput" class="form-control mb-4" placeholder="Ingrese descripcion" required  name="descripcion" >
					</div>
				</div>
				<!-- /.box-body -->

				<div class="box-footer">
					<button type="submit" class="btn btn-primary"  onclick="showAlert()">editar plaga</button>
				</div>
			</form>
		</div>
		
		<div class="box">
			<div class="box-header">
				<h3 class="box-title">Tabla de todas las plagas creadas</h3>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>ID</th>
							<th>Nombre</th>
							<th>tipo</th>
							<th>descripcion</th>							
							<th>editar</th>
							<th>eliminar</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($this->model->Listar() as $r): ?>
						<tr>
							<td><?php echo $r->ID; ?></td>
							<td><?php echo $r->nombre; ?></td>
							<td><?php echo $r->tipo; ?></td>
							<td><?php echo $r->descripcion; ?></td>
							<td> <a href="?c=Zona&a=Editar&ID=<?php echo $r->ID; ?>">Editar</a></td>
							<td><a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=zona&a=Eliminar&id=<?php echo $r->id; ?>">Eliminar</a></td>
						</tr>
						<?php endforeach; ?>
					</tbody>
					<tfoot>
						<tr>
							<th>ID</th>
							<th>Nombre</th>
							<th>tipo</th>
							<th>descripcion</th>							
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
