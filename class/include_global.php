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

	function removeAcentuacao($text){
		return preg_replace(array("/(á|à|ã|â|ä)/","/(Á|À|Ã|Â|Ä)/","/(é|è|ê|ë)/","/(É|È|Ê|Ë)/","/(í|ì|î|ï)/","/(Í|Ì|Î|Ï)/","/(ó|ò|õ|ô|ö)/","/(Ó|Ò|Õ|Ô|Ö)/","/(ú|ù|û|ü)/","/(Ú|Ù|Û|Ü)/","/(ñ)/","/(Ñ)/"),explode(" ","a A e E i I o O u U n N"),$text);
	}