<?php //
class UsuarioE{

        private	$idusuario;
        private	$ipacceso;
        private $fechaacceso;
	
	function __construct($a, $b, $c){
		$this->idusuario=$a;
		$this->ipacceso=$b;
                $this->fechaacceso=$c;
     
		
	}
	
	
	function getidusuario() {return $this->idusuario;}
        function getipacceso() {return $this->ipacceso;}
	function getfechaacceso() {return $this->fechacceso;}

	
	
	function setidusuario($val) {$this->idusuario=$val;}
	function setipacceso($val) {$this->ipacceso=$val;}
        function setfechaacceso($val) {$this->fechacceso=$val;}

	
        
        }

        ?>
