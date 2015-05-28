$(document).ready(function(e) {	
	$('#btnCerrarSesion').click(function(e) {
		$.post('../conexion/logout.php', {	},
		function() { window.location='../index.php'; });		
	});	
});