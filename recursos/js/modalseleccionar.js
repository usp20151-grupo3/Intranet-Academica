$(document).ready(function(e) {	
	$('.btn-persona').click(function(e) {
		var id_persona = $(this).attr('data-id');
		var nombre_persona = $(this).attr('data-persona');
		document.getElementById('idpersona').value =id_persona;
		document.getElementById('persona').value =nombre_persona;
		$('#Modalper').modal('hide');
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

	$(document).on('click','.docente',function(event){
		event.preventDefault();
		var id_persona = $(this).attr('data-id');
		var nombre_persona = $(this).attr('data-persona');
		document.getElementById('idpdocente').value =id_persona;
		document.getElementById('ndocente').value =nombre_persona;
		$('#Modalseldocente').modal('hide');
	});
	$(document).on('click','.alumno',function(event){
		event.preventDefault();
		var id_persona = $(this).attr('data-id');
		var nombre_persona = $(this).attr('data-persona');
		document.getElementById('idpalumno').value =id_persona;
		document.getElementById('nalumno').value =nombre_persona;
		$('#Modalselalumno').modal('hide');
	});
		$(document).on('click','.btn-modal-close',function(event){

		$('#Modalseldocente').modal('hide');
	});	
		$(document).on('click','.btn-modal-close-al',function(event){

		$('#Modalselalumno').modal('hide');
	});	
});