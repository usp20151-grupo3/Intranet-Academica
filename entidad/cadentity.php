<?php
class UsuarioE{

        private	$idcad;
        private	$idcurso;
        private $idtrabajador;
        private	$idgrupo;
        private $fechavigencia;
        private $estado;
	
	function __construct($a, $b, $c, $d, $e,$f){
		$this->idcad=$a;
		$this->idcurso=$b;
        $this->idtrabajador=$c;
        $this->idgrupo=$d;
        $this->fechavigencia=$e;
        $this->estado=$f;
		
	}
    //get es para retornar	
	
	function getidcad() {return $this->idcad;}
    function getidcurso() {return $this->idcurso;}
	function getidtrabajador() {return $this->idtrabajador;}
	function getidgrupo() {return $this->idgrupo;}
	function getfechavigencia() {return $this->fechavigencia;}
    function getestado() {return $this->estado;}
	
	//set es para modificar el valor almacenado	
	function setidcad($val) {$this->idcad=$val;}
	function setidcurso($val) {$this->idcurso=$val;}
    function setidtrabajador($val) {$this->idtrabajador=$val;}
    function setidgrupo($val) {$this->idgrupo=$val;}
    function setfechavigencia($val) {$this->fechavigencia=$val;}
	function setestado($val) {$this->estado=$val;}
        
        }

?>