<?php
class UsuarioE{

        private	$idasistencia;
        private	$fecharegistro;
        private $idmatricula;
        private	$idcad;
        private $comentario;
        private $estado;
	
	function __construct($a, $b, $c, $d, $e,$f){
        $this->idasistencia=$a;
        $this->fecharegistro=$b;		
        $this->idmatricula=$c;
        $this->idcad=$d;
        $this->comentario=$e;
        $this->estado=$f;
		
	}
    //get es para retornar	
	
    function getidasistencia() {return $this->idasistencia;}
	function getfecharegistro() {return $this->fecharegistro;}
	function getidmatricula() {return $this->idmatricula;}
	function getidcad() {return $this->idcad;}
	function getcomentario() {return $this->comentario;}
    function getestado() {return $this->estado;}
	
	//set es para modificar el valor almacenado	
    function setidasistencia($val) {$this->idasistencia=$val;}
	function setfecharegistro($val) {$this->fecharegistro=$val;}
    function setidmatricula($val) {$this->idmatricula=$val;}
    function setidcad($val) {$this->idcad=$val;}
    function setcomentario($val) {$this->comentario=$val;}
	function setestado($val) {$this->estado=$val;}
        
        }

?>