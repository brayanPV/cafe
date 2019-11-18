<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800">Registre una Control de Calidad</h1>

	<div class="row">
		<div class="col-lg-12">
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary">Formulario Registro Control calidad</h6>
				</div>
				<form role="form" id="frm-cultivo" action="?c=ControlCalidad&a=Guardar" method="post" enctype="multipart/form-data">
				<input type="hidden" name="ID" value="<?php echo $alm->ID; ?>" />
					<div class="card-body">

						<div class="form-group">
							<label>Nombre del control de calidad</label>
							<input class="form-control" type="text" placeholder="ingrese el nombre del control de calidad" name="nombre">
						</div>
						<div class="form-group">
							<label>Seleccione el Tipo de control de calidad</label>
							<select name="tipo" id="" class="form-control">
								<?php foreach($this->model->Listar1() as $r): ?>
								<option value="<?php echo $r->IDTIPOC; ?>"><?php echo $r->IDTIPOC; ?> ||<?php echo $r->TIPO; ?></option>
								<?php endforeach; ?>
							</select>
						</div>

						<div>
							<input type="hidden" name="idusuario" value="<?php echo $_SESSION['idusuario'] ?>" />
						</div>
					</div>
					<div class="card-footer">
						<button type="submit" class="btn btn-primary" onclick="showAlert()">Crear control de calidad</button>
					</div>


				</form>
			</div>
		</div>
	</div>


</div>
<!-- /.container-fluid -->
