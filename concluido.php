<?php 
    session_start();
    
    require_once($_SERVER['DOCUMENT_ROOT']."/amildental/template/cabecalho.php");

    //$produtoDAO = new ProdutoDAO($conexao); 
    $cli_cpf = $_GET["cli_cpf"];
    
    $clientesDAO = new ClientesDAO($conexao);
    
    $cliente = $clientesDAO->retornaClientePorCPF($cli_cpf);
    
?>
<main>
    <div class="container-fluid titulo">
            <hr>
    </div>
    <div class="container" style="background-color: #E8E8E8">
        <div class="row">
            <div class="col-md-12" align="center" style="margin-top: 20px; color: #009AC2">
                <h3><strong>Recebemos sua solicitação de contratação.</strong></h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12" style="margin-top: 30px;">
                <p>Prezado(a) <strong><?=$cliente->clinome?></strong>, parabéns!</p>
            </div>            
        </div>
        <div class="row">
            <div class="col-md-12">
                <p>A solicitação do plano Amil Dental, foi concluída com sucesso.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p>Para efetivar a contratação, imprima o <a href="contrato.php?cli_id=<?=$cliente->id?>"><strong>ARQUIVO</strong></a> e encaminhe assinado para o email: <a href="#">amildentalrj@anajustra.org.br</a></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p style="color:#009AC2"><strong>Plano contratado</strong></p>                
            </div>
        </div>
        <div class="row">
            <div class="col-md-12" style="margin-top: -15px;">
                <p><strong><?=$cliente->nomeplano?></strong></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p style="color:#009AC2"><strong>Informações do titular</strong></p>                
            </div>
        </div>
        <div class="row">
            <div class="col-md-12" style="margin-top: -15px;">
                <p><strong>Nome:</strong> <?=$cliente->clinome?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12" style="margin-top: -15px;">
                <p><strong>CPF:</strong> <?=$cliente->clicpf?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12" style="margin-top: -15px;">
                <p><strong>Data de nascimento:</strong> <?=$cliente->clinasc?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12" style="margin-top: -15px;">
                <p><strong>Estado civil:</strong> <?=$cliente->cliestadocivil?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12" style="margin-top: -15px;">
                <p><strong>Email:</strong> <?=$cliente->cliemail?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12" style="margin-top: -15px;">
                <p><strong>Sexo:</strong> <?=$cliente->clisexo?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12" style="margin-top: -15px;">
                <p><strong>Nome da mãe:</strong> <?=$cliente->clinomemae?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12" style="margin-top: -15px;">
                <p><strong>Telefone:</strong> <?=$cliente->clicelular?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p style="color:#009AC2"><strong>Endereço de correspondência</strong></p>                
            </div>
        </div>
        <div class="row">
            <div class="col-md-12" style="margin-top: -15px;">
                <p><strong>CEP:</strong> <?=$cliente->clicep?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12" style="margin-top: -15px;">
                <p><strong>Número:</strong> <?=$cliente->cliendnumero?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12" style="margin-top: -15px;">
                <p><strong>Logradouro:</strong> <?=$cliente->cliendereco?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12" style="margin-top: -15px;">
                <p><strong>Bairro:</strong> <?=$cliente->clibairro?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12" style="margin-top: -15px;">
                <p><strong>UF:</strong> <?=$cliente->cliuf?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12" style="margin-top: -15px;">
                <p><strong>Cidade:</strong> <?=$cliente->clicidade?></p>
            </div>
        </div>
    </div>
</main>