<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Formulário para adquirir o plano dental da amil através da associação Anajustra">
        <meta name="keywords" content="Anajustra, Amil dental, Formulário">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>Anajustra - Formulário Amil Dental</title>
        
        <!--Estilo-->
        <link rel="stylesheet" type="text/css" href="biblioteca/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="biblioteca/css/style.css">
        
        <!--Javascript-->
        <script type="text/javascript" src="biblioteca/js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="biblioteca/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="biblioteca/js/formulario.js"></script>
        <script type="text/javascript" src="biblioteca/js/jquery.mask.js"></script>
       
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
        <?php
            
        ?>  
        <header>
            <div class="azul">                  
                </div>          
                <div class="zinza">                   
                </div>           
            <div class="container">
                <div class="row">
                    <div class="col-md-3 logoAmil">                        
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
                                  <a class="nav-link" href="#">Contato</a>
                                </li>
                              </ul>                              
                            </div>
                        </nav>
                    </div>
                </div>                  
            </div>        
        </header> 
        <main>
            <div class="container-fluid titulo">
                <hr>
            </div>
            <div class="container">
                <div id="titularidade" style="Display:block;">
                    <div class="row menuformulario">
                         <div class="col-md-4 checked" align="center">
                             <strong>Titular</strong>                            
                            </div>
                            <div class="col-md-4" align="center">
                               Dependente                            
                            </div>
                            <div class="col-md-4" align="center">
                               Finalizar                            
                            </div>
                    </div>
                </div>
                    <div id="dependencia" style="Display:none;">
                    <div class="row menuformulario">
                         <div class="col-md-4 " align="center">
                                Titular                            
                            </div>
                            <div class="col-md-4 checked" align="center">
                                <strong>Dependente</strong>                            
                            </div>
                            <div class="col-md-4" align="center">
                               Finalizar                            
                            </div>
                    </div>
                </div>                
                 <div id="Finalizar" style="Display:none;">
                    <div class="row menuformulario">
                         <div class="col-md-4 " align="center">
                                Titular                            
                            </div>
                            <div class="col-md-4" align="center">
                               Dependente                            
                            </div>
                            <div class="col-md-4 checked" align="center">
                                <strong>Finalizar</strong>                            
                            </div>
                    </div>
                </div>
                    <form>
                        <div id="titular" style="Display:block">
                            <div class="row"> 
                                <div class="col-md-6">
                                    <h4 class="IconPessoa">Dados Pessoais</h4>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <input type="text" name="txtNomeTitular" id="txtNomeTitular" class="form-control" placeholder="Nome do Titular" required="required">
                                            </div>
                                        </div>
                                    </div>     
                                    <div class="form-group">
                                        <div class="row">                                           
                                            <div class="col-md-6">
                                                <input type="text" name="txtDataNascimento" id="txtDataNascimento" class="form-control" placeholder="Data de Nascimento" required="required">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" name="txtcpf" id="txtcpf" class="form-control" placeholder="CPF" required="required">
                                            </div>
                                        </div>
                                    </div>   
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <select name="estado_civil_adesoes" id="estadocivil" class="form-control" required="required">
                                                    <option value="" selected="selected" disabled>Estado civil</option>
                                                    <option value="1">Solteiro</option>
                                                    <option value="2">Casado</option>
                                                    <option value="3">Viuvo</option>
                                                    <option value="4">Separado</option>
                                                    <option value="5">Divorciado</option>                                                    
                                                    <option value="6">Outros</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <select name="sexo" id="sexo" class="form-control" required="required">
                                                    <option value="" selected="selected" disabled>Sexo</option>
                                                    <option value="1">Masculino</option>
                                                    <option value="2">Feminino</option>                                        
                                                </select>
                                            </div>
                                        </div>
                                    </div>                                      
                                     <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <input type="text" txt="txtNomeMae" id="txtNomeMae" class="form-control" placeholder="Nome completo mãe" required="required">
                                            </div>                                            
                                        </div>
                                    </div>  
                                    <h4 class="IconContato">Contato</h4>                       
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input type="text" name="txtCelular" id="txtCelular" class="form-control" placeholder="Celular" required="required">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" name="txtTelefoneResidencial" id="txtTelefoneResidencial" class="form-control" placeholder="Telefone Residencial" required="required">
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="form-group">
                                        <div class="row">                                            
                                            <div class="col-md-12">
                                                <input type="email" name="txtEmail" id="txtEmail" class="form-control" placeholder="Email" required="required">
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                                <div class="col-md-6">
                                   <h4 class="IconEndereco">Endereço</h4>          
                                   <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input type="text" name="txtCEP" id="txtCEP"  class="form-control" placeholder="CEP" required="required">
                                            </div>
                                            <div class="col-md-6">
                                                <select name="uf_adesoes" class="form-control" id="uf" required="required">
                                                    <option value="" selected="selected" disabled>UF</option>
                                                    <option value="AC">AC</option>
                                                    <option value="AL">AL</option>
                                                    <option value="AM">AM</option>
                                                    <option value="AP">AP</option>
                                                    <option value="BA">BA</option>
                                                    <option value="CE">CE</option>
                                                    <option value="DF">DF</option>
                                                    <option value="ES">ES</option>
                                                    <option value="GO">GO</option>
                                                    <option value="MA">MA</option>
                                                    <option value="MG">MG</option>
                                                    <option value="MS">MS</option>
                                                    <option value="MT">MT</option>
                                                    <option value="PA">PA</option>
                                                    <option value="PB">PB</option>
                                                    <option value="PE">PE</option>
                                                    <option value="PI">PI</option>
                                                    <option value="PR">PR</option>
                                                    <option value="RJ">RJ</option>
                                                    <option value="RN">RN</option>
                                                    <option value="RO">RO</option>
                                                    <option value="RR">RR</option>
                                                    <option value="RS">RS</option>
                                                    <option value="SC">SC</option>
                                                    <option value="SE">SE</option>
                                                    <option value="SP">SP</option>
                                                    <option value="TO">TO</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input type="text" name="txtCidade" id="txtCidade" class="form-control" placeholder="Cidade" required="required">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" name="txtBairro" id="txtBairro" class="form-control" placeholder="Bairro" required="required">
                                            </div>
                                        </div>
                                    </div>  
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <input type="text" name="txtLogradouro" id="txtLogradouro" class="form-control" placeholder="Logradouro" required="required">
                                            </div>                                
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input type="text" name="txtNumero" id="txtNumero" class="form-control" placeholder="Número" required="required">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" name="txtComplemento" id="txtComplemento" class="form-control" placeholder="Complemento" required="required">
                                            </div>
                                        </div>
                                    </div>                     
                                </div>
                            </div>                        
                        <div class="form-group">
                            <div class="row botao">
                                <div class="col-md-12" align="center">
                                     <button type="button" class="btn btn-primary" onclick="SalvarPaginaTitular()">Salvar e Continuar</button>
                                </div>                            
                            </div>
                        </div>        
                        </div>
                        <div id="dependente" style="Display:none"> 
                        <div class="row">
                            <div class="col-md-6">
                                <div  class="form-group">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input type="text" class="form-control" placeholder="Nome Completo do Dependente">
                                        </div>
                                    </div>
                                </div>                        
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" placeholder="CPF">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" placeholder="RG">
                                        </div>
                                    </div>
                                </div>    
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <select name="dp_graudeparentesco" id="dp_graudeparentesco" class="form-control" required="required">
                                                <option value="" selected="selected" disabled="disabled">Parentesco</option>
                                                <option value="1">Pai / Mãe</option>
                                                <option value="2">Conjuge</option>
                                                <option value="3">Filho(a)</option>
                                                <option value="6">Neto(a)</option>
                                                <option value="7">Irmão</option>
                                                <option value="8">Avós</option>
                                                <option value="9">Tios(as)</option>
                                                <option value="10">Sobrinho(a)</option>
                                                <option value="11">Bisnetos(as)</option>
                                                <option value="12">Sogro</option>
                                                <option value="13">Genro e Nora</option>
                                                <option value="14">Padrastro e Madrasta</option>
                                                <option value="15">Enteado</option>
                                                <option value="16">Cunhado (a)</option>
                                                <option value="17">Filho (a) Invalido (a)</option>
                                                <option value="18">Filho (a) Universitário (a)</option>                                                
                                                </select>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" placeholder="Data Nascimento">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" placeholder="Orgão Expeditor/UF">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" placeholder="Data Expedição RG">
                                        </div>
                                    </div>
                                </div>  
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <select name="estado_civil_adesoes" id="estadocivil" class="form-control" required="required">
                                                <option value="" selected="selected" disabled>Estado civil</option>
                                                <option value="CASADO">Casado</option>
                                                <option value="SOLTEIRO">Solteiro</option>
                                                <option value="DIVORCIADO">Divorciado</option>
                                                <option value="VIUVO">Viuvo</option>
                                                <option value="DESQUITADO">Desquitado</option>                                       
                                                <option value="SEPARADO">Separado</option>
                                                <option value="UNIÃO ESTÁVEL">União EstávelL</option>
                                                <option value="AMAZIADO">Amaziado</option>
                                                <option value="CONVIVENTE">Convivente</option>
                                                <option value="MARITAL">Marital</option>
                                                <option value="OUTROS">Outros</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <select name="estado_civil_adesoes" id="estadocivil" class="form-control" required="required">
                                                <option value="" selected="selected" disabled>Sexo</option>
                                                <option value="CASADO">Masculino</option>
                                                <option value="SOLTEIRO">Feminino</option>                                        
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" placeholder="Título de Eleitor">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" placeholder="Cartão do SUS">
                                        </div>
                                    </div>
                                </div>  
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input type="text" class="form-control" placeholder="Nome completo mãe">
                                        </div>                                        
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-12" align="center" >
                                            <button type="button" width="100%" class="btn btn-primary" onclick="AdicionarDependente()">Adicionar Dependente</button>
                                        </div>                                        
                                </div>
                                </div>  
                            </div>
                            <div class="col-md-6">
                               <h4 class="IconPessoa">Titular</h4>
                               <table width="100%" style="margin-bottom: 15px;">
                                   <tbody>
                                       <tr style="background-color:#f9f9f9; padding: 4px;" >
                                           <th style="padding: 8px; border-top: 1px solid #ddd; vertical-align: top;">Titular</th>
                                       </tr>
                                   </tbody>
                               </table>                               
                               <h4 class="IconDependente">Dependente</h4>                       
                                <table width="100%" style="margin-bottom: 15px;">
                                   <tbody>
                                       <tr style="background-color:#f9f9f9; padding: 4px;" >
                                           <th style="padding: 8px; border-top: 1px solid #ddd; vertical-align: top;">Dependente</th>
                                       </tr>
                                   </tbody>
                               </table>                          
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row botao">
                                <div class="col-md-12" align="center">
                                    <button type="button" class="btn btn-primary" onclick="SalvarPaginaTitular()">Salvar e Continuar</button>                                                                       
                                </div>                            
                            </div>
                        </div>                        
                        </div>
                        <div id="finalizar" style="Display:none"> 
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="IconPlano">Plano</h4>  
                                <div  class="form-group">
                                    <div class="row">
                                        <div class="col-md-12">
                                             <input type="radio" name="optradio" value="1"> Dental 200 - Rol (ANS) + procedimentos extras + documentação ortodôntica básica - R$ 17,68
                                        </div>
                                    </div>
                                </div>
                                <div  class="form-group">
                                    <div class="row">
                                        <div class="col-md-12">
                                             <input type="radio" name="optradio" value="2"> Dental 300 - Rol (ANS) + procedimentos extras + ortodontia - R$ 75,58
                                        </div>
                                    </div>
                                </div>
                                <div  class="form-group">
                                    <div class="row">
                                        <div class="col-md-12">
                                             <input type="radio" name="optradio" value="3"> Dental 500 - Rol (ANS) + procedimentos extras + prótese de resina e porcelana - R$ 68,74
                                        </div>
                                    </div>
                                </div>
                                <div  class="form-group">
                                    <div class="row">
                                        <div class="col-md-12">
                                             <input type="radio" name="optradio" value="4"> Dental 700 - Rol (ANS) + procedimentos extras + próteses de resina e porcelana + ortodontia + clareamento convencional - R$ 108,14
                                             <hr>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">                                        
                                        <div class="col-md-12">                                            
                                            <input type="checkbox" value="1"> Autorizo a Dental Uni a cobrar o valor referente ao plano odontológico DENTAL UNI, meu e de meus dependentes.</label>
                                        </div>                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row botao">
                                <div class="col-md-12" align="center">
                                    <button type="button" class="btn btn-primary" onclick="Finalizar()">Finalizar</button>                                                                       
                                </div>                            
                            </div>
                        </div>                        
                        </div>
                    </form>
                </div>                    
            </div>
        </main>
        <footer>
            <hr>
            <div class="container rodape">
                <div class="row">
                    <div class="col-md-12" align="center">
                        <img src="biblioteca/img/anajustra.jpg">
                    </div>                     
                </div>
            </div>
        </footer>
    </body>
</html>


