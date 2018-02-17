<?php 
session_start();

Class Configuracao {


	function verificaSessao(){
		$id_usuarios = $_SESSION["id"];

		if($id_usuarios == "" || $id_usuarios == null){
			$_SESSION["msg-danger"] = "Sessão Expirada!";
			header("Location: /amildental/admin/login.php");
		}
	}

}