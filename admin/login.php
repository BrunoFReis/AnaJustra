<!DOCTYPE html>
<html lang="pt-br">
  
<head>
    <meta charset="utf-8">
    <title>Login - Amil Dental</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes"> 
    
	<link href="/amildental/admin/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="/amildental/admin/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />

	<link href="/amildental/admin/css/font-awesome.css" rel="stylesheet">
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
	    
	<link href="/amildental/admin/css/style.css" rel="stylesheet" type="text/css">
	<link href="/amildental/admin/css/pages/signin.css" rel="stylesheet" type="text/css">
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
			
			<a class="brand" href="/amildental/">
				<img class="mb-4" src="/amildental/biblioteca/img/logo-v2.png" alt="" width="120">
			</a>			
	
		</div> <!-- /container -->
		
	</div> <!-- /navbar-inner -->
	
</div> <!-- /navbar -->



<div class="account-container">
	
	<div class="content clearfix">
		
		<form action="/amildental/admin/dashboard.php" method="post">
		
			<h1>Entrar</h1>		
			
			<div class="login-fields">
				
				<p>Por favor fornece seus dados</p>
				
				<div class="field">
					<label for="username">Login</label>
					<input type="text" id="login" name="login" value="" placeholder="Login" class="login username-field" />
				</div> <!-- /field -->
				
				<div class="field">
					<label for="password">Senha:</label>
					<input type="password" id="senha" name="senha" value="" placeholder="Senha" class="login password-field"/>
				</div> <!-- /password -->
				
			</div> <!-- /login-fields -->
			
			<div class="login-actions">
				
                            <span class="login-checkbox">
                                    <input id="Field" name="Field" type="checkbox" class="field login-checkbox" value="First Choice" tabindex="4" />
                                    <label class="choice" for="Field">Manter conectado</label>
                            </span>

                            <button class="button btn btn-success btn-large" onclick="loginUsuario()">Entrar</button>
				
			</div> <!-- .actions -->
		</form>
		
	</div> <!-- /content -->
	
</div> <!-- /account-container -->



<script src="js/jquery-1.7.2.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/signin.js"></script>

    <script>

        function loginUsuario(){

            var login = document.getElementById('login').value;
            var senha = document.getElementById('senha').value;
            
            alert(login);
            alert(senha);

            window.location.href = "views/confereSenha.php?login="+login+"&senha="+senha+"";
        }

    </script>

</body>

</html>
