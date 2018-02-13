<?php
  require_once($_SERVER['DOCUMENT_ROOT']."/amildental/class/include_global.php");

  //require_once("mostra-alerta.php");

  if($title_page == null || $title_page == ""){
    $title_page = "Amil Dental";
  }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>Dashboard - Amil Dental</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600"
        rel="stylesheet">
<link href="css/font-awesome.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/pages/dashboard.css" rel="stylesheet">
<link href="css/jquery.dataTables.min.css" rel="stylesheet">
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
      </a>
      <a class="brand" href="/amildental/admin/dashboard.php">
        <img class="mb-4" src="/amildental/biblioteca/img/logo-v2.png" alt="" width="120">
      </a>
      <div class="nav-collapse">
        <ul class="nav pull-right">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="icon-user"></i> Usuário <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">              
              <li><a href="/amildental/admin">Sair</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <!--/.nav-collapse --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /navbar-inner --> 
</div>
<!-- /navbar -->