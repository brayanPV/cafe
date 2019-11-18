<?php
if(!isset($_SESSION))
{
session_start();
}  ?>
<!-- Begin Page Content -->
				<div class="container-fluid">

					<!-- Page Heading -->
					<h1 class="h3 mb-4 text-gray-800">Crear Cultivos</h1>

					<div class="row">
						<div class="col-lg-12">
							<div class="card shadow mb-4">
								<div class="card-header py-3">
									<h6 class="m-0 font-weight-bold text-primary">Formulario Registro Cultivo</h6>
								</div>
								<form role="form" id="frm-cultivo" action="?c=Cultivo&a=Guardar" method="post" enctype="multipart/form-data">
								<input type="hidden" name="id" value="<?php echo $alm->id; ?>" />
									<div class="card-body">

										<div class="form-group">
											<label>Nombre del cultivo</label>
											<input class="form-control" type="text" placeholder="ingrese el nombre del cultivo" name="nombre" required>
										</div>
										<div class="form-group">
											<label>Area del cultivo</label>
											<input class="form-control" type="number" placeholder="ingrese area del cultivo" min="0" max="1000" name="area" required>
										</div>
										<div>
						<input type="hidden" name="idusuario" value ="<?php echo $_SESSION['idusuario'] ?>">
					</div>
									</div>
									<div class="card-footer">
										<button type="submit" class="btn btn-primary" onclick="showAlert()">Crear Cultivo</button></div>


								</form>
							</div>
						</div>
					</div>


				</div>
				<!-- /.container-fluid -->