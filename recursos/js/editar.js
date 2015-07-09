$(document).ready(function(){

		$(document).off('click','.btn-editar');
        $(document).on('click','.btn-editar',function(event){
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
        $(document).off('click','.btn-e-cad');
        $(document).on('click','.btn-e-cad',function(event){
        
		var id_cad = $(this).attr('data-idcad');
		$.post('../negocio/editarcad.php',{id_cad:id_cad},function(result){
			$('.body-cad').html(result);
		});
		$('#Modalecad').modal('show');
	});
        $(document).off('click','.btn-darbaja');
        $(document).on('click','.btn-darbaja',function(event){
        
		var id_usuario = $(this).attr('data-idb');
		$.post('../negocio/editarusuario.php',{id_usuario:id_usuario},function(result){
			$('.body-darbaja').html(result);
		});
		$('#Modaldarbaja').modal('show');
	});
        $('#formasistencia').off('click','.btn-asistencia');
        $('#formasistencia').on('click','.btn-asistencia',function(event){
        event.preventDefault();
        var idc=$(this).attr('data-idcadas');
        var idg=$(this).attr('data-idgruas');

		$.post('../negocio/editarasistencia.php',{idg:idg,idc:idc},function(result){
			$('#formulario-ver').html(result);
		});
	});
        
        $(document).off('click','.btn-a,.btn-f,.btn-j');
        $(document).on('click','.btn-a,.btn-f,.btn-j',function(event){
        event.preventDefault();
        var idc=$(this).attr('data-idcadasi');
        var idm=$(this).attr('data-idmatasi');
        var fec= $('input[name=fecha]').val();
        var est=$(this).attr('data-idestasi');
        var obs=$('input[name=observacion]').val();
        if (fec=='') {alert('Seleccionar Fecha de la Asistencia');}else{
        $.post('../negocio/regasistencia.php',{idc:idc,idm:idm,fec:fec,est:est,obs:obs},function(result){
				alert('Se Registro Correctamente');
		});}
		
		
	});

        $(document).off('click','.btn-e-dasistencia');
        $(document).on('click','.btn-e-dasistencia',function(event){
        
		var id_asistencia = $(this).attr('data-id');
		$.post('../negocio/editardasistencia.php',{id_asistencia:id_asistencia},function(result){
			$('.body-dasistencia').html(result);
		});
		$('#Modaleasistencia').modal('show');
	});
        $(document).off('click','.btn-e-dirasistencia');
        $(document).on('click','.btn-e-dirasistencia',function(event){
        
		var id_asistencia = $(this).attr('data-id');
		$.post('../negocio/editardirasistencia.php',{id_asistencia:id_asistencia},function(result){
			$('.body-dirasistencia').html(result);
		});
		$('#Modaldirasistencia').modal('show');
	});
        
});
