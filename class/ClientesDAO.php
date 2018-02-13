<?php

class ClientesDAO {

	private $conexao;

	function __construct($conexao) {
		$this->conexao = $conexao;
	}	

	function insereCliente(Clientes $cliente, $dependentes){
		$query = "
			INSERT INTO clientes (clinome, clinasc, clicpf, cliestadocivil, clisexo, clinomemae, cliendereco, clibairro, clicidade, cliuf, clicep, cliendnumero, clitelefone, cliemail)
			VALUES (
				'{$cliente->clinome}', 
				 STR_TO_DATE('{$cliente->clinasc}','%d/%m/%Y'), 
				'{$cliente->clicpf}', 
				{$cliente->cliestadocivil}, 
				'{$cliente->clisexo}', 
				'{$cliente->clinomemae}', 
				'{$cliente->cliendereco}', 
				'{$cliente->clibairro}', 
				'{$cliente->clicidade}', 
				'{$cliente->cliuf}', 
				'{$cliente->clicep}', 
				'{$cliente->cliendnumero}', 
				'{$cliente->clitelefone}', 
				'{$cliente->cliemail}'
				)";

		$resultado = mysqli_query($this->conexao, $query);
		//echo mysqli_error($this->conexao);

		$id_new = mysqli_insert_id($this->conexao);

		if($id_new != 0 && count($dependentes) > 0){
			$dependenteDAO = new DependentesDAO($this->conexao);
			
			foreach ($dependentes as $dep) {
				$dep->cliente = $id_new;
				$dependenteDAO->insereDependente($dep);
			}
		}

		return $resultado;
	}

	function atualizaCliente(Clientes $cliente, $files, $destino){

		$upload = new Upload();
		$imgsrc = $upload->imagem($files, $destino);
		$cliente->imgsrc = $imgsrc;

		$query = "	UPDATE Clientes
					SET 
						clinome = '{$cliente->cliNome}', 
						clicpf = '{$cliente->cliCpf}', 
						cliemail = '{$cliente->cliEmail}', 
						clitelefone = '{$cliente->cliTelefone}', 
						clicelular = '{$cliente->cliCelular}', 
				";
		if($imgsrc != "0" && $imgsrc != ""){
			$query .= " imgsrc = '{$cliente->imgsrc}', ";
		}
		$query .=	"	clinascimento = STR_TO_DATE('{$cliente->cliNascimento}','%d/%m/%Y')
					WHERE
						id_clientes = '{$cliente->id_clientes}';
		";

		return mysqli_query($this->conexao, $query);
	}	

	function listaClientes() {

		$ListClientes = array();
		$query = " 
			SELECT
				id,
				clinome, 
			    clinasc, 
			    clicpf, 
			    cliestadocivil, 
			    clisexo, 
			    clinomemae, 
			    cliendereco, 
			    clibairro, 
			    clicidade, 
			    cliuf, 
			    clicep, 
			    cliendnumero, 
			    clitelefone,
			    clicelular,
			    cliemail,
			    data
			FROM clientes
			WHERE ativado = 1;
		";

		$resultado = mysqli_query($this->conexao, $query);

		while($clientes_array = mysqli_fetch_assoc($resultado)) {

			$cliente = new Clientes();
			$cliente->id = $clientes_array['id'];
			$cliente->clinome = $clientes_array['clinome'];
			$cliente->clinasc = $clientes_array['clinasc'];
			$cliente->clicpf = $clientes_array['clicpf'];
			$cliente->cliestadocivil = $clientes_array['cliestadocivil'];
			$cliente->clisexo = $clientes_array['clisexo'];
			$cliente->clinomemae = $clientes_array['clinomemae'];
			$cliente->cliendereco = $clientes_array['cliendereco'];
			$cliente->clibairro = $clientes_array['clibairro'];
			$cliente->clicidade = $clientes_array['clicidade'];
			$cliente->cliuf = $clientes_array['cliuf'];
			$cliente->clicep = $clientes_array['clicep'];
			$cliente->cliemail = $clientes_array['cliemail'];
			$cliente->cliendnumero = $clientes_array['cliendnumero'];
			$cliente->clitelefone = $clientes_array['clitelefone'];
			$cliente->clicelular = $clientes_array['clicelular'];
			$cliente->data = $clientes_array['data'];
			
			array_push($ListClientes, $cliente);
		}

		return $ListClientes;
	}

