<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800">Registre una Actividad al cultivo</h1>

	<div class="row">
		<div class="col-lg-12">
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary">Formulario Registro Actividades</h6>
				</div>
				<form role="form" id="frm-zona" action="?c=Cultivoact&a=Guardar" method="post" enctype="multipart/form-data">
				<input type="hidden" name="id" value="<?php echo $alm->id; ?>" />
					<div class="card-body">

						<div class="form-group">
							<label>Seleccione el cultivo</label>
							<select name="cultivo" id="" class="form-control">
								<?php foreach($this->model->Listar1() as $r): ?>
								<option value="<?php echo $r->IDCULTIVO; ?>"><?php echo $r->IDCULTIVO; ?> || <?php echo $r->NOMBRE; ?></option>
								<?php endforeach; ?>
							</select>
						</div>
						<div class="form-group">
							<label>Seleccione el Trabajador</label>
							<select name="trabajador" id="" class="form-control">
								<?php foreach($this->model->Listar2() as $r): ?>
								<option value="<?php echo $r->IDTRABAJADOR; ?>"><?php echo $r->IDTRABAJADOR; ?> || <?php echo $r->NOMBRE; ?> <?php echo $r->APELLIDO; ?></option>
								<?php endforeach; ?>
							</select>
						</div>
						<div class="form-group">
							<label>Seleccione La Actividad</label>
							<select name="actividad" id="" class="form-control">
								<?php foreach($this->model->Listar3() as $r): ?>
								<option value="<?php echo $r->IDACTIVIDAD; ?>"><?php echo $r->IDACTIVIDAD; ?> || <?php echo $r->NOMBRE; ?></option>
								<?php endforeach; ?>
							</select>
						</div>
						<div>
							<input type="hidden" name="idusuario" value="<?php echo $_SESSION['idusuario'] ?>" />
						</div>
					</div>
					<div class="card-footer">
						<button type="submit" class="btn btn-primary" onclick="showAlert()">Registrar Actividad</button>
					</div>


				</form>
			</div>
		</div>
	</div>


</div>
<!-- /.container-fluid -->
