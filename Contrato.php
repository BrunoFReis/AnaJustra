<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Contrato</title>
        
        <!--Estilo-->
        <link rel="stylesheet" type="text/css" href="biblioteca/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="biblioteca/css/contrato.css">
        
         <!--Javascript-->
        <script type="text/javascript" scr="biblioteca/js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" scr="biblioteca/js/bootstrap.min.js"></script>

    </head>
    <body>
        <?php 
        
            require_once($_SERVER['DOCUMENT_ROOT']."/amildental/class/include_global.php"); 
            session_start();

            $cli_id = $_GET["cli_id"];
            
            $clientesDAO = new ClientesDAO($conexao);
            $dependentesDAO = new DependentesDAO($conexao);

            $cliente = $clientesDAO->retornaClientePorID($cli_id);    
?>
        <div class="container">            
            <table width="100%" class="tabela">
                <tr>
                    <td  colspan="3" align="center" style="color: white; background-color: #0091BB;">
                        <strong>1 - INFORMAR DADOS DO TITULAR</strong>
                    </td>
                </tr>
                <tr>
                    <td><strong> Nº da Matrícula: </strong></td>
                    <td><strong> Unidade: </strong></td>
                    <td><strong> Data Admissão: </strong></td>
                </tr>
                <tr>
                    <td colspan="3"><strong> Nome Completo: <?=$cliente->clinome?></strong> </td>
                </tr>
                <tr>
                    <td colspan="2"><strong> Estado Civil: <?=$cliente->cliestadocivil?></strong></td>
                    <td><strong> Sexo: <?=$cliente->clisexo?></strong></td>
                </tr>
                <tr>
                    <td><strong> CPF: <?=$cliente->clicpf?></strong></td>
                    <td><strong> Data Nascimento: <?=$cliente->clinasc?></strong></td>
                    <td><strong> </strong></td>
                </tr> 
                <tr>
                    <td colspan="3"><strong> Nome da Mãe: <?=$cliente->clinomemae?></strong></td>
                </tr>
                <tr>
                    <td colspan="2"><strong> Endereço Residencial: <?=$cliente->cliendereco?></strong></td>
                    <td><strong> Nº: <?=$cliente->cliendnumero?></strong></td>                    
                </tr> 
                <tr>
                    <td><strong> Bairro: <?=$cliente->clibairro?></strong></td>
                    <td><strong> Cidade: <?=$cliente->clicidade?></strong></td>
                    <td><strong> UF: <?=$cliente->cliuf?></strong></td>
                </tr>
                <tr>
                    <td><strong> CEP: <?=$cliente->clicep?></strong></td>
                    <td><strong> Tel: <?=$cliente->clicelular?></strong></td>
                    <td><strong> E-mail: <?=$cliente->cliemail?></strong></td>
                </tr>
                <tr>
                    <td  colspan="3" align="center" style="color: white; background-color: #0091BB;">
                        <strong>2 - INFORMAR DADOS DOS DEPENDENTES E AGREAGADOS</strong>
                    </td>
                </tr>
                <?php
                      $list = $dependentesDAO->listaDependenteporID($cli_id);
                      $tamanho = sizeof($list);
                              
                    if($tamanho > 0){
                        foreach ($list as $dep) {
                      ?>
                          <tr>
                              <td colspan="2"><strong>Nome Completo: <?=$dep->depnome?></strong></td>
                              <td><strong>Sexo: <?=$dep->depsexo?></strong></td>
                          </tr>
                          <tr>
                              <td colspan="2"><strong>Parentesco: <?=$dep->parentesco?></strong></td>
                              <td><strong>Estado Civil: <?=$dep->depestadocivil?></strong></td>
                          </tr>
                          <tr>
                              <td><strong> CPF: <?=$dep->depcpf?></strong></td>
                              <td><strong> Data Nascimento: <?=$dep->depnasc?></strong></td>
                              <td style="color: red"><strong> SOS Dental: <?php if ($dep->sosdental == 0){ ?> Não <?php } else{ ?> Sim<?php } ?></strong></td>
                          </tr>
                          <tr>
                              <td colspan="3"><strong>Nome da Mãe: <?=$dep->depnomemae?></strong></td>                    
                          </tr>
                          <tr>
                              <td colspan="3" style="background-color: #D9D9D9; color: #D9D9D9">x</td>                    
                          </tr>
                      <?php
                        }
                    }
                    else {?>                            
                        <tr>
                              <td colspan="2"><strong>Nome Completo: </strong></td>
                              <td><strong>Sexo: </strong></td>
                          </tr>
                          <tr>
                              <td colspan="2"><strong>Parentesco: </strong></td>
                              <td><strong>Estado Civil: </strong></td>
                          </tr>
                          <tr>
                              <td><strong> CPF: </strong></td>
                              <td><strong> Data Nascimento: </strong></td>
                              <td style="color: red"><strong> SOS Dental: </strong></td>
                          </tr>
                          <tr>
                              <td colspan="3"><strong>Nome da Mãe: </strong></td>                    
                          </tr>
                          <tr>
                              <td colspan="3" style="background-color: #D9D9D9; color: #D9D9D9">x</td>                    
                          </tr>        
                          
                    <?php } ?>
                    
            </table>
            <table width="100%" style="margin-top: 10px;" class="tabela"s>
                <tr>
                    <td style="background-color: #0091BB;"><strong>PRODUTO</strong></td>
                    <td align="center"  style="background-color: #0091BB;"><strong>COBERTURA</strong></td>
                    <td align="center" style="color: white; background-color: #0091BB;">PREÇO</td>
                    <td align="center" style="color: white; background-color: #0091BB;">OPÇÃO</td>
                </tr>
                <tr>
                    <td align="center"><strong>Dental 200</strong> </td>
                    <td><strong>Rol (ANS) + procedimentos extras + documentação ortodôntica básica</strong></td>
                    <td align="center"><strong>R$ 17,68</strong></td>
                    <td align="center"><strong><?php if ($cliente->idplano == 1){ ?> X <?php } else{ ?><?php } ?></strong></td>
                </tr>
                <tr>
                    <td align="center"><strong>Dental 300</strong></td>
                    <td><strong>Rol (ANS) + procedimentos extras + ortodontia</strong></td>
                    <td align="center"><strong>R$ 75,58</strong></td>
                    <td align="center"><strong><?php if ($cliente->idplano == 2){ ?> X <?php } else{ ?><?php } ?></strong></td>
                </tr>
                <tr>
                    <td align="center"><strong>Dental 500</strong></td>
                    <td><strong>Rol (ANS) + procedimentos extras + prótese de resina e porcelana</strong></td>
                    <td align="center"><strong>R$ 68,74</strong></td>
                    <td align="center"><strong><?php if ($cliente->idplano == 3){ ?> X <?php } else{ ?><?php } ?></strong></td>
                </tr>
                <tr>
                    <td align="center"><strong>Dental 700</strong></td>
                    <td><strong>Rol (ANS) + procedimentos extras + próteses de resina e porcelana + ortodontia + clareamento convencional</strong></td>
                    <td align="center"><strong>R$ 108,14</strong></td>
                    <td align="center"><strong><?php if ($cliente->idplano == 4){ ?> X <?php } else{ ?><?php } ?></strong></td>
                </tr>
                <tr>
                    <td colspan="2" style="color: red"><strong>* DESEJA INCLUIR SOS DENTAL Para os dependentes/agregados - ATENDIMENTO DE URGÊNCIA DOMICILIAR?</strong></td>    
                    <td align="center" style="color: red"><strong>R$ 2,00</strong></td>
                    
                <?php
                $list = $dependentesDAO->listaDependenteporID($cli_id);
                $tamanho = sizeof($list);
                              
                    if($tamanho > 0){
                        foreach ($list as $dep) {                            
                            if ($dep->sosdental == 0){                                
                                $sosdental = 0;
                            } else{ 
                                $sosdental=1;
                                break;                                
                            } 
                        }?>
                        
                    <td align="center" style="color: red"><strong> <?php if ($sosdental == 0){ ?> <?php } else{ ?> X <?php } ?></strong></td>
                    
                    <?php }
                    else {?>      
                        <td align="center"> </td>
                    <?php } ?>                    
                </tr>
            </table>
            <table width="100%" style="margin-top:10px;">
                <tr>
                    <td  colspan="1" align="center" style="color: white; background-color: #0091BB;">
                        <strong>CONDIÇÕES PARA VALIDADE DO BENEFÍCIO</strong>
                    </td>
                </tr>
            </table>
            <div class="row" style="margin-top: 10px;">
                <div class="col-md-1" align="center">                    
                </div>
                <div class="col-md-10">
                    <strong>Declaro assumir o valor da taxa mensal correspondente a cada um dos inscritos. Autorizo assim, o desconto na mensalidade através da folha de pagamento.</strong>
                </div>
                <div class="col-md-1" align="center">                   
                </div>                    
            </div>    
            <table width="100%" style="margin-top: 40px;" class="tabela1">
                <tr>
                    <td align="center" style="color: #0091BB"><strong>---------------------------------------------------</strong></td>
                    <td align="center" style="color: #0091BB"><strong>---------------------------------------------------</strong></td>
                </tr>
                <tr>
                    <td align="center"><strong>Data</strong></td>
                    <td align="center"><strong>Assinatura do Beneficiário</strong></td>
                </tr>
            </table>
        </div>
        
    </body>
</html>