	function retornaClientePorID($id_clientes) {

		$query = " 
					SELECT 
					    id_clientes,
					    cod_cliente,
					    imgsrc,
					    clinome,
					    clicpf,
					    cliemail,
					    clitelefone,
					    clicelular,
					    clisenha,
					    DATE_FORMAT(clinascimento,'%d/%m/%Y') as clinascimento,
					    clicep,
					    cliddd,
					    DATE_FORMAT(data_registro,'%d/%m') as data_registro_simples,
					    DATE_FORMAT(data_registro,'%h:%m:%s - %d/%m/%Y') as data_registro,
					    ativado
					FROM
					    Clientes
					WHERE
						id_clientes = {$id_clientes};
		";

		$resultado = mysqli_query($this->conexao, $query);
		$resultArray = mysqli_fetch_assoc($resultado);

		$cliente = new Clientes();
		$cliente->id_clientes = $resultArray['id_clientes'];
		$cliente->cod_cliente = $resultArray['cod_cliente'];
		$cliente->imgsrc = $resultArray['imgsrc'];		
		$cliente->cliNome = $resultArray['clinome'];
		$cliente->cliCpf = $resultArray['clicpf'];
		$cliente->cliEmail = $resultArray['cliemail'];
		$cliente->cliTelefone = $resultArray['clitelefone'];
		$cliente->cliCelular = $resultArray['clicelular'];
		$cliente->cliSenha = $resultArray['clisenha'];
		$cliente->cliNascimento = $resultArray['clinascimento'];
		$cliente->data_registro = $resultArray['data_registro'];
		$cliente->ativado =  $resultArray['ativado'];

		return $cliente;
	}	

	function retornaClientePorChave($cod_cliente) {

		$query = " 
					SELECT 
					    id_clientes,
					    cod_cliente,
					    clinome,
					    clicpf,
					    cliemail,
					    clitelefone,
					    clicelular,
					    clisenha,
					    clinascimento,
					    clicep,
					    cliddd,
					    data_registro,
					    ativado
					FROM
					    Clientes
					WHERE
						substring(cod_cliente,1,6) = substring('{$cod_cliente}',1,6);
		";

		$resultado = mysqli_query($this->conexao, $query);
		$resultArray = mysqli_fetch_assoc($resultado);

		$cliente = new Clientes();
		$cliente->id_clientes = $resultArray['id_clientes'];
		$cliente->cod_cliente = $resultArray['cod_cliente'];
		$cliente->cliNome = $resultArray['clinome'];
		$cliente->cliCpf = $resultArray['clicpf'];
		$cliente->cliEmail = $resultArray['cliemail'];
		$cliente->cliTelefone = $resultArray['clitelefone'];
		$cliente->cliCelular = $resultArray['clicelular'];
		$cliente->cliSenha = $resultArray['clisenha'];
		$cliente->cliNascimento = $resultArray['clinascimento'];
		$cliente->data_registro = $resultArray['data_registro'];
		$cliente->ativado =  $resultArray['ativado'];

		return $cliente;
	}	

	function check_login($login, $senha){
		$cliente = new Clientes();

		$query = "
			SELECT 
			    id_clientes,
			    clinome
			FROM Clientes 
			where 
				ativado = 1
			    and (cliemail = '{$login}' or clicpf = '$login')
			    and clisenha = '{$senha}';			
		";

		$resultado = mysqli_query($this->conexao, $query);
		$resultArray = mysqli_fetch_assoc($resultado);

		if($resultArray){
			$cliente->id_clientes = $resultArray['id_clientes'];	
			$cliente->cliNome = $resultArray['clinome'];	
		}
		
		return $cliente;		
	}

	function insereClienteIndicacaoRegistro(ClienteIndicacaoRegistro $clienteIndicacao){
		$query = "	insert into Clientes_Indicacao_Registro 
						(id_clientes, indNome, indTelefone, indEmail)
					values 
						(
							'{$clienteIndicacao->id_clientes}', 
							'{$clienteIndicacao->indNome}', 
							'{$clienteIndicacao->indTelefone}', 
							'{$clienteIndicacao->indEmail}' 
						) ";

		return mysqli_query($this->conexao, $query);
	}

	function retornaClienteLogado(){
		session_start();

		$id_clientes = $_SESSION["id_clientes"];
		$cliente = $this->retornaClientePorID($id_clientes);

		return $cliente;
	}

	function desativaClientePorID($id_clientes){
		$query = "
				UPDATE Clientes
				SET ativado = 0
				WHERE id_clientes = {$id_clientes}
				AND ativado = 1 ;
		";

		return mysqli_query($this->conexao, $query);
	}

	function listaDesejosCliente(){
		$ListDesejos = array();
		
		$cliente = $this->retornaClienteLogado();

		$query = "
				SELECT
					id_desejos,
				    p.id_produto,
				    p.prodtitulo,
				    DATE_FORMAT(cd.data_registro,'%d/%m') as data_registro_simples,
				    DATE_FORMAT(cd.data_registro,'%h:%m:%s - %d/%m/%Y') as data_registro
				FROM Clientes_Desejo cd
					INNER JOIN Produtos p ON p.id_produto = cd.id_produto AND p.ativado = 1
				WHERE
					cd.id_clientes = {$cliente->id_clientes};
		";

		$resultado = mysqli_query($this->conexao, $query);

		while($desejos_array = mysqli_fetch_assoc($resultado)) {

			$produto = new Produto();
			$produto->id_produto = $desejos_array['id_produto'];
			$produto->prodtitulo = $desejos_array['prodtitulo'];
			$produto->data_registro_simples = $desejos_array['data_registro_simples'];
			$produto->data_registro = $desejos_array['data_registro'];
			
			array_push($ListDesejos, $produto);
		}

		return $ListDesejos;

	}

}