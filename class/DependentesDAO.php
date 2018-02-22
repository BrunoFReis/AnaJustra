<?php

class DependentesDAO {

	private $conexao;

	function __construct($conexao) {
		$this->conexao = $conexao;
	}	

	function insereDependente(Dependentes $dep){
		$query = "
				INSERT INTO dependentes
					(cliente, depnome, depsexo, parentesco, depestadocivil, depcpf, depnasc, depnomemae, sosdental, data)
				VALUES(
					'{$dep->cliente}',
					'{$dep->depnome}',
					'{$dep->depsexo}',
					'{$dep->parentesco}',
					'{$dep->depestadocivil}',
					'{$dep->depcpf}',
					 STR_TO_DATE('{$dep->depnasc}','%d/%m/%Y'),
					'{$dep->depnomemae}',
					'{$dep->sosdental}',
					STR_TO_DATE('".date("d/m/Y H:i:s")."','%d/%m/%Y %H:%i:%s')
				);
		";
		echo $query;
		return mysqli_query($this->conexao, $query);
	}

    function EditarDependente(Dependentes $dep){
           
            $query = "
            UPDATE dependentes
                SET
                depnome = '{$dep->depnome}',
                depsexo = '{$dep->depsexo}',
                parentesco = '{$dep->parentesco}',
                depestadocivil = '{$dep->depestadocivil}',
                depcpf = '{$dep->depcpf}',
                depnasc = STR_TO_DATE('{$dep->depnasc}','%d/%m/%Y'),
                depnomemae = '{$dep->depnomemae}',
                sosdental = '{$dep->sosdental}'
                WHERE id = '{$dep->id}';
                            ";                    
            echo $query;        
            $resultado = mysqli_query($this->conexao, $query);
        }
        
        
    function listaDependentes() {
		$ListDependente = array();
		$query = " 
            SELECT
            	a.id,
                a.depnome,
                e.clinome,
                a.depcpf,
                DATE_FORMAT(a.depnasc,'%d/%m/%Y') as depnasc,
                d.descricao as estadoCivil,
                c.descricao as sexo,
                b.descricao as parentesco,
                a.depnomemae,
                a.sosdental,
                DATE_FORMAT(a.data,'%d/%m/%Y') as data
            FROM dependentes a 
            INNER JOIN clientes e on e.id = a.cliente and e.ativado = 1
            INNER JOIN parentesco b on a.parentesco = b.id
            INNER JOIN sexo c on a.depsexo = c.id
            INNER JOIN estadoCivil d on a.depestadocivil = d.id
            WHERE
            	a.ativado = 1;
		";

        $resultado = mysqli_query($this->conexao, $query);

		while($dep_array = mysqli_fetch_assoc($resultado)) {
                $dep = new Dependentes();
                $dep->id = $dep_array['id'];
                $dep->depnome = $dep_array['depnome'];
                $dep->clinome = $dep_array['clinome'];
                $dep->parentesco = $dep_array['parentesco'];
                $dep->depcpf = $dep_array['depcpf'];
                $dep->depnasc = $dep_array['depnasc'];
                $dep->depestadocivil = $dep_array['estadoCivil'];
                $dep->depsexo = $dep_array['sexo'];
                $dep->depnomemae = $dep_array['depnomemae'];
                $dep->sosdental = $dep_array['sosdental'];
                $dep->data = $dep_array['data'];
			
            array_push($ListDependente, $dep);
		}

		return $ListDependente;
	}
        
    function listaDependenteporID($id_cliente) {
		$ListDependente = array();
		$query = " 
                    SELECT 
                        a.depnome,
                        a.depcpf,
                        DATE_FORMAT(a.depnasc,'%d/%m/%Y') as depnasc,
                        d.descricao as estadoCivil,
                        c.descricao as sexo,
                        b.descricao as parentesco,
                        a.depnomemae,
                        a.sosdental
                    FROM
                        dependentes a 
                    INNER JOIN
                        parentesco b on a.parentesco = b.id
                    INNER JOIN
                        sexo c on a.depsexo = c.id
                    INNER JOIN
                        estadoCivil d on a.depestadocivil = d.id
                    WHERE
                        a.cliente = '{$id_cliente}' and a.ativado = 1;
		";
                
                        $resultado = mysqli_query($this->conexao, $query);

		while($dep_array = mysqli_fetch_assoc($resultado)) {
                    $dep = new Dependentes();
                    $dep->depnome = $dep_array['depnome'];
                    $dep->parentesco = $dep_array['parentesco'];
                    $dep->depcpf = $dep_array['depcpf'];
                    $dep->depnasc = $dep_array['depnasc'];
                    $dep->depestadocivil = $dep_array['estadoCivil'];
                    $dep->depsexo = $dep_array['sexo'];
                    $dep->depnomemae = $dep_array['depnomemae'];
                    $dep->sosdental = $dep_array['sosdental'];
			
            array_push($ListDependente, $dep);
		}

		return $ListDependente;
	}

	function removeDependentePorCliente($idCliente){
		$query = "	
                UPDATE dependentes
                SET ativado = 0
				WHERE cliente = '{$idCliente}';
		";
		return mysqli_query($this->conexao, $query);
	}

	function removeDependentePorID($id){
		$query = "	
                UPDATE dependentes
                SET ativado = 0
				WHERE id = '{$id}';
		";
		return mysqli_query($this->conexao, $query);
	}	
        
        function DependenteporIDdependente($id_dependente) {
		
            $query = " 
                    SELECT 
                        a.id,
                        a.depnome,
                        a.depcpf,
                        DATE_FORMAT(a.depnasc,'%d/%m/%Y') as depnasc,
                        a.depestadoCivil,
                        a.depsexo,
                        a.parentesco,
                        a.depnomemae,
                        a.sosdental
                    FROM
                        dependentes a
                    WHERE
                        a.id = '{$id_dependente}' and a.ativado = 1;
		";
                $resultado = mysqli_query($this->conexao, $query);
                $resultArray = mysqli_fetch_assoc($resultado);

		    $dep = new Dependentes();
                    $dep->id = $resultArray['id'];
                    $dep->depnome = $resultArray['depnome'];
                    $dep->parentesco = $resultArray['parentesco'];
                    $dep->depcpf = $resultArray['depcpf'];
                    $dep->depnasc = $resultArray['depnasc'];
                    $dep->depestadocivil = $resultArray['depestadoCivil'];
                    $dep->depsexo = $resultArray['depsexo'];
                    $dep->depnomemae = $resultArray['depnomemae'];
                    $dep->sosdental = $resultArray['sosdental'];
			
           	return $dep;
	}

}