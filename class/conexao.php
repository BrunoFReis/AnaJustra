<?php
/**
* Classe de Conexão
*/
Class Conexao {
	
	public $conexao;
	public $hostname;
	public $user;
	public $pass;

	function __construct()
	{
		$hostname  = "sql50.main-hosting.eu";
		$user = "u124677850_root";
		$pass = "10203040aa";

		//$conn = $this->conectaBanco("localhost","root","",$basename);
		//$conn = $this->conectaBanco($hostname, $user,$pass,"u124677850_anaju");

		$conn = $this->conectaBanco($hostname, $user, $pass, "u124677850_anaju");

		//if(is_resource($conn) && get_resource_type($conn) === 'mysql link'){
		if($conn && !mysqli_connect_errno()){
			$this->conexao = $conn;
		}else{
			$this->conexao = $this->conectaBanco($hostname, $user, $pass, "u124677850_anaju");
		}
		
	}

	function conectaBanco($host, $usuario, $senha){
		return mysqli_connect($host, $usuario, $senha, $basename);
	}
	
}

?>