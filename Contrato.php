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
        // put your code here
        ?>
        <div class="container">            
            <table width="100%" class="tabela">
                <tr>
                    <td  colspan="3" align="center" style="color: white; background-color: #0091BB;">
                        <strong>1 - INFORMAR DADOS DO TITULAR</strong>
                    </td>
                </tr>
                <tr>
                    <td><strong> Nº da Matrícula: #MATRICULA#</strong></td>
                    <td><strong> Unidade: #UNIDADE#</strong></td>
                    <td><strong> Data Admissão: #DATAADMISSAO#</strong></td>
                </tr>
                <tr>
                    <td colspan="3"><strong> Nome Completo #NOMECOMPLETO#</strong></td>
                </tr>
                <tr>
                    <td colspan="2"><strong> Estado Civil: #ESTADOCIVIL#</strong></td>
                    <td><strong> Sexo #SEXO#</strong></td>
                </tr>
                <tr>
                    <td><strong> CPF: #CPF#</strong></td>
                    <td><strong> Data Nascimento: #DATANASCIMENTO#</strong></td>
                    <td><strong> </strong></td>
                </tr> 
                <tr>
                    <td colspan="3"><strong> Nome da Mãe: #NOMEDAMAE#</strong></td>
                </tr>
                <tr>
                    <td colspan="2"><strong> Endereço Residencial: #ENDERECO#</strong></td>
                    <td><strong> Nº: #NUMERO#</strong></td>                    
                </tr> 
                <tr>
                    <td><strong> Bairro: #BAIRRO#</strong></td>
                    <td><strong> Cidade: #CIDADE#</strong></td>
                    <td><strong> UF: #UF#</strong></td>
                </tr>
                <tr>
                    <td><strong> CEP: #CEP#</strong></td>
                    <td><strong> Tel: #TELEFONE#</strong></td>
                    <td><strong> E-mail: #EMAIL#</strong></td>
                </tr>
                <tr>
                    <td  colspan="3" align="center" style="color: white; background-color: #0091BB;">
                        <strong>2 - INFORMAR DADOS DOS DEPENDENTES E AGREAGADOS</strong>
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><strong>1)Nome Completo: #NOMEDP1#</strong></td>
                    <td><strong>Sexo:</strong></td>
                </tr>
                <tr>
                    <td colspan="2"><strong>Parentesco:#PARENTESCODP1#</strong></td>
                    <td><strong>Estado Civil: #ESTADOCIVILDP1#</strong></td>
                </tr>
                <tr>
                    <td><strong> CPF: #CPFDP1#</strong></td>
                    <td><strong> Data Nascimento: #DATANASCIMENTODP1#</strong></td>
                    <td style="color: red"><strong> SOS Dental: #SOSDENTALDP1#</strong></td>
                </tr>
                <tr>
                    <td colspan="3"><strong>Nome da Mãe: #SOSDENTALDP1#</strong></td>                    
                </tr>
                <tr>
                    <td colspan="3" style="background-color: #D9D9D9; color: #D9D9D9">x</td>                    
                </tr>
                <tr>
                    <td colspan="2"><strong>2)Nome Completo: #NOMEDP2#</strong></td>
                    <td><strong>Sexo:</strong></td>
                </tr>
                <tr>
                    <td colspan="2"><strong>Parentesco:#PARENTESCODP2#</strong></td>
                    <td><strong>Estado Civil: #ESTADOCIVILDP2#</strong></td>
                </tr>
                <tr>
                    <td><strong> CPF: #CPFDP2#</strong></td>
                    <td><strong> Data Nascimento: #DATANASCIMENTODP2#</strong></td>
                    <td style="color: red"><strong> SOS Dental: #SOSDENTALDP2#</strong></td>
                </tr>
                <tr>
                    <td colspan="3"><strong>Nome da Mãe: #SOSDENTALDP2#</strong></td>                    
                </tr>
                <tr>
                    <td colspan="3" style="background-color: #D9D9D9; color: #D9D9D9">x</td>                    
                </tr>
                <tr>
                    <td colspan="2"><strong>3)Nome Completo: #NOMEDP3#</strong></td>
                    <td><strong>Sexo:</strong></td>
                </tr>
                <tr>
                    <td colspan="2"><strong>Parentesco:#PARENTESCODP3#</strong></td>
                    <td><strong>Estado Civil: #ESTADOCIVILDP3#</strong></td>
                </tr>
                <tr>
                    <td><strong> CPF: #CPFDP3#</strong></td>
                    <td><strong> Data Nascimento: #DATANASCIMENTODP3#</strong></td>
                    <td style="color: red"><strong> SOS Dental: #SOSDENTALDP3#</strong></td>
                </tr>
                <tr>
                    <td colspan="3"><strong>Nome da Mãe: #SOSDENTALDP3#</strong></td>                    
                </tr>
                <tr>
                    <td colspan="3" style="background-color: #D9D9D9; color: #D9D9D9">x</td>                    
                </tr>
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
                    <td>#PRODUTO1#</td>
                </tr>
                <tr>
                    <td align="center"><strong>Dental 300</strong></td>
                    <td><strong>Rol (ANS) + procedimentos extras + ortodontia</strong></td>
                    <td align="center"><strong>R$ 75,58</strong></td>
                    <td>#PRODUTO2#</td>
                </tr>
                <tr>
                    <td align="center"><strong>Dental 500</strong></td>
                    <td><strong>Rol (ANS) + procedimentos extras + prótese de resina e porcelana</strong></td>
                    <td align="center"><strong>R$ 68,74</strong></td>
                    <td>#PRODUTO3#</td>
                </tr>
                <tr>
                    <td align="center"><strong>Dental 700</strong></td>
                    <td><strong>Rol (ANS) + procedimentos extras + próteses de resina e porcelana + ortodontia + clareamento convencional</strong></td>
                    <td align="center"><strong>R$ 108,14</strong></td>
                    <td>#PRODUTO4#</td>
                </tr>
                <tr>
                    <td colspan="2" style="color: red"><strong>* DESEJA INCLUIR SOS DENTAL Para os dependentes/agregados - ATENDIMENTO DE URGÊNCIA DOMICILIAR?</strong></td>    
                    <td align="center" style="color: red"><strong>R$ 2,00</strong></td>
                    <td>#SOSDENTAL#</td>
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
