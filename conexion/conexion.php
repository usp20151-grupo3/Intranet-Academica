<?php
class conexion{
        public $server;	
	public $user;
	public $password;
	public $database;
	public $cn;
        public $rs;
	
        
        function conexion(){
		$this->server 	= "localhost";
		$this->database	= "intranet";
		$this->user	= "root";
		$this->password = "";
	}

	function abrir(){
		$this->cn = new mysqli($this->server,
								$this->user,
								$this->password,
								$this->database);
	}

	function ejecutar($sql){
		$this->abrir();
		if ($this->cn->connect_error) { Die("Error de Conexion");}
		else 
		$this->rs 	= 	$this->cn->query("SET NAMES 'utf8'");
		$this->rs 	= 	$this->cn->query("SET CHARACTER SET 'utf8'");
		$this->rs 	= 	$this->cn->query($sql);

		return $this->rs;
	}

	function cerrar(){
		$this->cn->close();
	}
        
        
}

?>