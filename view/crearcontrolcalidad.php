  
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Cafe
			<small>Registrar control de calidad</small>
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
		<div class="box box-primary">
			<div class="box-header with-border">
				<h3 class="box-title">Crear Control de Calidad</h3>
			</div>
			<!-- /.box-header -->
			<!-- form start -->
			<form role="form" id="frm-cultivo" action="?c=ControlCalidad&a=Guardar" method="post" enctype="multipart/form-data">
				<input type="hidden" name="ID" value="<?php echo $alm->ID; ?>" />
				<div class="box-body">
					<div class="form-group">
						<label for="textInput">Nombre del Control de calidad</label>
						<input type="text" name="nombre" id="textInput" class="form-control mb-4" placeholder="Ingrese nombre"    required>
					</div>
					<div class="form-group">
                  <label>Slelccione el tipo de control de calidad</label>
                  <select class="form-control" name="tipo">
                   <?php foreach($this->model->Listar1() as $r): ?>
					  <option value="<?php echo $r->IDTIPOC; ?>"><?php echo $r->IDTIPOC; ?> ||<?php echo $r->TIPO; ?></option>
                    <?php endforeach; ?>
                    
                  </select>
                </div>
                <div>
						    <input type="hidden" name="idusuario" value="<?php echo $_SESSION['idusuario'] ?>" />
						</div>
				</div>
				<!-- /.box-body -->

				<div class="box-footer">
					<button type="submit" class="btn btn-primary"  onclick="showAlert()">Crear control de calidad</button>
				</div>
			</form>
		</div>

	</section>
	<!-- /.content -->

</div>


<!-- /.content-wrapper -->