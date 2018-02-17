<?php

Class UsuariosDAO {

	private $conexao;

	function __construct($conexao) {
		$this->conexao = $conexao;
	}

	function check_login($login, $senha){
		$usuario = new Usuarios();

		$query = "
			SELECT 
			    id,
			    usunome
			FROM usuarios 
			where 
				ativado = 1
			    and usulogin = '{$login}'
			    and ususenha = '{$senha}';
		";

		$resultado = mysqli_query($this->conexao, $query);
		$resultArray = mysqli_fetch_assoc($resultado);

		if($resultArray){
			$usuario->id = $resultArray['id'];	
			$usuario->usunome = $resultArray['usunome'];	
		}
		
		return $usuario;	
	}

}