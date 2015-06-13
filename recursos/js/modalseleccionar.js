$(document).ready(function(e) {	
	$('.btn-persona').click(function(e) {
		var id_persona = $(this).attr('data-id');
		var nombre_persona = $(this).attr('data-persona');
		document.getElementById('idpersona').value =id_persona;
		document.getElementById('persona').value =nombre_persona;
		$('#Modaldir').modal('hide');
	});	


	$('.btn-alumno').click(function(e) {
		var id_persona = $(this).attr('data-id');
		var nombre_persona = $(this).attr('data-persona');
		document.getElementById('idalumno').value =id_persona;
		document.getElementById('alumno').value =nombre_persona;
		$('#Modalalumno').modal('hide');
	});	
	
	$('.btn-docente').click(function(e) {
		var id_persona = $(this).attr('data-id');
		var nombre_persona = $(this).attr('data-persona');
		document.getElementById('iddocente').value =id_persona;
		document.getElementById('docente').value =nombre_persona;
		$('#Modaldocente').modal('hide');
	});	
});