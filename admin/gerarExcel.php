<?php
require_once($_SERVER['DOCUMENT_ROOT']."/amildental/class/include_global.php");
$clientesDAO = new ClientesDAO($conexao);


$arquivo = 'planilha.xls';

// Configurações header para forçar o download
// header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
// header ("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
// header ("Cache-Control: no-cache, must-revalidate");
// header ("Pragma: no-cache");
// header ("Content-type: application/x-msexcel");
// header ("Content-Disposition: attachment; filename=\"{$arquivo}\"" );
// header ("Content-Description: PHP Generated Data" );

// Envia o conteúdo do arquivo
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
				<td>COD_OPCIONAL_ 4</td>
				<td>DT_INICIAL_OPCIONAL_4</td>
				<td>DT_FINAL_OPCIONAL_4</td>
				<td>COD_OPCIONAL_ 5</td>
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
				<td>COD_LOTACAO  </td>
				<td>COD_LOCAL_TRABALHO  </td>
				<td>IND_SUBSIDIO </td>
				<td>COD_MUNICIPIO_IBGE</td>
            </tr>
        </thead>
        <tbody>
        <?php
        	foreach ($clientesDAO->listaClientesExcel() as $cliente) {
        ?>
            <tr>
				<td title="NUM_CONTRATO/CNPJ"></td>
				<td title="COD_TIPO_OPERACAO"></td>
				<td title="TIPO_ASSOCIADO"></td>
				<td title="NUM_ASSOCIADO"></td>
				<td title="NUM_MATRIC_EMPRESA"></td>
				<td title="NUM_ASSSOCIADO_TIT"></td>
				<td title="NUM_MATRIC_EMPRESA_TIT"></td>
				<td title="NUM_CPF"><?=$cliente->clicpf?></td>
				<td title="NUM_PIS"></td>
				<td title="NOME_ASSOCIADO"><?=$cliente->clinome?></td>
				<td title="DATA_NASCIMENTO"><?=$cliente->clinasc?></td>
				<td title="IND_SEXO"></td>
				<td title="IND_ESTADO_CIVIL"></td>
				<td title="DATA_CASAMENTO"></td>
				<td title="COD_DEPENDENCIA"></td>
				<td title="COD_PLANO"></td>
				<td title="NOME_MAE"></td>
				<td title="DATA_ADMISSAO"></td>
				<td title="NOME_CARGO"></td>
				<td title="NOM_LOTACAO"></td>
				<td title="NOM_LOCAL_TRABALHO"></td>
				<td title="NOM_LOGRADOURO"></td>
				<td title="NUM_ENDERECO"></td>
				<td title="TXT_COMPLEMENTO"></td>
				<td title="NOME_BAIRRO"></td>
				<td title="NOME_CIDADE"></td>
				<td title="SGL_UF"></td>
				<td title="NUM_CEP"></td>
				<td title="NUM_DDD_TELEFONE_1"></td>
				<td title="NUM_TELEFONE_1"></td>
				<td title="DDD_CELULAR_1"></td>
				<td title="NUM_CELULAR_1"></td>
				<td title="NUM_RAMAL_1"></td>
				<td title="END_EMAIL_1"></td>
				<td title="COD_BANCO_REEMB"></td>
				<td title="COD_AGENCIA_REEMB"></td>
				<td title="NUM_DV_AGENCIA_DCC"></td>
				<td title="NUM_CONTA_CORRENTE_REEMB"></td>
				<td title="NUM_DV_CC_REEMB"></td>
				<td title="DATA_MOVIMENTAÇÃO"></td>
				<td title="COD_MOTIVO_EXCLUSAO"></td>
				<td title="COD_EMPRESA_NOVA"></td>
				<td title="NUM_MATRIC_EMPRESA_NOVO"></td>
				<td title="IND_CONTRIBUTARIO"></td>
				<td title="DATA_ADOCAO"></td>
				<td title="COD_OPCIONAL_1"></td>
				<td title="DT_INICIAL_OPCIONAL_1"></td>
				<td title="DT_FINAL_OPCIONAL_1"></td>
				<td title="COD_OPCIONAL_2"></td>
				<td title="DT_INICIAL_OPCIONAL_2"></td>
				<td title="DT_FINAL_OPCIONAL_2"></td>
				<td title="COD_OPCIONAL_3"></td>
				<td title="DT_INICIAL_OPCIONAL_3"></td>
				<td title="DT_FINAL_OPCIONAL_3"></td>
				<td title="COD_OPCIONAL_ 4"></td>
				<td title="DT_INICIAL_OPCIONAL_4"></td>
				<td title="DT_FINAL_OPCIONAL_4"></td>
				<td title="COD_OPCIONAL_ 5"></td>
				<td title="DT_INICIAL_OPCIONAL_5"></td>
				<td title="DT_FINAL_OPCIONAL_5"></td>
				<td title="COD_OPCIONAL_6"></td>
				<td title="DT_INICIAL_OPCIONAL_6"></td>
				<td title="DT_FINAL_OPCIONAL_6"></td>
				<td title="COD_OPCIONAL_7"></td>
				<td title="DT_INICIAL_OPCIONAL_7"></td>
				<td title="DT_FINAL_OPCIONAL_7"></td>
				<td title="COD_OPCIONAL_8"></td>
				<td title="DT_INICIAL_OPCIONAL_8"></td>
				<td title="DT_FINAL_OPCIONAL_8"></td>
				<td title="COD_OPCIONAL_9"></td>
				<td title="DT_INICIAL_OPCIONAL_9"></td>
				<td title="DT_FINAL_OPCIONAL_9"></td>
				<td title="COD_OPCIONAL_10"></td>
				<td title="DT_INICIAL_OPCIONAL_10"></td>
				<td title="DT_FINAL_OPCIONAL_10"></td>
				<td title="COD_LOTACAO  "></td>
				<td title="COD_LOCAL_TRABALHO  "></td>
				<td title="IND_SUBSIDIO "></td>
				<td title="COD_MUNICIPIO_IBGE"></td>                 
            </tr>
         <?php
     		}
         ?>
        </tbody>
    </table>



<?php

exit;