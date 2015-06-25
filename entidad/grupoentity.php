<?php
class UsuarioE{

        private	$idgrupo;
        private	$nivel;
        private $grado;
        private $seccion;
        private $fecharegistro;
        private $estado;
	
	function __construct($a, $b, $c, $d,$e,$f){
		$this->idgrupo=$a;
		$this->nivel=$b;
                $this->grado=$c;
		$this->seccion=$d; 
                $this->fecharegistro=$e;
                $this->estado=$f;
		
	}
    //get es para retornar	
	
	function getidgrupo() {return $this->idgrupo;}
        function getnivel() {return $this->nivel;}
	function getgrado() {return $this->grado;}
	function getseccion() {return $this->seccion;}
        function getfecharegistro() {return $this->fecharegistro;}
        function getestado() {return $this->estado;}
	
	//set es para modificar el valor almacenado	
	function setidgrupo($val) {$this->idgrupo=$val;}
	function setnivel($val) {$this->nivel=$val;}
        function setgrado($val) {$this->grado=$val;}
        function setseccion($val) {$this->seccion=$val;}
	function setfecharegistro($val) {$this->fecharegistro=$val;}
	function setestado($val) {$this->estado=$val;}
        
        }

?>