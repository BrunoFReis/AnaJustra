<?php
	require_once($_SERVER['DOCUMENT_ROOT']."/amildental/class/include_global.php");

	$dependenteDAO = new DependentesDAO($conexao);

	$acao = $_GET["acao"];

    switch ($acao) {
        case 'excluir':{
        	$id = $_GET["idDependente"];
            $dependenteDAO->removeDependentePorID($id);
            break;
        }		
		default:{
			break;
		}
	}