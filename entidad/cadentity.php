<?php
class UsuarioE{

        private	$idcad;
        private	$idcurso;
        private $idtrabajador;
        private	$idgrupo;

        private $estado;
	
	function __construct($a, $b, $c, $d, $e){
		$this->idcad=$a;
		$this->idcurso=$b;
        $this->idtrabajador=$c;
        $this->idgrupo=$d;

        $this->estado=$e;
		
	}
    //get es para retornar	
	
	function getidcad() {return $this->idcad;}
    function getidcurso() {return $this->idcurso;}
	function getidtrabajador() {return $this->idtrabajador;}
	function getidgrupo() {return $this->idgrupo;}

    function getestado() {return $this->estado;}
	
	//set es para modificar el valor almacenado	
	function setidcad($val) {$this->idcad=$val;}
	function setidcurso($val) {$this->idcurso=$val;}
    function setidtrabajador($val) {$this->idtrabajador=$val;}
    function setidgrupo($val) {$this->idgrupo=$val;}

	function setestado($val) {$this->estado=$val;}
        
        }

?>