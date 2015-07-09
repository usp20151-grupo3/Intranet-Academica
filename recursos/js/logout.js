$(document).ready(function(e) {	
	$('#btnCerrarSesion').click(function(e) {
		$.post('../negocio/logout.php', {	},
		function() { window.location='../'; });		
	});	
});