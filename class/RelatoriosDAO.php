<?php

class RelatoriosDAO {

	private $conexao;

	function __construct($conexao) {
		$this->conexao = $conexao;
	}	

	function retornaQuantitativos() {

            $query = " 
                SELECT
					(select count(*) from clientes where ativado = 1) as qtdClientes,
				    (select count(*) from clientes where ativado = 1 and clifinalizado = 1) as qtdFinalizados,
				    round((select count(*) from clientes where ativado = 1 and clifinalizado = 1)/(select count(*) from clientes where ativado = 1)*100,0) as porcentagem
            ";
            
            $resultado = mysqli_query($this->conexao, $query);
            $resultArray = mysqli_fetch_assoc($resultado);

            $rel = new Relatorios();
            $rel->qtdClientes = $resultArray['qtdClientes'];
            $rel->qtdFinalizados = $resultArray['qtdFinalizados'];
            $rel->porcentagem = $resultArray['porcentagem'];
            
            return $rel;
	}

}