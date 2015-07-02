<?php //
class UsuarioH{

        private	$idusuario;
        private	$ipacceso;
        private $fechaacceso;

	
	function __construct($a, $b, $c){
		$this->idusuario=$a;
		$this->ipacceso=$b;
        $this->fechaacceso=$c;            
		
	}
    //get es para retornar	
	
	function getidusuario() {return $this->idusuario;}
        function getipacceso() {return $this->ipacceso;}
	function getfechaacceso() {return $this->fechacceso;}

	
	//set es para modificar el valor almacenado	
	function setidusuario($val) {$this->idusuario=$val;}
	function setipacceso($val) {$this->ipacceso=$val;}
        function setfechaacceso($val) {$this->fechacceso=$val;}

	
        
        }

        ?>
