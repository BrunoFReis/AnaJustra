<?php 
    session_start();
    $_SESSION["menu-admin"] = "relatorios";
    require_once($_SERVER['DOCUMENT_ROOT']."/amildental/admin/template/cabecalho_admin.php");
    require_once($_SERVER['DOCUMENT_ROOT']."/amildental/admin/template/menu-superior.php");
    
    $dep_id = $_GET["id_dependente"];
    
    $dependentesDAO = new DependentesDAO($conexao);
    
    $dep = $dependentesDAO->DependenteporIDdependente($dep_id); 
?>

<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span12">

          <div class="widget widget-nopad">
            <div class="widget-header"> <i class="icon-list-alt"></i>
              <h3>Edição do Dependente</h3>
            </div>
            <!-- /widget-header -->
            <form id="formEditar" method="POST" action="/amildental/views/dependente-banco.php?acao=editar">
                <div class="widget-content">
                  <div class="widget big-stats-container">
                    <div class="widget-content" style="padding: 10px;">

                            <div class="widget-content" style="padding: 10px;">
                                 <h4 class="IconPessoa">Dados Pessoais</h4>
                            </div>
                            <div class="widget-content" style="padding: 5px;">
                                <input type="text" name="depnome" id="depnome" class="form-control" value="<?=$dep->depnome?>" required>   
                                <input type="hidden" name="id" id="id" class="form-control" value="<?=$dep->id?>" required>  
                            </div>
                             <div class="widget-content" style="padding: 5px;">
                                <input type="text" name="depnasc" id="depnasc" class="form-control data" value="<?=$dep->depnasc?>" required>   
                            </div>
                             <div class="widget-content" style="padding: 5px;">
                                <input type="text" name="depcpf" id="depcpf" class="form-control cpf" value="<?=$dep->depcpf?>" required>
                            </div>
                             <div class="widget-content" style="padding: 5px;">                                
                                    <select name="depestadocivil" id="depestadocivil" class="form-control" required>
                                    <option value="1" <?php if ($dep->depestadocivil == 1) { ?> selected="selected" <?php } else { ?> <?php } ?> >Solteiro</option>
                                    <option value="2" <?php if ($dep->depestadocivil == 2) { ?> selected="selected" <?php } else { ?> <?php } ?> >Casado</option>
                                    <option value="3" <?php if ($dep->depestadocivil == 3) { ?> selected="selected" <?php } else { ?> <?php } ?> >Viuvo</option>
                                    <option value="4" <?php if ($dep->depestadocivil == 4) { ?> selected="selected" <?php } else { ?> <?php } ?> >Separado</option>
                                    <option value="5" <?php if ($dep->depestadocivil == 5) { ?> selected="selected" <?php } else { ?> <?php } ?> >Divorciado</option>                                                    
                                    <option value="6" <?php if ($dep->depestadocivil == 6) { ?> selected="selected" <?php } else { ?> <?php } ?> >Outros</option>
                                </select>
                            </div>
                            <div class="widget-content" style="padding: 5px;">
                                <select name="depsexo" id="depsexo" class="form-control" required>
                                    <option value="1" <?php if ($dep->depsexo == 1) { ?> selected="selected" <?php } else { ?> <?php } ?> >Masculino</option>
                                    <option value="2" <?php if ($dep->depsexo == 2) { ?> selected="selected" <?php } else { ?> <?php } ?> >Feminino</option>                                        
                                </select>
                            </div>
                            <div class="widget-content" style="padding: 5px;">
                                <select name="parentesco" id="parentesco" class="form-control" required>
                                    <option value="1" <?php if ($dep->parentesco == 1) { ?> selected="selected" <?php } else { ?> <?php } ?> >Pai / Mãe</option>
                                    <option value="2" <?php if ($dep->parentesco == 2) { ?> selected="selected" <?php } else { ?> <?php } ?> >Conjuge</option>
                                    <option value="3" <?php if ($dep->parentesco == 3) { ?> selected="selected" <?php } else { ?> <?php } ?> >Filho(a)</option>
                                    <option value="6" <?php if ($dep->parentesco == 6) { ?> selected="selected" <?php } else { ?> <?php } ?> >Neto(a)</option>
                                    <option value="7" <?php if ($dep->parentesco == 7) { ?> selected="selected" <?php } else { ?> <?php } ?> >Irmão</option>
                                    <option value="8" <?php if ($dep->parentesco == 8) { ?> selected="selected" <?php } else { ?> <?php } ?> >Avós</option>
                                    <option value="9" <?php if ($dep->parentesco == 9) { ?> selected="selected" <?php } else { ?> <?php } ?> >Tios(as)</option>
                                    <option value="10" <?php if ($dep->parentesco == 10) { ?> selected="selected" <?php } else { ?> <?php } ?> >Sobrinho(a)</option>
                                    <option value="11" <?php if ($dep->parentesco == 11) { ?> selected="selected" <?php } else { ?> <?php } ?> >Bisnetos(as)</option>
                                    <option value="12" <?php if ($dep->parentesco == 12) { ?> selected="selected" <?php } else { ?> <?php } ?> >Sogro</option>
                                    <option value="13" <?php if ($dep->parentesco == 13) { ?> selected="selected" <?php } else { ?> <?php } ?> >Genro e Nora</option>
                                    <option value="14" <?php if ($dep->parentesco == 14) { ?> selected="selected" <?php } else { ?> <?php } ?> >Padrastro e Madrasta</option>
                                    <option value="15" <?php if ($dep->parentesco == 15) { ?> selected="selected" <?php } else { ?> <?php } ?> >Enteado</option>
                                    <option value="16" <?php if ($dep->parentesco == 16) { ?> selected="selected" <?php } else { ?> <?php } ?> >Cunhado (a)</option>
                                    <option value="17" <?php if ($dep->parentesco == 17) { ?> selected="selected" <?php } else { ?> <?php } ?> >Filho (a) Invalido (a)</option>
                                    <option value="18" <?php if ($dep->parentesco == 18) { ?> selected="selected" <?php } else { ?> <?php } ?> >Filho (a) Universitário (a)</option>                                                
                                </select>
                            </div>
                            <div class="widget-content" style="padding: 5px;">
                                <select name="sosdental" id="sosdental" class="form-control" required>
                                    <option value="1" <?php if ($dep->sosdental == 1) { ?> selected="selected" <?php } else { ?> <?php } ?> >Sim</option>
                                    <option value="0" <?php if ($dep->sosdental == 0) { ?> selected="selected" <?php } else { ?> <?php } ?> >Não</option>                                        
                                </select>
                            </div>
                             <div class="widget-content" style="padding: 5px;">
                                <input type="text" name="depnomemae" id="depnomemae" class="form-control" value="<?=$dep->depnomemae?>" required>
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
