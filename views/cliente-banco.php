<?php
	require_once($_SERVER['DOCUMENT_ROOT']."/amildental/class/include_global.php");

	$clientesDAO = new ClientesDAO($conexao);

	$acao = $_GET["acao"];
        $analise = $_GET["analise"];
        $id_cliente = $_GET["id_cliente"];
        
        switch ($acao) {
		case 'cadastrar':{
			$cliente = new CLientes();
			$cliente->clinome = $_POST["clinome"];
			$cliente->clinasc = $_POST["clinasc"];
			$cliente->clicpf = $_POST["clicpf"];
			$cliente->cliestadocivil = $_POST["cliestadocivil"];
			$cliente->clisexo = $_POST["clisexo"];
			$cliente->clinomemae = $_POST["clinomemae"];
			$cliente->cliendereco = $_POST["cliendereco"].$_POST["cliendcomp"];
			$cliente->clibairro = $_POST["clibairro"];
			$cliente->clicidade = $_POST["clicidade"];
			$cliente->cliuf = $_POST["cliuf"];
			$cliente->clicep = $_POST["clicep"];
			$cliente->cliendnumero = $_POST["cliendnumero"];
			$cliente->clitelefone = $_POST["clitelefone"];
			$cliente->clicelular = $_POST["clicelular"];
			$cliente->cliemail = $_POST["cliemail"];
                        $cliente->idplano = $_POST["plano"];
                        

			$clientesDAO->insereCliente($cliente, convertArrayDependentes($_POST["dependentes"]));

			header("Location: /amildental/concluido.php");
			break;
		}
		case 'removedesejo':{
			$id_produto = $_GET["id_produto"];

			if($produtosDAO->removeListaDesejo($id_produto)){
				echo "1";
			}

			//header("Location: /MilAmigos/admin/views/produtos.php");
			break;
		}			
		default:
			# code...
			break;
	}
        
        switch ($analise){
            case 'confirmar':{
                
                $clientesDAO->ConfirmaCliente($id_cliente);

                break;
            }
            
            case 'excluir':{

                $clientesDAO->ExcluirCliente($id_cliente);

                break;
            }
            
            default:
		 
		break;
                
        }

	function convertArrayDependentes($post){
		$array = array();
		$dependentes = array();

	    foreach ($post as $key => $value ) {
	    	$cont = 1;
	        $dependente = explode(',', $value);

	        foreach ($dependente as $key => $value) {
	     		$campo = explode(':', $value);
	     		$array[$campo[0]] = $campo[1];
	        }

	        $dep = new Dependentes();
			$dep->depnome = $array["depnome"];
			$dep->depsexo = $array["depsexo"];
			$dep->parentesco = $array["parentesco"];
			$dep->depestadocivil = $array["depestadocivil"];
			$dep->depcpf = $array["depcpf"];
			$dep->depnasc = $array["depnasc"];
			$dep->depnomemae = $array["depnomemae"];
			$dep->sosdental = $array["sosdental"];

			array_push($dependentes, $dep);
			//$dependentes[] = $dep;
			$cont = $cont + 1;
	    }

	    return $dependentes;
	}