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

		<div class="box box-primary">
			<div class="box-header with-border">
				<h3 class="box-title">Crear Control de Calidad</h3>
			</div>
			<!-- /.box-header -->
			<!-- form start -->
			<form role="form" id="frm-cultivo" action="?c=ControlCalidad&a=Guardar" method="post" enctype="multipart/form-data">
				<input type="hidden" name="ID" value="<?php echo $alm->IDCONTROLCALIDAD; ?>" />
				<div class="box-body">
					<div class="form-group">
						<label for="textInput">Nombre del Control de calidad</label>
						<input type="text" name="nombre" id="textInput" class="form-control mb-4" placeholder="Ingrese nombre"    required value="<?php echo $alm->NOMBRE; ?>">
					</div>
					<div class="form-group">
                  <label>Slelccione el tipo de control de calidad</label>
                  <select class="form-control" name="tipo">
                   <?php foreach($this->model->Listar1() as $r): ?>
					  <option value="<?php echo $r->IDTIPOC; ?>"><?php echo $r->IDTIPOC; ?> ||<?php echo $r->TIPO; ?></option>
                    <?php endforeach; ?>
                    
                  </select>
                </div>
				</div>
				<!-- /.box-body -->

				<div class="box-footer">
					<button type="submit" class="btn btn-primary"  onclick="showAlert()">Actualizar</button>
				</div>
			</form>
		</div>
		<div class="box">
			<div class="box-header">
				<h3 class="box-title">Tabla de todos los controles de calidad</h3>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>ID Control calidad</th>
							<th>Nombre</th>
							<th>Tipo</th>
							
							<th>editar</th>
							<th>eliminar</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($this->model->Listar() as $r): ?>
						<tr>
							<td><?php echo $r->IDCONTROLCALIDAD; ?></td>
							<td><?php echo $r->NOMBRE; ?></td>
							<td><?php echo $r->TIPO; ?></td>
							<td> <a href="?c=ControlCalidad&a=Editar&ID=<?php echo $r->IDCONTROLCALIDAD; ?>">Editar</a></td>
							<td><a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=ControlCalidad&a=Eliminar&id=<?php echo $r->IDCONTROLCALIDAD; ?>">Eliminar</a></td>
						</tr>
						<?php endforeach; ?>
					</tbody>
					<tfoot>
						<tr>
							<th>ID CONTROL CALIDAD</th>
							<th>Nombre</th>
							<th>tipo</th>
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
