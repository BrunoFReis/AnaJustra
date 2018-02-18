<?php

class ClientesDAO {

	private $conexao;

	function __construct($conexao) {
		$this->conexao = $conexao;
	}	

	function insereCliente(Clientes $cliente, $dependentes){
		$query = "
			INSERT INTO clientes (clinome, clinasc, clicpf, cliestadocivil, clisexo, clinomemae, cliendereco, clibairro, clicidade, cliuf, clicep, cliendnumero, clitelefone, cliemail,cliplano,clicelular,clifinalizado)
			VALUES (
				'{$cliente->clinome}', 
				 STR_TO_DATE('{$cliente->clinasc}','%d/%m/%Y'), 
				'{$cliente->clicpf}', 
				'{$cliente->cliestadocivil}', 
				'{$cliente->clisexo}', 
				'{$cliente->clinomemae}', 
				'{$cliente->cliendereco}', 
				'{$cliente->clibairro}', 
				'{$cliente->clicidade}', 
				'{$cliente->cliuf}', 
				'{$cliente->clicep}', 
				'{$cliente->cliendnumero}', 
				'{$cliente->clitelefone}', 
				'{$cliente->cliemail}',
                '{$cliente->idplano}',
                '{$cliente->clicelular}',
                 0
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

	function listaClientesExcel($datainicio, $datafim, $numcontrato){

		$ListClientes = array();
		$query = " 
                    SELECT
                    	id,
						'{$numcontrato}' as num_contrato,						cod_tipo_operacao,
						tipo_associado,						num_associado,
						num_matric_empresa,						num_asssociado_tit,
						num_matric_empresa_tit,						num_cpf,
						num_pis,						nome_associado,
						data_nascimento,						ind_sexo,
						ind_estado_civil,						data_casamento,
						cod_dependencia,						cod_plano,
						nome_mae,						data_admissao,
						nome_cargo,						nom_lotacao,
						nom_local_trabalho,						nom_logradouro,
						num_endereco,						txt_complemento,
						nome_bairro,						nome_cidade,
						sgl_uf,						num_cep,
						num_ddd_telefone_1,						num_telefone_1,
						ddd_celular_1,						num_celular_1,
						num_ramal_1,						end_email_1,
						cod_banco_reemb,						cod_agencia_reemb,
						num_dv_agencia_dcc,						num_conta_corrente_reemb,
						num_dv_cc_reemb,						data_movimentacao,
						cod_motivo_exclusao,						cod_empresa_nova,
						num_matric_empresa_novo,						ind_contributario,
						data_adocao,						cod_opcional_1,
						dt_inicial_opcional_1,						dt_final_opcional_1,
						cod_opcional_2,						dt_inicial_opcional_2,
						dt_final_opcional_2,						cod_opcional_3,
						dt_inicial_opcional_3,						dt_final_opcional_3,
						cod_opcional_4,						dt_inicial_opcional_4,
						dt_final_opcional_4,						cod_opcional_5,
						dt_inicial_opcional_5,						dt_final_opcional_5,
						cod_opcional_6,						dt_inicial_opcional_6,
						dt_final_opcional_6,						cod_opcional_7,
						dt_inicial_opcional_7,						dt_final_opcional_7,
						cod_opcional_8,						dt_inicial_opcional_8,
						dt_final_opcional_8,						cod_opcional_9,
						dt_inicial_opcional_9,						dt_final_opcional_9,
						cod_opcional_10,						dt_inicial_opcional_10,
						dt_final_opcional_10,						cod_lotacao,
						cod_local_trabalho,						ind_subsidio,
						cod_municipio_ibge
                    FROM vwRelatorioClientesExcel
                	WHERE DATE_FORMAT(data,'%d/%m/%Y') between '{$datainicio}' and '{$datafim}'
                    order by 1, cod_dependencia
		";
                
		$resultado = mysqli_query($this->conexao, $query);

		while($rs = mysqli_fetch_assoc($resultado)) {

			$cDTO = new ClientesDTO();
			$cDTO->num_contrato = $rs['num_contrato'];
			$cDTO->cod_tipo_operacao = $rs['cod_tipo_operacao'];
			$cDTO->tipo_associado = $rs['tipo_associado'];
			$cDTO->num_associado = $rs['num_associado'];
			$cDTO->num_matric_empresa = $rs['num_matric_empresa'];
			$cDTO->num_asssociado_tit = $rs['num_asssociado_tit'];
			$cDTO->num_matric_empresa_tit = $rs['num_matric_empresa_tit'];
			$cDTO->num_cpf = $rs['num_cpf'];
			$cDTO->num_pis = $rs['num_pis'];
			$cDTO->nome_associado = $rs['nome_associado'];
			$cDTO->data_nascimento = $rs['data_nascimento'];
			$cDTO->ind_sexo = $rs['ind_sexo'];
			$cDTO->ind_estado_civil = $rs['ind_estado_civil'];
			$cDTO->data_casamento = $rs['data_casamento'];
			$cDTO->cod_dependencia = $rs['cod_dependencia'];
			$cDTO->cod_plano = $rs['cod_plano'];
			$cDTO->nome_mae = $rs['nome_mae'];
			$cDTO->data_admissao = $rs['data_admissao'];
			$cDTO->nome_cargo = $rs['nome_cargo'];
			$cDTO->nom_lotacao = $rs['nom_lotacao'];
			$cDTO->nom_local_trabalho = $rs['nom_local_trabalho'];
			$cDTO->nom_logradouro = $rs['nom_logradouro'];
			$cDTO->num_endereco = $rs['num_endereco'];
			$cDTO->txt_complemento = $rs['txt_complemento'];
			$cDTO->nome_bairro = $rs['nome_bairro'];
			$cDTO->nome_cidade = $rs['nome_cidade'];
			$cDTO->sgl_uf = $rs['sgl_uf'];
			$cDTO->num_cep = $rs['num_cep'];
			$cDTO->num_ddd_telefone_1 = $rs['num_ddd_telefone_1'];
			$cDTO->num_telefone_1 = $rs['num_telefone_1'];
			$cDTO->ddd_celular_1 = $rs['ddd_celular_1'];
			$cDTO->num_celular_1 = $rs['num_celular_1'];
			$cDTO->num_ramal_1 = $rs['num_ramal_1'];
			$cDTO->end_email_1 = $rs['end_email_1'];
			$cDTO->cod_banco_reemb = $rs['cod_banco_reemb'];
			$cDTO->cod_agencia_reemb = $rs['cod_agencia_reemb'];
			$cDTO->num_dv_agencia_dcc = $rs['num_dv_agencia_dcc'];
			$cDTO->num_conta_corrente_reemb = $rs['num_conta_corrente_reemb'];
			$cDTO->num_dv_cc_reemb = $rs['num_dv_cc_reemb'];
			$cDTO->data_movimentacao = $rs['data_movimentacao'];
			$cDTO->cod_motivo_exclusao = $rs['cod_motivo_exclusao'];
			$cDTO->cod_empresa_nova = $rs['cod_empresa_nova'];
			$cDTO->num_matric_empresa_novo = $rs['num_matric_empresa_novo'];
			$cDTO->ind_contributario = $rs['ind_contributario'];
			$cDTO->data_adocao = $rs['data_adocao'];
			$cDTO->cod_opcional_1 = $rs['cod_opcional_1'];
			$cDTO->dt_inicial_opcional_1 = $rs['dt_inicial_opcional_1'];
			$cDTO->dt_final_opcional_1 = $rs['dt_final_opcional_1'];
			$cDTO->cod_opcional_2 = $rs['cod_opcional_2'];
			$cDTO->dt_inicial_opcional_2 = $rs['dt_inicial_opcional_2'];
			$cDTO->dt_final_opcional_2 = $rs['dt_final_opcional_2'];
			$cDTO->cod_opcional_3 = $rs['cod_opcional_3'];
			$cDTO->dt_inicial_opcional_3 = $rs['dt_inicial_opcional_3'];
			$cDTO->dt_final_opcional_3 = $rs['dt_final_opcional_3'];
			$cDTO->cod_opcional_4 = $rs['cod_opcional_'];
			$cDTO->dt_inicial_opcional_4 = $rs['dt_inicial_opcional_4'];
			$cDTO->dt_final_opcional_4 = $rs['dt_final_opcional_4'];
			$cDTO->cod_opcional_5 = $rs['cod_opcional_'];
			$cDTO->dt_inicial_opcional_5 = $rs['dt_inicial_opcional_5'];
			$cDTO->dt_final_opcional_5 = $rs['dt_final_opcional_5'];
			$cDTO->cod_opcional_6 = $rs['cod_opcional_6'];
			$cDTO->dt_inicial_opcional_6 = $rs['dt_inicial_opcional_6'];
			$cDTO->dt_final_opcional_6 = $rs['dt_final_opcional_6'];
			$cDTO->cod_opcional_7 = $rs['cod_opcional_7'];
			$cDTO->dt_inicial_opcional_7 = $rs['dt_inicial_opcional_7'];
			$cDTO->dt_final_opcional_7 = $rs['dt_final_opcional_7'];
			$cDTO->cod_opcional_8 = $rs['cod_opcional_8'];
			$cDTO->dt_inicial_opcional_8 = $rs['dt_inicial_opcional_8'];
			$cDTO->dt_final_opcional_8 = $rs['dt_final_opcional_8'];
			$cDTO->cod_opcional_9 = $rs['cod_opcional_9'];
			$cDTO->dt_inicial_opcional_9 = $rs['dt_inicial_opcional_9'];
			$cDTO->dt_final_opcional_9 = $rs['dt_final_opcional_9'];
			$cDTO->cod_opcional_10 = $rs['cod_opcional_10'];
			$cDTO->dt_inicial_opcional_10 = $rs['dt_inicial_opcional_10'];
			$cDTO->dt_final_opcional_10 = $rs['dt_final_opcional_10'];
			$cDTO->cod_lotacao = $rs['cod_lotacao'];
			$cDTO->cod_local_trabalho = $rs['cod_local_trabalho'];
			$cDTO->ind_subsidio = $rs['ind_subsidio'];
			$cDTO->cod_municipio_ibge = $rs['cod_municipio_ibge'];

			array_push($ListClientes, $cDTO);
		}

		return $ListClientes;
	}

    function ConfirmaCliente($id_cliente){
		$query = "	
                UPDATE clientes
				SET clifinalizado = 1
				WHERE id = '{$id_cliente}';
		";

		return mysqli_query($this->conexao, $query);
	}
        
    function ExcluirCliente($id){
		$query = "	
                UPDATE clientes
                SET ativado = 0
				WHERE id = '{$id}';
		";
		$dependenteDAO = new DependentesDAO($this->conexao);
		$dependenteDAO->removeDependentePorCliente($id);

		return mysqli_query($this->conexao, $query);
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

	function listaClientesAnalise() {

		$ListClientes = array();
		$query = " 
                    SELECT 
                        a.id,
                        a.clinome,
                        a.clinasc,
                        a.clicpf,
                        a.cliestadocivil,
                        a.clisexo,
                        a.clinomemae,
                        a.cliendereco,
                        a.clibairro,
                        a.clicidade,
                        a.cliuf,
                        a.clicep,
                        a.cliendnumero,
                        a.clitelefone,
                        a.cliemail,
                        DATE_FORMAT(a.data,'%d/%m/%Y') as data,
                        b.planome
                    FROM
                        clientes a
                            INNER JOIN
                        plano b ON a.cliplano = b.id
                    WHERE
                        a.ativado = 1 AND a.clifinalizado = 0
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
			$cliente->data = $clientes_array['data'];
            $cliente->nomeplano = $clientes_array['planome'];      
			
			array_push($ListClientes, $cliente);
		}

		return $ListClientes;
	}

	function listaClientes() {
		$ListClientes = array();
		$query = " 
                    SELECT 
                        a.id,
                        a.clinome,
                        a.clinasc,
                        a.clicpf,
                        a.cliestadocivil,
                        a.clisexo,
                        a.clinomemae,
                        a.cliendereco,
                        a.clibairro,
                        a.clicidade,
                        a.cliuf,
                        a.clicep,
                        a.cliendnumero,
                        a.clitelefone,
                        a.cliemail,
                        DATE_FORMAT(a.data,'%d/%m/%Y') as data,
                        b.planome
                    FROM
                        clientes a
                            INNER JOIN plano b ON a.cliplano = b.id
                    WHERE
                        a.ativado = 1
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
			$cliente->data = $clientes_array['data'];
            $cliente->nomeplano = $clientes_array['planome'];      
			
			array_push($ListClientes, $cliente);
		}

		return $ListClientes;
	}	

    function listaClientesFinalizados() {
		$ListClientes = array();
		$query = " 
                    SELECT 
                        a.id,
                        a.clinome,
                        a.clinasc,
                        a.clicpf,
                        a.cliestadocivil,
                        a.clisexo,
                        a.clinomemae,
                        a.cliendereco,
                        a.clibairro,
                        a.clicidade,
                        a.cliuf,
                        a.clicep,
                        a.cliendnumero,
                        a.clitelefone,
                        a.cliemail,
                        DATE_FORMAT(a.data,'%d/%m/%Y') as data,
                        b.planome
                    FROM
                        clientes a
                            INNER JOIN
                        plano b ON a.cliplano = b.id
                    WHERE
                        a.ativado = 1 AND a.clifinalizado = 1
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
			$cliente->data = $clientes_array['data'];
            $cliente->nomeplano = $clientes_array['planome'];      
			
			array_push($ListClientes, $cliente);
		}

		return $ListClientes;
	}
        
