<?php
class UsuarioE{

        private	$idrol;
        private	$descripcion;
        private $fechaalta;
        private $fechavigencia;
        private $estado;
	
	function __construct($a, $b, $c, $d,$e){
		$this->idrol=$a;
		$this->descripcion=$b;
                $this->fechaalta=$c;
		$this->fechavigencia=$d; 
                $this->estado=$e;
		
	}
    //get es para retornar	
	
	function getidrol() {return $this->idrol;}
        function getdescripcion() {return $this->descripcion;}
	function getfechaalta() {return $this->fechaalta;}
	function getfechavigencia() {return $this->fechavigencia;}
        function getestado() {return $this->estado;}
	
	//set es para modificar el valor almacenado	
	function setidrol($val) {$this->idrol=$val;}
	function setdescripcion($val) {$this->descripcion=$val;}
        function setfechaalta($val) {$this->fechaalta=$val;}
	function setfechavigencia($val) {$this->fechavigencia=$val;}
	function setestado($val) {$this->estado=$val;}
        
        }

?>