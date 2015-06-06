$(function(){
    $(document).ready(function(){
   
        $(document).off("click",".enlaces");
        $(document).on("click",".enlaces",function(){
            var ruta = $(this).attr("data-ruta");
            var evento = "vista";
            $.post('../negocio/controlador'+ruta+'.php',{evento:evento},function(result){
                 $('.contenedor-general').html(result);
            });            
        });
        
        $(document).off("click","#btnPerfil");
        $(document).on("click","#btnPerfil",function(){
            var evento = 'vista';
            $.post('../negocio/controladorperfil.php',{evento:evento},function(result){
                 $('.contenedor-general').html(result);
            });     
            
        });        
        
        
    });
});
