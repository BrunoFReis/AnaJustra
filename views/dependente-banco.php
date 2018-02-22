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
        
        case 'editar':{
        
            $dep = new Dependentes();
            $dep->id = $_POST["id"];
            $dep->depnome = $_POST["depnome"];
            $dep->depnasc = $_POST["depnasc"];
            $dep->depcpf = $_POST["depcpf"];
            $dep->depestadocivil = $_POST["depestadocivil"];
            $dep->depsexo = $_POST["depsexo"];
            $dep->depnomemae = $_POST["depnomemae"];
            $dep->parentesco = $_POST["parentesco"];
            $dep->sosdental = $_POST["sosdental"];
            
            $dependenteDAO->EditarDependente($dep);
            header("Location: /amildental/admin/relatorios/dependentes.php");
            break;
        }
        
		default:{
			break;
		}
	}