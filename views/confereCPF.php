<?php 

        require_once($_SERVER['DOCUMENT_ROOT']."/amildental/class/include_global.php"); 

        $cpf = $_GET["cpf"];

        $clientesDAO = new ClientesDAO($conexao);            
        $list = $clientesDAO->listaClientesporCPF($cpf);

        $tamanho = sizeof($list);
        if($tamanho > 0){
            echo 1;
        }
?>

