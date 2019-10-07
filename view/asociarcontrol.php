<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Cafe
			<small>Registre una actividad al cultivo</small>
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
				<h3 class="box-title">Registrar control calidad a cultivo</h3>
			</div>
			<!-- /.box-header -->
			<!-- form start -->
			<form role="form" id="frm-zona" action="?c=CultivoControl&a=Guardar" method="post" enctype="multipart/form-data">
				<input type="hidden" name="ID" value="<?php echo $alm->id; ?>" />
				
				<div class="box-body">
				<div class="form-group">
                  <label>Slelccione el cultivo</label>
                  <select class="form-control" name="cultivo">
                   <?php foreach($this->model->Listar1() as $r): ?>
                    <option value="<?php echo $r->IDCULTIVO; ?>"><?php echo $r->IDCULTIVO; ?> || <?php echo $r->NOMBRE; ?></option>
                    <?php endforeach; ?>                    
                  </select>
                </div>
                <div class="form-group">
                	<label>Seleccione control</label>
                	<select class="form-control" name="control">
                		<?php foreach($this->model->Listar2() as $r): ?>
						<option value="<?php echo $r->IDCONTROLCALIDAD; ?>"><?php echo $r->IDCONTROLCALIDAD; ?> || <?php echo $r->NOMBRE; ?></option>
               			<?php endforeach; ?> 
                	</select>
                </div>
                
                <div class="form-group">
                	<label>Seleccione el trabajador</label>
                	<select class="form-control" name="trabajador">
                		<?php foreach($this->model->Listar3() as $r): ?>
						<option value="<?php echo $r->IDTRABAJADOR; ?>"><?php echo $r->IDTRABAJADOR; ?> || <?php echo $r->NOMBRE; ?></option>
               			<?php endforeach; ?> 
                	</select>
                </div>
					
					
				</div>
				<!-- /.box-body -->

				<div class="box-footer">
					<button type="submit" class="btn btn-primary"  onclick="showAlert()">Registrar Control</button>
				</div>
			</form>
		</div>

	</section>
	<!-- /.content -->

</div>


<!-- /.content-wrapper -->
