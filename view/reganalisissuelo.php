<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Cafe
			<small>Registre Un nuevo analisis de suelo</small>
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
				<h3 class="box-title">Registrar Analisis de Suelo</h3>
			</div>
			<!-- /.box-header -->
			<!-- form start -->
			<form role="form" id="frm-zona" action="?c=Analisis&a=Guardar" method="post" enctype="multipart/form-data">
				<input type="hidden" name="id" value="<?php echo $alm->id; ?>" />
				
				<div class="box-body">
				<div class="form-group">
                  <label>Slelccione el cultivo</label>
                  <select class="form-control" name="idcultivo">
                   <?php foreach($this->model->Listar1() as $r): ?>
					  <option value="<?php echo $r->IDCULTIVO; ?>"><?php echo $r->IDCULTIVO; ?> ||<?php echo $r->NOMBRE; ?></option>
                    <?php endforeach; ?>
                    
                  </select>
                </div>
					<div class="row">
					<div class="col-xs-3">
						<label for="textInput">Potasio</label>
						<input type="number" name="propiedad1" id="textInput" class="form-control mb-4" placeholder="Ingrese propiedad 1 %"   required min="1" max="100" required>
				</div>
				<div class="col-xs-3">
					<label for="textInput">Nitrogeno</label>
						<input type="number" name="propiedad2" id="textInput" class="form-control mb-4" placeholder="Ingrese propiedad 2 %"   required min="1" max="100" required>
				</div>
				<div class="col-xs-3">
							<label for="textInput">Fosforo</label>
							<input type="number" name="propiedad3" id="textInput" class="form-control mb-4" placeholder="Ingrese propiedad 3 %"   required min="1" max="100" required>						
						</div>
						<div class="col-xs-3">
							<label for="textInput">PH</label>
							<input type="number" name="propiedad4" id="textInput" class="form-control mb-4" placeholder="Ingrese propiedad 4 %"   required min="1" max="100" required>
						</div>
					</div>
					
					
				</div>
				<!-- /.box-body -->

				<div class="box-footer">
					<button type="submit" class="btn btn-primary"  onclick="showAlert()">Registrar Analisis de suelo</button>
				</div>
			</form>
		</div>

	</section>
	<!-- /.content -->

</div>


<!-- /.content-wrapper -->
