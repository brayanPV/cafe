$(document).ready(function () {

 	$(document).on('click', '.add', function () {
 		var html = '';
 		html += '<tr>';
 		
        //mi mierda
        //nombre
        html += '<td><input type="text" name="item_nombre[]" class="form-control item_nombre" placeholder="ingrese el nombre" /></td>';
        //precio
        html += '<td><input type="number" min="1"  name="item_precio[]" class="form-control item_precio" placeholder="ingrese el precio" /></td>';
        //cantidad
        html += '<td><input type="number" min="1" max="30" name="item_quantity[]" class="form-control item_quantity" placeholder="ingrese cantidad" /></td>';
        //proveedor
        html += '<td><select name="item_proveedor[]" class="form-control item_proveedor"><option value="">Seleccione Proveedor</option><?php echo fill_unit_select_box($connect); ?></select></td>';
        html += '<td><button type="button" name="remove" class="btn btn-danger btn-sm remove"><span class="glyphicon glyphicon-minus"></span></button></tr>';
        $('#item_table').append(html);
 	});

 	$(document).on('click', '.remove', function () {
 		$(this).closest('tr').remove();
 	});

 	$('#insert_form').on('submit', function (event) {
 		event.preventDefault();
 		var error = '';

 		$('.item_nombre').each(function () {
 			var count = 1;
 			if ($(this).val() == '') {
 				error += "<p>Enter Item Nombre at " + count + " Row</p>";
 				return false;
 			}
 			count = count + 1;
 		});
        
        $('.item_precio').each(function () {
 			var count = 1;
 			if ($(this).val() == '') {
 				error += "<p>Enter Item Precio at " + count + " Row</p>";
 				return false;
 			}
 			count = count + 1;
 		});
        
        $('.item_quantity').each(function () {
 			var count = 1;
 			if ($(this).val() == '') {
 				error += "<p>Enter Item Quantity at " + count + " Row</p>";
 				return false;
 			}
 			count = count + 1;
 		});
        
        

 		$('.item_proveedor').each(function () {
 			var count = 1;
 			if ($(this).val() == '') {
 				error += "<p>Select Proveedor at " + count + " Row</p>";
 				return false;
 			}
 			count = count + 1;
 		});
 		var form_data = $(this).serialize();
 		if (error == '') {
 			$.ajax({
 				url: "../../model/entrada.controller.php",
 				method: "POST",
 				data: form_data,
 				success: function (data) {
 					if (data == 'ok') {
 						$('#item_table').find("tr:gt(0)").remove();
 						$('#error').html('<div class="alert alert-success">Venta Registrada con Exito</div>');

 					}




 				}
 			});
 		} else {
 			$('#error').html('<div class="alert alert-danger">' + error + '</div>');
 		}
 	});

 });