    function listaClientesporCPF($cpf) {

		$ListClientes = array();
		$query = " 
                    SELECT 
                        a.id,
                        a.clinome,
                        a.clinasc,
                        a.clicpf,
                        a.cliestadocivil,
                        a.clisexo,
                        a.clinomemae,
                        a.cliendereco,
                        a.clibairro,
                        a.clicidade,
                        a.cliuf,
                        a.clicep,
                        a.cliendnumero,
                        a.clitelefone,
                        a.cliemail,
                        a.data,
                        b.planome
                    FROM
                        clientes a
                            INNER JOIN
                        plano b ON a.cliplano = b.id
                    WHERE
                        a.ativado = 1 AND a.clicpf = '{$cpf}'
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
			$cliente->data = $clientes_array['data'];
            $cliente->nomeplano = $clientes_array['planome'];      
			
			array_push($ListClientes, $cliente);
		}

		return $ListClientes;
	}

	function retornaClientePorCPF($cpf_cliente) {

            $query = " 
                SELECT 
                    a.id,
                    a.clinome,
                    a.clicpf,
                    DATE_FORMAT(a.clinasc,'%d/%m/%Y') as clinasc,
                    d.descricao as estadoCivil,
                    a.cliemail,
                    c.descricao as sexo,
                    a.clinomemae,
                    a.clitelefone,
                    a.clicelular,
                    a.clicep,                    
                    a.cliendnumero,
                    a.cliendereco,
                    a.clibairro,
                    a.cliuf,
                    a.clicidade,
                    b.planome
                FROM
                    clientes a 
                INNER JOIN
                    plano b on a.cliplano = b.id
                INNER JOIN
                    sexo c on a.clisexo = c.id
                INNER JOIN
                    estadoCivil d on a.cliestadocivil = d.id
                WHERE
                    a.clicpf = '{$cpf_cliente}' and a.ativado = 1;
            ";
            
            $resultado = mysqli_query($this->conexao, $query);
            $resultArray = mysqli_fetch_assoc($resultado);

            $cliente = new Clientes();
            $cliente->id = $resultArray['id'];
            $cliente->clinome = $resultArray['clinome'];
            $cliente->clicpf = $resultArray['clicpf'];
            $cliente->clinasc = $resultArray['clinasc'];
            $cliente->cliestadocivil = $resultArray['estadoCivil'];
            $cliente->cliemail = $resultArray['cliemail'];
            $cliente->clisexo = $resultArray['sexo'];
            $cliente->clinomemae = $resultArray['clinomemae'];
            $cliente->clitelefone = $resultArray['clitelefone'];
            $cliente->clicep = $resultArray['clicep'];
            $cliente->cliendereco = $resultArray['cliendereco'];
            $cliente->clicelular = $resultArray['clicelular'];
            $cliente->clibairro = $resultArray['clibairro'];
            $cliente->cliuf = $resultArray['cliuf'];
            $cliente->clicidade = $resultArray['clicidade'];
            $cliente->cliendnumero = $resultArray['cliendnumero'];
            $cliente->nomeplano = $resultArray['planome'];
            
            return $cliente;
	}
        
    function retornaClientePorID($id_cliente) {
            $query = " 
                SELECT 
                    a.clinome,
                    a.clicpf,
                    DATE_FORMAT(a.clinasc,'%d/%m/%Y') as clinasc,
                    d.descricao as estadoCivil,
                    a.cliemail,
                    c.descricao as sexo,
                    a.clinomemae,
                    a.clitelefone,
                    a.clicelular,
                    a.clicep,                    
                    a.cliendnumero,
                    a.cliendereco,
                    a.clibairro,
                    a.cliuf,
                    a.clicidade,
                    b.planome,
                    a.cliplano
                FROM
                    clientes a 
                INNER JOIN
                    plano b on a.cliplano = b.id
                INNER JOIN
                    sexo c on a.clisexo = c.id
                INNER JOIN
                    estadoCivil d on a.cliestadocivil = d.id
                WHERE
                    a.id = '{$id_cliente}' and a.ativado = 1;
            ";
            
            $resultado = mysqli_query($this->conexao, $query);
            $resultArray = mysqli_fetch_assoc($resultado);

            $cliente = new Clientes();
            $cliente->clinome = $resultArray['clinome'];
            $cliente->clicpf = $resultArray['clicpf'];
            $cliente->clinasc = $resultArray['clinasc'];
            $cliente->cliestadocivil = $resultArray['estadoCivil'];
            $cliente->cliemail = $resultArray['cliemail'];
            $cliente->clisexo = $resultArray['sexo'];
            $cliente->clinomemae = $resultArray['clinomemae'];
            $cliente->clitelefone = $resultArray['clitelefone'];
            $cliente->clicep = $resultArray['clicep'];
            $cliente->cliendereco = $resultArray['cliendereco'];
            $cliente->clicelular = $resultArray['clicelular'];
            $cliente->clibairro = $resultArray['clibairro'];
            $cliente->cliuf = $resultArray['cliuf'];
            $cliente->clicidade = $resultArray['clicidade'];
            $cliente->cliendnumero = $resultArray['cliendnumero'];
            $cliente->nomeplano = $resultArray['planome'];
            $cliente->idplano = $resultArray['cliplano'];
            
        return $cliente;
	}

}