<?php
// REPRESENTACION DE LAS TABLAS DE LAS BD'S PARA USARLAS COMO OBJETOS
 class UsuarioE{

        private	$idpersona;
        private	$nombre;
        private $apellido;
        private $dni;
	private $sexo;
        private $direccion;
        private $telefono;
        private $email;
        private $fecharegistro;
        private $estado;
	
	function __construct($a, $b, $c, $d, $e, $f, $g, $h, $i, $j){
		$this->idpersona=$a;
		$this->nombre=$b;
                $this->apellido=$c;
		$this->dni=$d;              
		$this->sexo=$e;
		$this->direccion=$f;
                $this->telefono=$g;              
		$this->email=$h;
                $this->fecharegistro=$i;
		$this->estado=$j;
	}
    //get es para retornar	
	
	function getidpersona() {return $this->idpersona;}
        function getnombre() {return $this->nombre;}
	function getapellido() {return $this->apellido;}
	function getdni() {return $this->dni;}
        function getsexo() {return $this->sexo;}
        function getdireccion() {return $this->direccion;}
	function gettelefono() {return $this->telefono;}
	function getemail() {return $this->email;}                
	function getfecharegistro() {return $this->fecharegistro;}
        function getestado() {return $this->estado;}
	
	//set es para modificar el valor almacenado	
	function setidpersona($val) {$this->idpersona=$val;}
	function setnombre($val) {$this->nombre=$val;}
        function setapellido($val) {$this->apellido=$val;}
	function setdni($val) {$this->dni=$val;}
	function setsexo($val) {$this->sexo=$val;}
	function setdireccion($val) {$this->direccion=$val;}
	function settelefono($val) {$this->telefono=$val;}
	function setemail($val) {$this->email=$val;}
	function setfecharegistro($val) {$this->fecharegistro=$val;}
	function setestado($val) {$this->estado=$val;}
}

        ?>
