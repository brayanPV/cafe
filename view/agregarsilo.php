<!-- Begin Page Content -->
				<div class="container-fluid">

					<!-- Page Heading -->
					<h1 class="h3 mb-4 text-gray-800">Crear</h1>

					<div class="row">
						<div class="col-lg-12">
							<div class="card shadow mb-4">
								<div class="card-header py-3">
									<h6 class="m-0 font-weight-bold text-primary">Formulario Registro</h6>
								</div>
								<form role="form" id="" action="" method="post" enctype="multipart/form-data">
								<input type="hidden" name="id" value="<?php echo $alm->id; ?>" />
									<div class="card-body">

										<div class="form-group">
											<label>Cantidad</label>
											<input class="form-control" type="number" placeholder="ingrese la cantidad" name="cantidad" required>
										</div>
										<div class="form-group">
											<label>Seleccionar Cultivo Cosechado</label>
											<select class="form-control" name="">
											<option value=""> opcion 1 </option>
											<option value=""> opcion 2 </option>
											<option value=""> opcion 3 </option>
											</select>
										</div>
										<div class="form-group">
											<label>Seleccionar Trabajador</label>
											<select class="form-control" name="">
											<option value=""> opcion 1 </option>
											<option value=""> opcion 2 </option>
											<option value=""> opcion 3 </option>
											</select>
										</div>									
										<div>
						<input type="hidden" name="idusuario" value ="<?php echo $_SESSION['idusuario'] ?>">
					</div>
									</div>
									<div class="card-footer">
										<button type="submit" class="btn btn-primary" onclick="showAlert()">Crear</button></div>


								</form>
							</div>
						</div>
					</div>


				</div>
				<!-- /.container-fluid -->