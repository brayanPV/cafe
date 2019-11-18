<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800">Registre un analisis de suelo</h1>

	<div class="row">
		<div class="col-lg-12">
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary">Formulario Registro Analisis</h6>
				</div>
				<form role="form" id="frm-zona" action="?c=Analisis&a=Guardar" method="post" enctype="multipart/form-data">
				<input type="hidden" name="id" value="<?php echo $alm->id; ?>" />
					<div class="card-body">

						<div class="form-group">
							<label>Nombre del cultivo</label>
							<select name="idcultivo" id="" class="form-control" name="idcultivo">
								<?php foreach($this->model->Listar1() as $r): ?>
								<option value="<?php echo $r->IDCULTIVO; ?>"><?php echo $r->IDCULTIVO; ?> ||<?php echo $r->NOMBRE; ?></option>
								<?php endforeach; ?>
							</select>
						</div>
						<div class="form-row">
							<div class="col">
								<label>Potasio</label>
								<input class="form-control" type="number" placeholder="ingrese porcentaje" min="0" max="100" name="propiedad1">
							</div>
							<div class="col">
								<label>Nitrogeno</label>
								<input class="form-control" type="number" placeholder="ingrese porcentaje" min="0" max="100" name="propiedad2">
							</div>
							<div class="col">
								<label>Fosforo</label>
								<input class="form-control" type="number" placeholder="ingrese porcentaje" min="0" max="100" name="propiedad3">
							</div>
							<div class="col">
								<label>PH</label>
								<input class="form-control" type="number" placeholder="ingrese porcentaje" min="0" max="100" name="propiedad4">
							</div>
						</div>
						<div>
							 <input type="hidden" name="idusuario" value="<?php echo $_SESSION['idusuario'] ?>" />
						</div>
					</div>
					<div class="card-footer">
						<button type="submit" class="btn btn-primary" onclick="showAlert()">Registrar Analisis</button>
					</div>


				</form>
			</div>
		</div>
	</div>


</div>
<!-- /.container-fluid -->
