<?php 
    session_start();
    
    require_once($_SERVER['DOCUMENT_ROOT']."/amildental/template/cabecalho.php");
    //require_once($_SERVER['DOCUMENT_ROOT']."/MilAmigos/views/banner-principal.php");

    //$produtoDAO = new ProdutoDAO($conexao); 
?>
<main>
    <div class="container-fluid titulo">
            <hr>
    </div>
    <div class="container" style="background-color: #E8E8E8">
        <div class="row">
            <div class="col-md-12" align="center" style="margin-top: 20px; color: #009AC2">
                <h4>Recebemos sua solicitação de contratação.</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12" style="margin-top: 30px;">
                <p>Prezado(a) #NOME#, parabéns!</p>
            </div>            
        </div>
        <div class="row">
            <div class="col-md-12">
                <p>A solicitação do plano Amil Dental, foi concluída com sucesso.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p>Para efetivar a contratação, imprima o <a href="#">ARQUIVO</a> e encaminhe assinado para o email: <a href="#">amildentalrj@anajustra.org.br</a></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p style="color:#009AC2">Plano contratado</p>                
            </div>
        </div>
        <div class="row">
            <div class="col-md-12" style="margin-top: -15px;">
                <p>#PLANO#</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p style="color:#009AC2">Informações do titular</p>                
            </div>
        </div>
        <div class="row">
            <div class="col-md-12" style="margin-top: -15px;">
                <p>Nome: #NOME#</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12" style="margin-top: -15px;">
                <p>CPF: #CPF#</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12" style="margin-top: -15px;">
                <p>Data de nascimento:  #DATA_NASCIMENTO#</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12" style="margin-top: -15px;">
                <p>Estado civil: #ESTADO_CIVIL#</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12" style="margin-top: -15px;">
                <p>Email: #EMAIL#</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12" style="margin-top: -15px;">
                <p>Sexo: #SEXO#</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12" style="margin-top: -15px;">
                <p>Nome da mãe: #NOME-MAE#</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12" style="margin-top: -15px;">
                <p>Telefone: #TELEFONE#</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12" style="margin-top: -15px;">
                <p>Nome: #NOME#</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p style="color:#009AC2">Endereço de correspondência</p>                
            </div>
        </div>
        <div class="row">
            <div class="col-md-12" style="margin-top: -15px;">
                <p>CEP: #CEP#</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12" style="margin-top: -15px;">
                <p>Número: #NUMERO#</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12" style="margin-top: -15px;">
                <p>Logradouro: #LOGRADOURO#</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12" style="margin-top: -15px;">
                <p>Bairro: #BAIRRO#</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12" style="margin-top: -15px;">
                <p>Complemento: #COMPLEMENTO#</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12" style="margin-top: -15px;">
                <p>UF: #UF#</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12" style="margin-top: -15px;">
                <p>Cidade: #CIDADE#</p>
            </div>
        </div>
    </div>
</main>
<?php
    require_once($_SERVER['DOCUMENT_ROOT']."/amildental/template/cabecalho.php");
?>

