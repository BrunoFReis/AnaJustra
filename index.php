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
        <div class="container">
            <div id="titularidade" style="display: block;">
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
                <div id="dependencia" style="display:none;">
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
             <div id="Finalizar" style="display:none;">
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
            <form id="frmCadastro" method="POST" action="/amildental/views/cliente-banco.php?acao=cadastrar">
                    <div id="titular" style="display:block">
                        <div class="row"> 
                            <div class="col-md-6">
                                <h4 class="IconPessoa">Dados Pessoais</h4>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input type="text" name="clinome" id="clinome" class="form-control" onblur="confereNome(this)" placeholder="Nome do Titular" required>
                                        </div>
                                    </div>
                                </div>     
                                <div class="form-group">
                                    <div class="row">                                           
                                        <div class="col-md-6">
                                            <input type="text" name="clinasc" id="clinasc" class="form-control data" placeholder="Data de Nascimento" required>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="clicpf" id="clicpf" class="form-control cpf" onblur="ConfereCPF()" placeholder="CPF" required>
                                        </div>
                                    </div>
                                </div>   
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <select name="cliestadocivil" id="cliestadocivil" class="form-control" required>
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
                                            <select name="clisexo" id="clisexo" class="form-control" required>
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
                                            <input type="text" name="clinomemae" id="clinomemae" onblur="confereNome(this)" class="form-control" placeholder="Nome completo mãe" required>
                                        </div>                                            
                                    </div>
                                </div>  
                                <h4 class="IconContato">Contato</h4>                       
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text" name="clicelular" id="clicelular" class="form-control celular" placeholder="Celular" required>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="clitelefone" id="clitelefone" class="form-control telefone" placeholder="Telefone Residencial" required>
                                        </div>
                                    </div>
                                </div> 
                                <div class="form-group">
                                    <div class="row">                                            
                                        <div class="col-md-12">
                                            <input type="email" name="cliemail" id="cliemail" class="form-control" placeholder="Email" required>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                            <div class="col-md-6">
                               <h4 class="IconEndereco">Endereço</h4>          
                               <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <input type="text" name="clicep" id="clicep"  class="form-control cep" placeholder="CEP" required>
                                        </div>
                                        <div class="col-md-2" data-toggle="tooltip" data-placement="top" title="Não sabe seu CEP? Pesquise clicando aqui">
                                            <a href="http://www.buscacep.correios.com.br/sistemas/buscacep/" target="_blank">
                                                <img src="/amildental/biblioteca/img/correios-2.jpg" style="width: 35px;">
                                            </a>
                                        </div>
                                        <div class="col-md-6">
                                            <select name="cliuf" class="form-control" id="cliuf" required>
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
                                            <input type="text" name="clicidade" id="clicidade" class="form-control" placeholder="Cidade" required>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="clibairro" id="clibairro" class="form-control" placeholder="Bairro" required>
                                        </div>
                                    </div>
                                </div>  
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input type="text" name="cliendereco" id="cliendereco" class="form-control" placeholder="Logradouro" required>
                                        </div>                                
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text" name="cliendnumero" id="cliendnumero" class="form-control" placeholder="Número" required>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="cliendcomp" id="cliendcomp" class="form-control" placeholder="Complemento" required>
                                        </div>
                                    </div>
                                </div>
                                <h4 class="IconPessoa1">Dados Empresa</h4>                       
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input type="text" name="clinummatricula" id="clinummatricula" class="form-control" placeholder="Número Matrícula" required>
                                        </div>
                                    </div>
                                </div>                       
                                <div class="form-group">
                                    <div class="row">                                                                        
                                        <div class="col-md-12">
                                            <input type="text" name="clidataadmissao" id="clidataadmissao" class="form-control data" placeholder="Data Admissão" required>
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
                    <div id="dependente" style="display:none"> 
                    <div class="row">
                        <div class="col-md-6">
                            <div  class="form-group">
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="text" name="depnome" id="depnome" class="form-control" onblur="confereNome(this)" placeholder="Nome Completo do Dependente" required>
                                    </div>
                                </div>
                            </div>                        
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" name="depcpf" id="depcpf" class="form-control cpf" placeholder="CPF" required>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="depnasc" id="depnasc" class="form-control data" placeholder="Data Nascimento" required>
                                    </div>
                                </div>
                            </div>    
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <select name="depparentesco" id="depparentesco" class="form-control" required>
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
                                        <select name="depsexo" id="depsexo" class="form-control" required>
                                            <option value="" selected="selected" disabled>Sexo</option>
                                            <option value="1">Masculino</option>
                                            <option value="2">Feminino</option>                                        
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <select name="depestadocivil" id="depestadocivil" class="form-control" required>
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
                                        <select name="sosdental" id="sosdental" class="form-control sosdental" required>
                                            <option value="" selected="selected" disabled>SOS Dental</option>
                                                <option value="1">Sim</option>
                                                <option value="0">Não</option>
                                        </select>
                                    </div>                                   
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="text" name="depnomemae" id="depnomemae" class="form-control" onblur="confereNome(this)" placeholder="Nome completo mãe" required>
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
                                       <th style="padding: 8px; border-top: 1px solid #ddd; vertical-align: top;"><label id="lblTitular">Titular</label></th>
                                   </tr>
                               </tbody>
                           </table>                               
                           <h4 class="IconDependente">Dependente</h4>                       
                            <table id="tblListDependentes" width="100%" style="margin-bottom: 15px;">
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
                                <button type="button" class="btn btn-primary" onclick="SalvarDependente()">Salvar e Continuar</button>                                                                       
                            </div>                            
                        </div>
                    </div>                        
                    </div>
                    <div id="finalizar" style="display:none"> 
                    <div class="row">
                        <div class="col-md-6">
                            <h4 class="IconPlano">Plano</h4>  
                            <div  class="">
                                <div class="">
                                    <div class="col-md-12 form-check">
                                        <input type="radio" id="plano1" name="plano" value="19157" class="form-check-input">
                                        <label for="plano1" class="form-check-label">
                                            Dental 200 R - Rol (ANS) + procedimentos extras + documentação ortodôntica básica - R$ 17,68
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div  class="">
                                <div class="">
                                    <div class="col-md-12 form-check">
                                        <input type="radio" id="plano2" name="plano" value="11198" class="form-check-input">
                                        <label for="plano2" class="form-check-label">Dental 300 R - Rol (ANS) + procedimentos extras + ortodontia - R$ 75,58</label>
                                    </div>
                                </div>
                            </div>
                            <div  class="">
                                <div class="">
                                    <div class="col-md-12 form-check">
                                        <input type="radio" id="plano3" name="plano" value="16176" class="form-check-input">
                                        <label for="plano3" class="form-check-label">
                                            Dental 500 R - Rol (ANS) + procedimentos extras + prótese de resina e porcelana - R$ 68,74
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div  class="">
                                <div class="">
                                    <div class="col-md-12 form-check">
                                         <input type="radio" id="plano4" name="plano" value="18123" class="form-check-input">
                                         <label for="plano4" class="form-check-label">Dental 700 R - Rol (ANS) + procedimentos extras + próteses de resina e porcelana + ortodontia + clareamento convencional - R$ 108,14
                                         <hr>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class="">                                        
                                    <div class="col-md-12 form-check">                                            
                                        <input type="checkbox" id="autorizar" name="autorizar" value="1" class="form-check-input">
                                        <label for="autorizar" class="form-check-label">
                                            Declaro assumir o valor da taxa mensal correspondente a cada um dos inscritos. Autorizo assim, o desconto na mensalidade através da folha de pagamento.
                                        </label>
                                    </div>                                        
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class=" botao">
                            <div class="col-md-12" align="center">
                                <button type="button" class="btn btn-primary" onclick="enviaForm()">Finalizar</button>
                            </div>                            
                        </div>
                    </div>                        
                    </div>
                </form>
            </div>                    
        </div>
    </main>

<?php
    require_once($_SERVER['DOCUMENT_ROOT']."/amildental/template/rodape.php");
?>

<script>
    
    function confereNome(obj){	
        var nome = obj.value;
        var id = obj.id;
        var ponto = nome.split(".");
        var string = nome.split(" ");
        var tamanho = nome.split("");
        var i = 0;
        var x = 0
        
        if((ponto.length>1)&&(tamanho.length>1)){
            x=1;
        }
        
       for (i; i<string.length;i++){
            if((string[i].length <= 1) &&(tamanho.length>1)){
               x=1;
            }           
        } 
        
        if(x==1){
            alert("O nome não pode ser Abreviado");
            document.getElementById(id).value = "";
        }
    }
     
</script>