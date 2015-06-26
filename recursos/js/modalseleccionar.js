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
	$(document).on('click','.btn-m-alumno',function(event){
		event.preventDefault();
		var id_alumno = $(this).attr('data-id');
		var nombre_alumno = $(this).attr('data-alumno');
		document.getElementById('idmalumno').value =id_alumno;
		document.getElementById('mnombre').value =nombre_alumno;
		$('#Modalbuscaralumno').modal('hide');
	});
		$(document).on('click','.btn-m-apoderado',function(event){
		event.preventDefault();
		var id_apoderado = $(this).attr('data-idapoderado');
		var nombre_apoderado = $(this).attr('data-apoderado');
		document.getElementById('idmpersona').value =id_apoderado;
		document.getElementById('mapoderado').value =nombre_apoderado;
		$('#Modalbuscarapoderado').modal('hide');
	});
		$(document).on('click','.btn-m-grupo',function(event){
		event.preventDefault();
		var id_grupo = $(this).attr('data-idmgrupo');
		var nombre_grupo = $(this).attr('data-mgrupo');
		document.getElementById('idmgrupo').value =id_grupo;
		document.getElementById('mgrupo').value =nombre_grupo;
		$('#Modalbuscargrupo').modal('hide');
	});
		$(document).on('click','.btn-modal-close',function(event){

		$('#Modalseldocente').modal('hide');
	});	
		$(document).on('click','.btn-modal-close-al',function(event){

		$('#Modalselealumno').modal('hide');
	});	
				$(document).on('click','.btn-modal-close-alu',function(event){

		$('#Modalselealumno').modal('hide');
	});	
		$(document).on('click','.btn-modal-close-apo',function(event){

		$('#Modalselapoderado').modal('hide');
	});	
		$(document).on('click','.btn-modal-close-gru',function(event){

		$('#Modalselgrupo').modal('hide');
	});	
		$(document).on('click','.matriculaalumno',function(event){
		event.preventDefault();
		var id_alumno = $(this).attr('data-idalumno');
		var nombre_alumno = $(this).attr('data-nombrealumno');
		document.getElementById('id_alumno_sel').value =id_alumno;
		document.getElementById('nselalumno').value =nombre_alumno;
		$('#Modalselealumno').modal('hide');
	});
		$(document).on('click','.matriculaapoderado',function(event){
		event.preventDefault();
		var id_apoderado = $(this).attr('data-idselapoderado');
		var nombre_apoderado = $(this).attr('data-selapoderado');
		document.getElementById('id_persona_sel').value =id_apoderado;
		document.getElementById('mselpersona').value =nombre_apoderado;
		$('#Modalselapoderado').modal('hide');
	});
		$(document).on('click','.matriculagrupo',function(event){
		event.preventDefault();
		var id_grupo = $(this).attr('data-idmatriculagrupo');
		var nombre_grupo = $(this).attr('data-matriculagrupo');
		document.getElementById('id_grupo_sel').value =id_grupo;
		document.getElementById('nselgrupo').value =nombre_grupo;
		$('#Modalselgrupo').modal('hide');
	});
});