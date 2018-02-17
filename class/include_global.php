<?php 
	function carregaClasse($nomeDaClasse) {
		require_once($_SERVER['DOCUMENT_ROOT']."/amildental/class/".$nomeDaClasse.".php");
	}

	spl_autoload_register("carregaClasse");

	error_reporting(E_ALL ^ E_NOTICE);

	$ClassConexao = new conexao();
	$conexao = $ClassConexao->conexao;

	function selecionaMenu($session, $nome_menu){
		if($session == $nome_menu){
			return "active";
		}else{
			return "";
		}
	}