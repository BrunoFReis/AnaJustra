<?php

class DependentesDAO {

	private $conexao;

	function __construct($conexao) {
		$this->conexao = $conexao;
	}	

	function insereDependente(Dependentes $dep){
		$query = "
				INSERT INTO dependentes
					(cliente, depnome, depsexo, parentesco, depestadocivil, depcpf, depnasc, depnomemae, sosdental)
				VALUES(
					'{$dep->cliente}',
					'{$dep->depnome}',
					'{$dep->depsexo}',
					'{$dep->parentesco}',
					'{$dep->depestadocivil}',
					'{$dep->depcpf}',
					 STR_TO_DATE('{$dep->depnasc}','%d/%m/%Y'),
					'{$dep->depnomemae}',
					'{$dep->sosdental}'
				);
		";
		
		return mysqli_query($this->conexao, $query);
	}

}