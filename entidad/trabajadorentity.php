<?php
class UsuarioE{

        private	$idtrabajador;
        private	$idpersona;
        private	$idrol;
        private $codigo;
        private $estado;
	
	function __construct($a, $b, $c, $d, $e){
		$this->idtrabajador=$a;
		$this->idpersona=$b;
		$this->idrol=$b;
        $this->codigo=$c;
        $this->estado=$d;
	
	}
    //get es para retornar	
	
	function getidtrabajador() {return $this->idtrabajador;}
    function getidpersona() {return $this->idpersona;}
	function getcodigo() {return $this->codigo;}
	function getidrol() {return $this->idrol;}
    function getestado() {return $this->estado;}
	
	//set es para modificar el valor almacenado	
	function setidtrabajador($val) {$this->idtrabajador=$val;}
	function setidpersona($val) {$this->idpersona=$val;}
	function setidrol($val) {$this->idrol=$val;}
    function setcodigo($val) {$this->codigo=$val;}
	function setestado($val) {$this->estado=$val;}
        
        }

?>