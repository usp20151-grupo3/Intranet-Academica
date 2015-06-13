<?php
class UsuarioE{

        private	$idcurso;
        private	$descripcion;
        private $codigo;
        private $fecharegistro;
        private $estado;
	
	function __construct($a, $b, $c, $d, $e){
		$this->idcurso=$a;
		$this->descripcion=$b;
        $this->codigo=$c;
        $this->fecharegistro=$d;
        $this->estado=$e;
		
	}
    //get es para retornar	
	
	function getidcurso() {return $this->idcurso;}
    function getdescripcion() {return $this->descripcion;}
	function getcodigo() {return $this->codigo;}
	function getfecharegistro() {return $this->fecharegistro;}
    function getestado() {return $this->estado;}
	
	//set es para modificar el valor almacenado	
	function setidcurso($val) {$this->idcurso=$val;}
	function setdescripcion($val) {$this->descripcion=$val;}
    function setcodigo($val) {$this->codigo=$val;}
    function setfecharegistro($val) {$this->fecharegistro=$val;}
	function setestado($val) {$this->estado=$val;}
        
        }

?>