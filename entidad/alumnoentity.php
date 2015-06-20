<?php
class UsuarioE{

        private	$idalumno;
        private	$idpersona;
        private $codigo;
        private $estado;
	
	function __construct($a, $b, $c, $d){
		$this->idalumno=$a;
		$this->idpersona=$b;
        $this->codigo=$c;
        $this->estado=$d;
		
	}
    //get es para retornar	
	
	function getidalumno() {return $this->idalumno;}
        function getidpersona() {return $this->idpersona;}
	function getcodigo() {return $this->codigo;}
        function getestado() {return $this->estado;}
	
	//set es para modificar el valor almacenado	
	function setidalumno($val) {$this->idalumno=$val;}
	function setidpersona($val) {$this->idpersona=$val;}
    function setcodigo($val) {$this->codigo=$val;}
	function setestado($val) {$this->estado=$val;}
        
        }

?>