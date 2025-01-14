</div>
<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
	<div class="container my-auto">
		<div class="copyright text-center my-auto">
			<span>Copyright &copy; Company Apex</span>
		</div>
	</div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
	<i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
			<div class="modal-footer">
				<form action="validarLogin.php" method="post">
					<input type="hidden" name="action" value="logout" />
					<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
					<button class="btn btn-primary" type="submit">Logout</button>
				</form>
			</div>
		</div>
	</div>
</div>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#botModal" style="position: fixed; bottom: 80px; right: 20px">
	Necesitas Ayuda?
</button>

<!-- bot Modal-->
<div class="modal fade" id="botModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Chatea con el bot de soporte</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">
				<iframe allow="microphone;" width="100%" height="430" src="https://console.dialogflow.com/api-client/demo/embedded/2e1dab60-856e-43dd-a356-fc721b1c12bc">
				</iframe>
			</div>
			<div class="modal-footer">
				<button class="btn btn-primary" type="button" data-dismiss="modal">Cerrar</button>
			</div>
		</div>
	</div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="https://blackrockdigital.github.io/startbootstrap-sb-admin-2/vendor/jquery/jquery.min.js"></script>
<script src="https://blackrockdigital.github.io/startbootstrap-sb-admin-2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="https://blackrockdigital.github.io/startbootstrap-sb-admin-2/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="https://blackrockdigital.github.io/startbootstrap-sb-admin-2/js/sb-admin-2.min.js"></script>

<!-- data tables plugins -->
<script src="https://blackrockdigital.github.io/startbootstrap-sb-admin-2/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="https://blackrockdigital.github.io/startbootstrap-sb-admin-2/vendor/datatables/dataTables.bootstrap4.min.js"></script>
<!-- Page level custom scripts -->
<script src="https://blackrockdigital.github.io/startbootstrap-sb-admin-2/js/demo/datatables-demo.js"></script>

<script src="view/js/tabla.js"></script>

</body>

</html>
