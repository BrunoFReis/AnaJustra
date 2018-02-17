<?php 
require_once($_SERVER['DOCUMENT_ROOT']."/amildental/class/include_global.php");
session_start();

$login = trim($_POST["login"]);
$senha = trim($_POST["senha"]);

$usuariosDAO = new UsuariosDAO($conexao);

$usuario = $usuariosDAO->check_login($login, $senha);

if($usuario->usunome != "" || $usuario->usunome != null){
	$_SESSION["id"] = $usuario->id;
	$_SESSION["usunome"] = $usuario->usunome;

	header("Location: dashboard.php");
}else{
	$_SESSION["msg-danger"] = "Login ou senha incorretos";
	header("Location: login.php");
}
die();