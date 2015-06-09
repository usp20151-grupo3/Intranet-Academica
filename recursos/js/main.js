$(function(){
    $(document).ready(function(){
   
        $(document).off("click",".enlaces");
        $(document).on("click",".enlaces",function(){
            var ruta = $(this).attr("data-ruta");
            var evento = "vista";
            $.post('../negocio/listar'+ruta+'.php',{evento:evento},function(result){
                 $('.contenedor-general').html(result);
            });            
        });
        
        $(document).off("click","#btnPerfil");
        $(document).on("click","#btnPerfil",function(){
            var evento = 'vista';
            $.post('../negocio/listarperfil.php',{evento:evento},function(result){
                 $('.contenedor-general').html(result);
            });     
            
        });        
        
        $(document).off("click","#div3");
        $(document).on("click","#div3",function(){
            var evento = 'vista';
            $.post('../negocio/registrarpersona.php',{evento:evento},function(result){
                 $('.contenedor-general').html(result);
            });     
            
        });
        
    });
});
