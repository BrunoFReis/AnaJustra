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
            <table width="100%" style="margin-bottom: 10px; margin-top:10px;">
                <tr>
                    <td colspan="3" align="right">
                        <button disabled="true" style="color:white; background-color: black; font-size: 10px;">ANS - nº 326305</button>
                    </td>                       
                </tr>
                <tr>
                    <td colspan="3" align="left" style="color:#00C1DE; font-size: 20px;"><strong>FORMULÁRIO DE ADESÃO</strong></td>
                </tr>
                <tr>
                    <?php
                    $list = $dependentesDAO->listaDependenteporID($cli_id);
                    $tamanho = sizeof($list);

                        if($tamanho > 0){?>
                            
                    <td style="color:#747578"><strong>( ) INCLUSÃO TITULAR</strong></td>
                    <td style="color:#747578"><strong>( <strong style="color:black">X</strong> ) INCLUSÃO TITULAR + DEPENDENTES/AGREGADOS</strong></td>
                           <?php }

                        
                        else {?>      
                            <td><strong>( <strong style="color:black">X</strong> ) INCLUSÃO TITULAR</strong></td>
                    <td style="color:#747578"><strong>( ) INCLUSÃO TITULAR + DEPENDENTES/AGREGADOS</strong></td>
                        <?php } ?> 
                </tr>
            </table>
            <table width="100%" class="tabela">
                <tr>
                    <td  colspan="3" align="center" style="color: white; background-color: #00C1DE;">
                        <strong>TITULAR</strong>
                    </td>
                </tr>
                <tr>
                    <td><strong> Nº da Matrícula: </strong></td>
                    <td><strong> Unidade: </strong></td>
                    <td><strong> Data Admissão: </strong></td>
                </tr>
                <tr>
                    <td colspan="3"><strong> Nome Completo:</strong> <strong style="color:black"><?=$cliente->clinome?></strong> </td>
                </tr>
                <tr>
                    <td colspan="2"><strong> Estado Civil: </strong><strong style="color:black"><?=$cliente->cliestadocivil?></strong></td>
                    <td><strong> Sexo:</strong> <strong style="color:black"><?=$cliente->clisexo?></strong></td>
                </tr>
                <tr>
                    <td><strong> CPF:</strong> <strong style="color:black"><?=$cliente->clicpf?></strong></td>
                    <td><strong> Data Nascimento:</strong> <strong style="color:black"><?=$cliente->clinasc?></strong></td>
                    <td><strong> </strong></td>
                </tr> 
                <tr>
                    <td colspan="3"><strong> Nome da Mãe:</strong> <strong style="color:black"><?=$cliente->clinomemae?></strong></td>
                </tr>
                <tr>
                    <td colspan="2"><strong> Endereço Residencial:</strong> <strong style="color:black"><?=$cliente->cliendereco?></strong></td>
                    <td><strong> Nº:</strong> <strong style="color:black"><?=$cliente->cliendnumero?></strong></td>                    
                </tr> 
                <tr>
                    <td><strong> Bairro:</strong> <strong style="color:black"><?=$cliente->clibairro?></strong></td>
                    <td><strong> Cidade:</strong> <strong style="color:black"><?=$cliente->clicidade?></strong></td>
                    <td><strong> UF:</strong> <strong style="color:black"><?=$cliente->cliuf?></strong></td>
                </tr>
                <tr>
                    <td><strong> CEP:</strong> <strong style="color:black"><?=$cliente->clicep?></strong></td>
                    <td><strong> Tel:</strong> <strong style="color:black"><?=$cliente->clicelular?></strong></td>
                    <td><strong> E-mail:</strong> <strong style="color:black"><?=$cliente->cliemail?></strong></td>
                </tr>
                <tr>
                    <td  colspan="3" align="center" style="color: white; background-color: #00C1DE;">
                        <strong>DEPENDENTES / AGREGADOS</strong>
                    </td>
                </tr>
                <?php
                      $list = $dependentesDAO->listaDependenteporID($cli_id);
                      $tamanho = sizeof($list);
                              
                    if($tamanho > 0){
                        $cont = 1;
                        foreach ($list as $dep) {
                        
                      ?>
                          <tr>
                              <td colspan="2"><strong><?=$cont?>) Nome Completo:</strong> <strong style="color:black"><?=$dep->depnome?></strong></td>
                              <td><strong>Sexo:</strong> <strong style="color:black"><?=$dep->depsexo?></strong></td>
                          </tr>
                          <tr>
                              <td colspan="2"><strong>Parentesco:</strong> <strong style="color:black"><?=$dep->parentesco?></strong></td>
                              <td><strong>Estado Civil:</strong> <strong style="color:black"><?=$dep->depestadocivil?></strong></td>
                          </tr>
                          <tr>
                              <td><strong> CPF:</strong> <strong style="color:black"><?=$dep->depcpf?></strong></td>
                              <td><strong> Data Nascimento:</strong> <strong style="color:black"><?=$dep->depnasc?></strong></td>
                              <td><strong> SOS Dental:</strong> <strong style="color:black"><?php if ($dep->sosdental == 0){ ?> Não <?php } else{ ?> Sim<?php } ?></strong></td>
                          </tr>
                          <tr>
                              <td colspan="3"><strong>Nome da Mãe:</strong> <strong style="color:black"><?=$dep->depnomemae?></strong></td>                    
                          </tr>                          
                      <?php
                        $cont = $cont+1;
                        }
                    }
                    else {?>                            
                        <tr>
                              <td colspan="2"><strong>1) Nome Completo: </strong></td>
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
                    <td align="center" style="background-color: #00C1DE;color: white;"><strong>PRODUTO</strong></td>
                    <td align="center"  style="background-color: #00C1DE;color: white;"><strong>COBERTURA</strong></td>
                    <td align="center" style="color: white; background-color: #00C1DE;">PREÇO</td>
                    <td align="center" style="color: white; background-color: #00C1DE;">OPÇÃO</td>
                </tr>
                <tr>
                    <td align="left"><strong>DENTAL 200 R</strong> </td>
                    <td>ROL (ANS) + PROCEDIMENTOS EXTRAS + DOCUMENTAÇÃO ORTODÔNTICA BÁSICA</td>
                    <td align="left"><strong>R$ 17,68</strong></td>
                    <td align="center"><strong><?php if ($cliente->idplano == 1){ ?> ( <strong style="color:black">X</strong> ) <?php } else{ ?> (   )<?php } ?></strong></td>
                </tr>
                <tr>
                    <td align="left"><strong>DENTAL 300 R</strong></td>
                    <td>ROL (ANS) + PROCEDIMENTOS EXTRAS + ORTODONTIA</td>
                    <td align="left"><strong>R$ 75,58</strong></td>
                    <td align="center"><strong><?php if ($cliente->idplano == 2){ ?> ( <strong style="color:black">X</strong> ) <?php } else{ ?> (   ) <?php } ?></strong></td>
                </tr>
                <tr>
                    <td align="left"><strong>DENTAL 500 R</strong></td>
                    <td>ROL (ANS) + PROCEDIMENTOS EXTRAS + PRÓTESE DE RESINA E PORCELANA</td>
                    <td align="left"><strong>R$ 68,74</strong></td>
                    <td align="center"><strong><?php if ($cliente->idplano == 3){ ?> ( <strong style="color:black">X</strong> ) <?php } else{ ?> (   ) <?php } ?></strong></td>
                </tr>
                <tr>
                    <td align="left"><strong>DENTAL 700 R</strong></td>
                    <td>ROL (ANS) + PROCEDIMENTOS EXTRAS + PRÓTESES DE RESINA E PORCELANA + ORTODONTIA + CLAREAMENTO CONVENCIONAL</td>
                    <td align="left"><strong>R$ 108,14</strong></td>
                    <td align="center"><strong><?php if ($cliente->idplano == 4){ ?> ( <strong style="color:black">X</strong> ) <?php } else{ ?> (   ) <?php } ?></strong></td>
                </tr>
                <tr>
                    <td align="left"><strong>SOS DENTAL</strong></td>
                    <td colspan="2">BENEFICIO ADCIONAL SEM CUSTO PARA OS TITULARES, POR 12 MESES. DEPENDENTES E AGREGADOS O CUSTO SERÁ DE <strong>R$ 2,00 POR PESSOA</strong></td>    
                    
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
                        
                    <td align="center"><strong> <?php if ($sosdental == 0){ ?> (   ) <?php } else{ ?> ( <strong style="color:black">X</strong> ) <?php } ?></strong></td>
                    
                    <?php }
                    else {?>      
                        <td align="center"> </td>
                    <?php } ?>                    
                </tr>
            </table>
            <table width="100%" style="margin-top:10px;">
                <tr>
                    <td  colspan="1" align="center" style="color: white; background-color: #00C1DE;">
                        <strong>CONDIÇÕES PARA VALIDADE DO BENEFÍCIO</strong>
                    </td>
                </tr>
            </table>
            <div class="row" style="margin-top: 5px;">
                <div class="col-md-1" align="center">                    
                </div>
                <div class="col-md-10" align="center" style="color:#747578;font-size:12px;">
                    <strong>Declaro assumir o valor da taxa mensal correspondente a cada um dos inscritos. Autorizo assim, o desconto na mensalidade através da folha de pagamento.</strong>
                </div>
                <div class="col-md-1" align="center">                   
                </div>                    
            </div>    
            <table width="100%" style="margin-top: 40px;" class="tabela1">
                <tr>
                    <td align="center" style="color: #00C1DE"><strong>______________________________________________</strong></td>
                    <td align="center" style="color: #00C1DE"><strong>______________________________________________</strong></td>
                </tr>
                <tr>
                    <td align="center" style="color:#747578;"><strong>Data</strong></td>
                    <td align="center" style="color:#747578;"><strong>Assinatura do Beneficiário</strong></td>
                </tr>                
            </table>
            <table width="100%" style="margin-top: 40px; margin-right: 20px;">
                <tr>
                    <td></td>
                    <td></td>
                    <td align="right"><img src="/amildental/biblioteca/img/logo.png" class="logoAmil"</td>
                </tr>
                            
            </table>
        </div>
        
    </body>
</html>
