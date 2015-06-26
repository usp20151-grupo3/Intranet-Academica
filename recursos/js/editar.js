$(document).ready(function(){

	$('.btn-editar').click(function(e) {
		var id_persona = $(this).attr('data-id');
		$.post('../negocio/editarpersona.php',{id_persona:id_persona},function(result){
			$('.body-persona').html(result);
		});
		$('#Modalepersona').modal('show');
	});	
        
        $(document).off('click','.btn-e-curso');
        $(document).on('click','.btn-e-curso',function(event){
        
		var id_curso = $(this).attr('data-id');
		$.post('../negocio/editarcurso.php',{id_curso:id_curso},function(result){
			$('.body-curso').html(result);
		});
		$('#Modalecurso').modal('show');
	});
        $(document).off('click','.btn-e-rol');
        $(document).on('click','.btn-e-rol',function(event){
       
            
		var id_rol = $(this).attr('data-id');
		$.post('../negocio/editarrol.php',{id_rol:id_rol},function(result){
			$('.body-rol').html(result);
		});
		$('#Modalerol').modal('show');
	});
        $(document).off('click','.btn-e-docente');
        $(document).on('click','.btn-e-docente',function(event){
        
		var id_trabajador = $(this).attr('data-id');
		var id_idpersona = $(this).attr('data-idpersona');

		$.post('../negocio/editartrabajador.php',{id_trabajador:id_trabajador,id_idpersona:id_idpersona},function(result){
			$('.body-docente').html(result);
		});
		$('#Modaledocente').modal('show');
	});
        $(document).off('click','.btn-e-alumno');
        $(document).on('click','.btn-e-alumno',function(event){
        
		var id_alumno = $(this).attr('data-id');
		var id_idpersona = $(this).attr('data-idpersona');

		$.post('../negocio/editaralumno.php',{id_alumno:id_alumno,id_idpersona:id_idpersona},function(result){
			$('.body-alumno').html(result);
		});
		$('#Modalealumno').modal('show');
	});
        $(document).off('click','.btn-e-grupo');
        $(document).on('click','.btn-e-grupo',function(event){
        
		var id_grupo = $(this).attr('data-id');
		$.post('../negocio/editargrupo.php',{id_grupo:id_grupo},function(result){
			$('.body-grupo').html(result);
		});
		$('#Modalegrupo').modal('show');
	});
                $(document).off('click','.btn-e-mat');
        $(document).on('click','.btn-e-mat',function(event){
        
		var id_matricula = $(this).attr('data-id');
		$.post('../negocio/editarmatricula.php',{id_matricula:id_matricula},function(result){
			$('.body-matricula').html(result);
		});
		$('#Modalematricula').modal('show');
	});
});
