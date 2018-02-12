<?php
	require_once($_SERVER['DOCUMENT_ROOT']."/amildental/class/include_global.php");

	//require_once("mostra-alerta.php");

	if($title_page == null || $title_page == ""){
		$title_page = "Amil Dental";
	}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Formulário para adquirir o plano dental da amil através da associação Anajustra">
        <meta name="keywords" content="Anajustra, Amil dental, Formulário">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>Anajustra - Formulário Amil Dental</title>
        
        <!--Estilo-->
        <link rel="stylesheet" type="text/css" href="/amildental/biblioteca/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="/amildental/biblioteca/css/style.css">
        
        <!--Javascript-->
        <script type="text/javascript" src="/amildental/biblioteca/js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="/amildental/biblioteca/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="/amildental/biblioteca/js/formulario.js"></script>
        <script type="text/javascript" src="/amildental/biblioteca/js/jquery.mask.js"></script>
       
        <style>
            .btn-primary {
                color: white;
                background-color: #00BFDF; 
                border-color: #00BFDF;
            }
            
            .btn-primary:active{
                color: white;
                background-color: #2894B3; 
                border-color: #2894B3;
                cursor:pointer;
            }
            
             .btn-primary:hover{
                color: white;
                background-color: #2894B3; 
                border-color: #2894B3;
                cursor:pointer;
            }
        </style>         
       
    </head>
    <body>
        <header>
            <div class="azul">                  
                </div>          
                <div class="zinza">                   
                </div>           
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <a href="/amildental/">
                            <img src="/amildental/biblioteca/img/logo.png" class="logoAmil">
                        </a>
                    </div>
                    <div class="col-md-9">
                        <nav class="navbar navbar-toggleable-md navbar-light menutopo">
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                              <ul class="navbar-nav mr-auto">
                                <li class="nav-item">
                                  <a class="nav-link" href="#">Diferencias e Vantagens</a>
                                </li>   
                                <li class="nav-item">
                                  <a class="nav-link" href="#">Conheça o Plano</a>
                                </li> 
                                <li class="nav-item">
                                  <a class="nav-link" href="#">Dúvidas</a>
                                </li> 
                                <li class="nav-item">
                                  <a class="nav-link" href="#">Buscar Dentista</a>
                                </li> 
                                <li class="nav-item">
                                  <a class="nav-link" href="/amildental/contato.php">Contato</a>
                                </li>
                              </ul>                              
                            </div>
                        </nav>
                    </div>
                </div>                  
            </div>        
        </header>     