<?php 
    session_start();
    require_once($_SERVER['DOCUMENT_ROOT']."/amildental/template/cabecalho.php");

    //$produtoDAO = new ProdutoDAO($conexao); 
?>
    <main>
        <div class="container-fluid titulo">
            <hr>
        </div>
        <div class="container">
	        <form method="POST" action="">
	            <div id="titular" style="display:block">
	                <div class="row justify-content-center">

	                    <div class="col-md-6 align-self-center">
	                        <h4 class="IconContato">Contato</h4>
	                        <div class="form-group">
	                            <div class="row">
	                                <div class="col-md-12">
	                                    <input type="text" name="nome" id="nome" class="form-control" placeholder="Nome" required="required">
	                                </div>
	                            </div>
	                        </div>
	                        <div class="form-group">
	                            <div class="row">
	                                <div class="col-md-12">
	                                    <input type="text" name="cpf" id="cpf" class="form-control" placeholder="CPF" required="required">
	                                </div>
	                            </div>
	                        </div>	                           
	                        <div class="form-group">
	                            <div class="row">                                           
	                                <div class="col-md-12">
	                                    <input type="text" name="email" id="email" class="form-control" placeholder="E-mail" required="required">
	                                </div>
	                            </div>
	                        </div>
	                         <div class="form-group">
	                            <div class="row">
	                                <div class="col-md-12">
	                                    <input type="text" name="txtCelular" id="txtCelular" class="form-control" placeholder="Celular" required="required">
	                                </div>                                           
	                            </div>
	                        </div>

				            <div class="form-group">
				                <div class="row botao">
				                    <div class="col-md-12" align="center">
				                        <button type="button" class="btn btn-primary">
				                         	Enviar
			                         	</button>
				                    </div>                            
				                </div>
				            </div>        	                        
	                    </div>
                    </div>
	            </div>
	        </form>
	     </div>
    </main>

<?php
    require_once($_SERVER['DOCUMENT_ROOT']."/amildental/template/cabecalho.php");
?>