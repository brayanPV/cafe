/*
$(document).ready(function () {
	$('#dtBasicExample').DataTable();
	$('.dataTables_length').addClass('bs-select');
});*/

$(document).ready(function () {
	$('#example1').DataTable({
		responsive: true,
		"language": {
			"search": "Buscar registros",
			"lengthMenu": "Mostrar _MENU_ registros por pagina",
			"info": "Mostrando pagina _PAGE_ de _PAGES_",
			"paginate": {
				"previous": "anterior",
				"next": "siguiente"
			}

		}
	});
	
	$('#example2').DataTable({
		responsive: true,
		"language": {
			"search": "Buscar Entradas",
			"lengthMenu": "Mostrar _MENU_ registros por pagina",
			"info": "Mostrando pagina _PAGE_ de _PAGES_",
			"paginate": {
				"previous": "anterior",
				"next": "siguiente"
			}

		}
	});
	
	
});



