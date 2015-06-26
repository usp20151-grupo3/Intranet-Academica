<?php
class UsuarioE{

        private	$idmatricula;
        private	$idalumno;
        private $idpersona;
        private	$idgrupo;
        private	$parentesco;
        private $estado;
	
	function __construct($a, $b, $c, $d, $e, $f){
		$this->idmatricula=$a;
		$this->idalumno=$b;
        $this->idpersona=$c;
        $this->idgrupo=$d;
        $this->parentesco=$e;
        $this->estado=$f;
		
	}
    //get es para retornar	
	
	function getidmatricula() {return $this->idmatricula;}
    function getidalumno() {return $this->idalumno;}
	function getidpersona() {return $this->idpersona;}
	function getidgrupo() {return $this->idgrupo;}
	function getparentesco() {return $this->parentesco;}
    function getestado() {return $this->estado;}
	
	//set es para modificar el valor almacenado	
	function setidmatricula($val) {$this->idmatricula=$val;}
	function setidalumno($val) {$this->idalumno=$val;}
    function setidpersona($val) {$this->idpersona=$val;}
    function setidgrupo($val) {$this->idgrupo=$val;}
    function setparentesco($val) {$this->parentesco=$val;}
	function setestado($val) {$this->estado=$val;}
        
        }

?>