<?php
// REPRESENTACION DE LAS TABLAS DE LAS BD'S PARA USARLAS COMO OBJETOS
 class UsuarioE{

        private	$idusuario;
        private	$idpersona;
        private	$usuario;
        private $rol;
        private $password;
	private $estado;
	
	function __construct($a, $b, $c, $d, $e,$f){
		$this->idusuario=$a;
		$this->idpersona=$b;
                $this->rol=$c;
		$this->usuario=$d;              
		$this->password=$e;
		$this->estado=$f;
	}
    //get es para retornar	
	function getidusuario() {return $this->idusuario;}
	function getidpersona() {return $this->idtrabajador;}
        function getrol() {return $this->rol;}
	function getusuario() {return $this->usuario;}
	function getpassword() {return $this->password;}
	function getestado() {return $this->estado;}

	
	//set es para modificar el valor almacenado	
	function setidusuario($val) {$this->idusuario=$val;}
	function setidpersona($val) {$this->idpersona=$val;}
        function setrol($val) {$this->rol=$val;}
	function setusuario($val) {$this->usuario=$val;}
	function setpassword($val) {$this->password=$val;}
	function setestado($val) {$this->estado=$val;}
	
}

        ?>