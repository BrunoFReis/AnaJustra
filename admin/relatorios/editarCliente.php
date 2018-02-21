<?php 
    session_start();
    $_SESSION["menu-admin"] = "relatorios";
    require_once($_SERVER['DOCUMENT_ROOT']."/amildental/admin/template/cabecalho_admin.php");
    require_once($_SERVER['DOCUMENT_ROOT']."/amildental/admin/template/menu-superior.php");
    
    $cli_id = $_GET["id_cliente"];

    $clientesDAO = new ClientesDAO($conexao);
    $cliente = $clientesDAO->retornaClientePorID($cli_id); 
?>

<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span12">

          <div class="widget widget-nopad">
            <div class="widget-header"> <i class="icon-list-alt"></i>
              <h3>Edição do Cliente</h3>
            </div>
            <!-- /widget-header -->
            <form id="formEditar" method="POST" action="/amildental/views/cliente-banco.php?acao=editar">
                <div class="widget-content">
                  <div class="widget big-stats-container">
                    <div class="widget-content" style="padding: 10px;">

                            <div class="widget-content" style="padding: 10px;">
                                 <h4 class="IconPessoa">Dados Pessoais</h4>
                            </div>
                            <div class="widget-content" style="padding: 5px;">
                                <input type="text" name="clinome" id="clinome" class="form-control" value="<?=$cliente->clinome?>" required>   
                                <input type="hidden" name="id" id="id" class="form-control" value="<?=$cliente->id?>" required>  
                            </div>
                             <div class="widget-content" style="padding: 5px;">
                                <input type="text" name="clinasc" id="clinasc" class="form-control data" value="<?=$cliente->clinasc?>" required>   
                            </div>
                             <div class="widget-content" style="padding: 5px;">
                                <input type="text" name="clicpf" id="clicpf" class="form-control cpf" value="<?=$cliente->clicpf?>" required>
                            </div>
                             <div class="widget-content" style="padding: 5px;">                                
                                <select name="cliestadocivil" id="cliestadocivil" class="form-control" required>
                                    <option value="1" <?php if ($cliente->cliestadocivil == 1) { ?> selected="selected" <?php } else { ?> <?php } ?> >Solteiro</option>
                                    <option value="2" <?php if ($cliente->cliestadocivil == 2) { ?> selected="selected" <?php } else { ?> <?php } ?> >Casado</option>
                                    <option value="3" <?php if ($cliente->cliestadocivil == 3) { ?> selected="selected" <?php } else { ?> <?php } ?> >Viuvo</option>
                                    <option value="4" <?php if ($cliente->cliestadocivil == 4) { ?> selected="selected" <?php } else { ?> <?php } ?> >Separado</option>
                                    <option value="5" <?php if ($cliente->cliestadocivil == 5) { ?> selected="selected" <?php } else { ?> <?php } ?> >Divorciado</option>                                                    
                                    <option value="6" <?php if ($cliente->cliestadocivil == 6) { ?> selected="selected" <?php } else { ?> <?php } ?> >Outros</option>
                                </select>
                            </div>
                            <div class="widget-content" style="padding: 5px;">
                                <select name="clisexo" id="clisexo" class="form-control" required>
                                    <option value="1" <?php if ($cliente->clisexo == 1) { ?> selected="selected" <?php } else { ?> <?php } ?> >Masculino</option>
                                    <option value="2" <?php if ($cliente->clisexo == 2) { ?> selected="selected" <?php } else { ?> <?php } ?> >Feminino</option>                                        
                                </select>
                            </div>
                             <div class="widget-content" style="padding: 5px;">
                                <input type="text" name="clinomemae" id="clinomemae" class="form-control" value="<?=$cliente->clinomemae?>" required>
                            </div>
                             <div class="widget-content" style="padding: 10px;">
                                <h4 class="IconContato">Contato</h4>  
                            </div>
                             <div class="widget-content" style="padding: 5px;">
                                <input type="text" name="clicelular" id="clicelular" class="form-control celular" value="<?=$cliente->clicelular?>" required>
                            </div>
                             <div class="widget-content" style="padding: 5px;">
                                <input type="text" name="clitelefone" id="clitelefone" class="form-control telefone" value="<?=$cliente->clitelefone?>" required>
                            </div>
                             <div class="widget-content" style="padding: 5px;">
                                <input type="email" name="cliemail" id="cliemail" class="form-control" value="<?=$cliente->cliemail?>" required>
                            </div>
                             <div class="widget-content" style="padding: 10px;">
                                <h4 class="IconEndereco">Endereço</h4>          
                            </div>
                             <div class="widget-content" style="padding: 5px;">
                                <input type="text" name="clicep" id="clicep"  class="form-control cep" value="<?=$cliente->clicep?>" required>
                            </div>
                             <div class="widget-content" style="padding: 5px;">
                                <select name="cliuf" class="form-control" id="cliuf" required>
                                    <option value="AC" <?php if ($cliente->cliuf == "AC") { ?> selected="selected" <?php } else { ?> <?php } ?>>AC</option>
                                    <option value="AL" <?php if ($cliente->cliuf == "AL") { ?> selected="selected" <?php } else { ?> <?php } ?>>AL</option>
                                    <option value="AM" <?php if ($cliente->cliuf == "AM") { ?> selected="selected" <?php } else { ?> <?php } ?>>AM</option>
                                    <option value="AP" <?php if ($cliente->cliuf == "AP") { ?> selected="selected" <?php } else { ?> <?php } ?>>AP</option>
                                    <option value="BA" <?php if ($cliente->cliuf == "BA") { ?> selected="selected" <?php } else { ?> <?php } ?>>BA</option>
                                    <option value="CE" <?php if ($cliente->cliuf == "CE") { ?> selected="selected" <?php } else { ?> <?php } ?>>CE</option>
                                    <option value="DF" <?php if ($cliente->cliuf == "DF") { ?> selected="selected" <?php } else { ?> <?php } ?>>DF</option>
                                    <option value="ES" <?php if ($cliente->cliuf == "ES") { ?> selected="selected" <?php } else { ?> <?php } ?>>ES</option>
                                    <option value="GO" <?php if ($cliente->cliuf == "GO") { ?> selected="selected" <?php } else { ?> <?php } ?>>GO</option>
                                    <option value="MA" <?php if ($cliente->cliuf == "MA") { ?> selected="selected" <?php } else { ?> <?php } ?>>MA</option>
                                    <option value="MG" <?php if ($cliente->cliuf == "MG") { ?> selected="selected" <?php } else { ?> <?php } ?>>MG</option>
                                    <option value="MS" <?php if ($cliente->cliuf == "MS") { ?> selected="selected" <?php } else { ?> <?php } ?>>MS</option>
                                    <option value="MT" <?php if ($cliente->cliuf == "MT") { ?> selected="selected" <?php } else { ?> <?php } ?>>MT</option>
                                    <option value="PA" <?php if ($cliente->cliuf == "PA") { ?> selected="selected" <?php } else { ?> <?php } ?>>PA</option>
                                    <option value="PB" <?php if ($cliente->cliuf == "PB") { ?> selected="selected" <?php } else { ?> <?php } ?>>PB</option>
                                    <option value="PE" <?php if ($cliente->cliuf == "PE") { ?> selected="selected" <?php } else { ?> <?php } ?>>PE</option>
                                    <option value="PI" <?php if ($cliente->cliuf == "PI") { ?> selected="selected" <?php } else { ?> <?php } ?>>PI</option>
                                    <option value="PR" <?php if ($cliente->cliuf == "PR") { ?> selected="selected" <?php } else { ?> <?php } ?>>PR</option>
                                    <option value="RJ" <?php if ($cliente->cliuf == "RJ") { ?> selected="selected" <?php } else { ?> <?php } ?>>RJ</option>
                                    <option value="RN" <?php if ($cliente->cliuf == "RN") { ?> selected="selected" <?php } else { ?> <?php } ?>>RN</option>
                                    <option value="RO" <?php if ($cliente->cliuf == "RO") { ?> selected="selected" <?php } else { ?> <?php } ?>>RO</option>
                                    <option value="RR" <?php if ($cliente->cliuf == "RR") { ?> selected="selected" <?php } else { ?> <?php } ?>>RR</option>
                                    <option value="RS" <?php if ($cliente->cliuf == "RS") { ?> selected="selected" <?php } else { ?> <?php } ?>>RS</option>
                                    <option value="SC" <?php if ($cliente->cliuf == "SC") { ?> selected="selected" <?php } else { ?> <?php } ?>>SC</option>
                                    <option value="SE" <?php if ($cliente->cliuf == "SE") { ?> selected="selected" <?php } else { ?> <?php } ?>>SE</option>
                                    <option value="SP" <?php if ($cliente->cliuf == "SP") { ?> selected="selected" <?php } else { ?> <?php } ?>>SP</option>
                                    <option value="TO" <?php if ($cliente->cliuf == "TO") { ?> selected="selected" <?php } else { ?> <?php } ?>>TO</option>
                                </select>
                            </div> 
                            <div class="widget-content" style="padding: 5px;">
                                <input type="text" name="clicidade" id="clicidade" class="form-control" value="<?=$cliente->clicidade?>" required>
                            </div>
                            <div class="widget-content" style="padding: 5px;">
                                <input type="text" name="clibairro" id="clibairro" class="form-control" value="<?=$cliente->clibairro?>" required>
                            </div>
                            <div class="widget-content" style="padding: 5px;">
                                <input type="text" name="cliendereco" id="cliendereco" class="form-control" value="<?=$cliente->cliendereco?>" required>
                            </div>
                            <div class="widget-content" style="padding: 5px;">
                                <input type="text" name="cliendnumero" id="cliendnumero" class="form-control" value="<?=$cliente->cliendnumero?>" required>
                            </div>
                            <div class="widget-content" style="padding: 5px;">
                                <button type="submit" class="btn btn-success" onclick="EditarForm()">Confirmar</button>                                    
                            </div>
                            
                    </div>                        

                    <!-- /widget-content --> 
                  </div>
                </div>
           </form>
        </div>
          
        
      </div>
      <!-- /row --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /main-inner --> 
</div>
<!-- /main -->
<?php
    require_once($_SERVER['DOCUMENT_ROOT']."/amildental/admin/template/rodape_admin.php");
?>
<script src="/amildental/admin/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="/amildental/admin/js/edicao.js" type="text/javascript"></script>

<script>
    $(document).ready(function() {
      $('.datatable').dataTable({
          "language": {
            "lengthMenu": "Exibir _MENU_ Registros por Página",
            "info": "Mostrando _PAGE_ de _PAGES_ Páginas",
            "zeroRecords": "Nenhum Registro Encontrado",        
            "search": "Procurar:",
            "paginate": {
              "previous": "Anterior",
              "next": "Próximo"
            }
          }
      });
    });
    
    function excluirCliente(id_cliente){
        if(confirm("Deseja mesmo excluir o cliente?")){
          $.ajax({
            method: "GET",
            url: "/amildental/views/cliente-banco.php",
            data: { acao: "excluir", id_cliente: id_cliente }
          })
          .done(function(data) {
              window.location.href = "clientes.php";
          });
        }
    }
    
    function excluirCliente(id_cliente){
       window.open("editarCliente.php?id_cliente="+id_cliente+"");
    }
 
</script>
