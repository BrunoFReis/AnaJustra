<?php
require_once($_SERVER['DOCUMENT_ROOT']."/amildental/class/include_global.php");
$clientesDAO = new ClientesDAO($conexao);

$arquivo = 'planilha.xls';

// Configura?es header para for?r o download
header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header ("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
header ("Cache-Control: no-cache, must-revalidate");
header ("Pragma: no-cache");
header ("Content-type: application/x-msexcel");
header ("Content-Disposition: attachment; filename=\"{$arquivo}\"" );
header ("Content-Description: PHP Generated Data" );

// Envia o conteudo do arquivo
echo $html;
?>

      <table class="display" cellspacing="0" width="100%" border="1">
        <thead>
            <tr>
				<td>NUM_CONTRATO/CNPJ</td>
				<td>COD_TIPO_OPERACAO</td>
				<td>TIPO_ASSOCIADO</td>
				<td>NUM_ASSOCIADO</td>
				<td>NUM_MATRIC_EMPRESA</td>
				<td>NUM_ASSSOCIADO_TIT</td>
				<td>NUM_MATRIC_EMPRESA_TIT</td>
				<td>NUM_CPF</td>
				<td>NUM_PIS</td>
				<td>NOME_ASSOCIADO</td>
				<td>DATA_NASCIMENTO</td>
				<td>IND_SEXO</td>
				<td>IND_ESTADO_CIVIL</td>
				<td>DATA_CASAMENTO</td>
				<td>COD_DEPENDENCIA</td>
				<td>COD_PLANO</td>
				<td>NOME_MAE</td>
				<td>DATA_ADMISSAO</td>
				<td>NOME_CARGO</td>
				<td>NOM_LOTACAO</td>
				<td>NOM_LOCAL_TRABALHO</td>
				<td>NOM_LOGRADOURO</td>
				<td>NUM_ENDERECO</td>
				<td>TXT_COMPLEMENTO</td>
				<td>NOME_BAIRRO</td>
				<td>NOME_CIDADE</td>
				<td>SGL_UF</td>
				<td>NUM_CEP</td>
				<td>NUM_DDD_TELEFONE_1</td>
				<td>NUM_TELEFONE_1</td>
				<td>DDD_CELULAR_1</td>
				<td>NUM_CELULAR_1</td>
				<td>NUM_RAMAL_1</td>
				<td>END_EMAIL_1</td>
				<td>COD_BANCO_REEMB</td>
				<td>COD_AGENCIA_REEMB</td>
				<td>NUM_DV_AGENCIA_DCC</td>
				<td>NUM_CONTA_CORRENTE_REEMB</td>
				<td>NUM_DV_CC_REEMB</td>
				<td>DATA_MOVIMENTAÇÃO</td>
				<td>COD_MOTIVO_EXCLUSAO</td>
				<td>COD_EMPRESA_NOVA</td>
				<td>NUM_MATRIC_EMPRESA_NOVO</td>
				<td>IND_CONTRIBUTARIO</td>
				<td>DATA_ADOCAO</td>
				<td>COD_OPCIONAL_1</td>
				<td>DT_INICIAL_OPCIONAL_1</td>
				<td>DT_FINAL_OPCIONAL_1</td>
				<td>COD_OPCIONAL_2</td>
				<td>DT_INICIAL_OPCIONAL_2</td>
				<td>DT_FINAL_OPCIONAL_2</td>
				<td>COD_OPCIONAL_3</td>
				<td>DT_INICIAL_OPCIONAL_3</td>
				<td>DT_FINAL_OPCIONAL_3</td>
				<td>COD_OPCIONAL_4</td>
				<td>DT_INICIAL_OPCIONAL_4</td>
				<td>DT_FINAL_OPCIONAL_4</td>
				<td>COD_OPCIONAL_5</td>
				<td>DT_INICIAL_OPCIONAL_5</td>
				<td>DT_FINAL_OPCIONAL_5</td>
				<td>COD_OPCIONAL_6</td>
				<td>DT_INICIAL_OPCIONAL_6</td>
				<td>DT_FINAL_OPCIONAL_6</td>
				<td>COD_OPCIONAL_7</td>
				<td>DT_INICIAL_OPCIONAL_7</td>
				<td>DT_FINAL_OPCIONAL_7</td>
				<td>COD_OPCIONAL_8</td>
				<td>DT_INICIAL_OPCIONAL_8</td>
				<td>DT_FINAL_OPCIONAL_8</td>
				<td>COD_OPCIONAL_9</td>
				<td>DT_INICIAL_OPCIONAL_9</td>
				<td>DT_FINAL_OPCIONAL_9</td>
				<td>COD_OPCIONAL_10</td>
				<td>DT_INICIAL_OPCIONAL_10</td>
				<td>DT_FINAL_OPCIONAL_10</td>
				<td>COD_LOTACAO</td>
				<td>COD_LOCAL_TRABALHO</td>
				<td>IND_SUBSIDIO</td>
				<td>COD_MUNICIPIO_IBGE</td>
            </tr>
        </thead>
        <tbody>
        <?php
        	$datainicio = $_POST["datainicio"];
        	$datafim = $_POST["datafim"];
        	$numcontrato = $_POST["numcontrato"];

        	foreach ($clientesDAO->listaClientesExcel($datainicio, $datafim, $numcontrato) as $cDTO) {
        ?>
            <tr>
				<td title="NUM_CONTRATO/CNPJ"><?=$cDTO->num_contrato?></td>
				<td title="COD_TIPO_OPERACAO"><?=$cDTO->cod_tipo_operacao?></td>
				<td title="TIPO_ASSOCIADO"><?=$cDTO->tipo_associado?></td>
				<td title="NUM_ASSOCIADO"><?=$cDTO->num_associado?></td>
				<td title="NUM_MATRIC_EMPRESA"><?=$cDTO->num_matric_empresa?></td>
				<td title="NUM_ASSSOCIADO_TIT"><?=$cDTO->num_asssociado_tit?></td>
				<td title="NUM_MATRIC_EMPRESA_TIT"><?=$cDTO->num_matric_empresa_tit?></td>
				<td title="NUM_CPF"><?=$cliente->clinome?><?=$cDTO->num_cpf?></td>
				<td title="NUM_PIS"><?=$cDTO->num_pis?></td>
				<td title="NOME_ASSOCIADO"><?=$cliente->clinome?><?=$cDTO->nome_associado?></td>
				<td title="DATA_NASCIMENTO"><?=$cliente->clinasc?><?=$cDTO->data_nascimento?></td>
				<td title="IND_SEXO"><?=$cDTO->ind_sexo?></td>
				<td title="IND_ESTADO_CIVIL"><?=$cDTO->ind_estado_civil?></td>
				<td title="DATA_CASAMENTO"><?=$cDTO->data_casamento?></td>
				<td title="COD_DEPENDENCIA"><?=$cDTO->cod_dependencia?></td>
				<td title="COD_PLANO"><?=$cDTO->cod_plano?></td>
				<td title="NOME_MAE"><?=$cDTO->nome_mae?></td>
				<td title="DATA_ADMISSAO"><?=$cDTO->data_admissao?></td>
				<td title="NOME_CARGO"><?=$cDTO->nome_cargo?></td>
				<td title="NOM_LOTACAO"><?=$cDTO->nom_lotacao?></td>
				<td title="NOM_LOCAL_TRABALHO"><?=$cDTO->nom_local_trabalho?></td>
				<td title="NOM_LOGRADOURO"><?=removeAcentuacao($cDTO->nom_logradouro)?></td>
				<td title="NUM_ENDERECO"><?=$cDTO->num_endereco?></td>
				<td title="TXT_COMPLEMENTO"><?=$cDTO->txt_complemento?></td>
				<td title="NOME_BAIRRO"><?=removeAcentuacao($cDTO->nome_bairro)?></td>
				<td title="NOME_CIDADE"><?=removeAcentuacao($cDTO->nome_cidade)?></td>
				<td title="SGL_UF"><?=$cDTO->sgl_uf?></td>
				<td title="NUM_CEP"><?=$cDTO->num_cep?></td>
				<td title="NUM_DDD_TELEFONE_1"><?=$cDTO->num_ddd_telefone_1?></td>
				<td title="NUM_TELEFONE_1"><?=$cDTO->num_telefone_1?></td>
				<td title="DDD_CELULAR_1"><?=$cDTO->ddd_celular_1?></td>
				<td title="NUM_CELULAR_1"><?=$cDTO->num_celular_1?></td>
				<td title="NUM_RAMAL_1"><?=$cDTO->num_ramal_1?></td>
				<td title="END_EMAIL_1"><?=$cDTO->end_email_1?></td>
				<td title="COD_BANCO_REEMB"><?=$cDTO->cod_banco_reemb?></td>
				<td title="COD_AGENCIA_REEMB"><?=$cDTO->cod_agencia_reemb?></td>
				<td title="NUM_DV_AGENCIA_DCC"><?=$cDTO->num_dv_agencia_dcc?></td>
				<td title="NUM_CONTA_CORRENTE_REEMB"><?=$cDTO->num_conta_corrente_reemb?></td>
				<td title="NUM_DV_CC_REEMB"><?=$cDTO->num_dv_cc_reemb?></td>
				<td title="DATA_MOVIMENTAÇÃO"><?=$cDTO->data_movimentacao?></td>
				<td title="COD_MOTIVO_EXCLUSAO"><?=$cDTO->cod_motivo_exclusao?></td>
				<td title="COD_EMPRESA_NOVA"><?=$cDTO->cod_empresa_nova?></td>
				<td title="NUM_MATRIC_EMPRESA_NOVO"><?=$cDTO->num_matric_empresa_novo?></td>
				<td title="IND_CONTRIBUTARIO"><?=$cDTO->ind_contributario?></td>
				<td title="DATA_ADOCAO"><?=$cDTO->data_adocao?></td>
				<td title="COD_OPCIONAL_1"><?=$cDTO->cod_opcional_1?></td>
				<td title="DT_INICIAL_OPCIONAL_1"><?=$cDTO->dt_inicial_opcional_1?></td>
				<td title="DT_FINAL_OPCIONAL_1"><?=$cDTO->dt_final_opcional_1?></td>
				<td title="COD_OPCIONAL_2"><?=$cDTO->cod_opcional_2?></td>
				<td title="DT_INICIAL_OPCIONAL_2"><?=$cDTO->dt_inicial_opcional_2?></td>
				<td title="DT_FINAL_OPCIONAL_2"><?=$cDTO->dt_final_opcional_2?></td>
				<td title="COD_OPCIONAL_3"><?=$cDTO->cod_opcional_3?></td>
				<td title="DT_INICIAL_OPCIONAL_3"><?=$cDTO->dt_inicial_opcional_3?></td>
				<td title="DT_FINAL_OPCIONAL_3"><?=$cDTO->dt_final_opcional_3?></td>
				<td title="COD_OPCIONAL_ 4"><?=$cDTO->cod_opcional_4?></td>
				<td title="DT_INICIAL_OPCIONAL_4"><?=$cDTO->dt_inicial_opcional_4?></td>
				<td title="DT_FINAL_OPCIONAL_4"><?=$cDTO->dt_final_opcional_4?></td>
				<td title="COD_OPCIONAL_ 5"><?=$cDTO->cod_opcional_5?></td>
				<td title="DT_INICIAL_OPCIONAL_5"><?=$cDTO->dt_inicial_opcional_5?></td>
				<td title="DT_FINAL_OPCIONAL_5"><?=$cDTO->dt_final_opcional_5?></td>
				<td title="COD_OPCIONAL_6"><?=$cDTO->cod_opcional_6?></td>
				<td title="DT_INICIAL_OPCIONAL_6"><?=$cDTO->dt_inicial_opcional_6?></td>
				<td title="DT_FINAL_OPCIONAL_6"><?=$cDTO->dt_final_opcional_6?></td>
				<td title="COD_OPCIONAL_7"><?=$cDTO->cod_opcional_7?></td>
				<td title="DT_INICIAL_OPCIONAL_7"><?=$cDTO->dt_inicial_opcional_7?></td>
				<td title="DT_FINAL_OPCIONAL_7"><?=$cDTO->dt_final_opcional_7?></td>
				<td title="COD_OPCIONAL_8"><?=$cDTO->cod_opcional_8?></td>
				<td title="DT_INICIAL_OPCIONAL_8"><?=$cDTO->dt_inicial_opcional_8?></td>
				<td title="DT_FINAL_OPCIONAL_8"><?=$cDTO->dt_final_opcional_8?></td>
				<td title="COD_OPCIONAL_9"><?=$cDTO->cod_opcional_9?></td>
				<td title="DT_INICIAL_OPCIONAL_9"><?=$cDTO->dt_inicial_opcional_9?></td>
				<td title="DT_FINAL_OPCIONAL_9"><?=$cDTO->dt_final_opcional_9?></td>
				<td title="COD_OPCIONAL_10"><?=$cDTO->cod_opcional_10?></td>
				<td title="DT_INICIAL_OPCIONAL_10"><?=$cDTO->dt_inicial_opcional_10?></td>
				<td title="DT_FINAL_OPCIONAL_10"><?=$cDTO->dt_final_opcional_10?></td>
				<td title="COD_LOTACAO"><?=$cDTO->cod_lotacao?></td>
				<td title="COD_LOCAL_TRABALHO  "><?=$cDTO->cod_local_trabalho?></td>
				<td title="IND_SUBSIDIO "><?=$cDTO->ind_subsidio?></td>
				<td title="COD_MUNICIPIO_IBGE"><?=$cDTO->cod_municipio_ibge?></td>                 
            </tr>
         <?php
     		}
         ?>
        </tbody>
    </table>



<?php

exit;
