<?php 
    session_start();
    $_SESSION["menu-admin"] = "relatorios";
    
    require_once($_SERVER['DOCUMENT_ROOT']."/amildental/admin/template/cabecalho_admin.php");
    require_once($_SERVER['DOCUMENT_ROOT']."/amildental/admin/template/menu-superior.php");
    
    $clientesDAO = new ClientesDAO($conexao);
?>

<style type="text/css">
  form {
    margin: 0 0 0px;
  }
</style>
<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span12">

          <div class="widget widget-nopad">
            <div class="widget-header"> <i class="icon-list-alt"></i>
              <h3>Propostas Finalizadas</h3>
                <button class="btn btn-sm btn-success pull-right" style="margin: 7px;" data-toggle="modal" data-target="#modalExcel">
                 <i class="shortcut-icon icon-download-alt" style="color: white; margin: 0px 0px;"></i> Excel
                </button>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <div class="widget big-stats-container">
                <div class="widget-content" style="padding: 10px;">
                  <table class="display datatable" cellspacing="0" width="100%" >
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>CPF</th>
                            <th>Plano</th>
                            <th>Data</th>              
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Nome</th>
                            <th>CPF</th>
                            <th>Plano</th>
                            <th>Data</th>                  
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                        
                        $list = $clientesDAO->listaClientesFinalizados();

                        foreach ($list as $cliente) {
                        ?>
                            <tr>
                                <td><?=$cliente->clinome?></td>
                                <td align="center"><?=$cliente->clicpf?></td>
                                <td align="center"><?=$cliente->nomeplano?></td>                
                                <td align="center"><?=$cliente->data?></td>                                  
                            </tr>
                        <?php
                          }
                        ?>          
                    </tbody>
                </table>
                </div>
                <!-- /widget-content --> 
              </div>
            </div>
          </div>
          <!-- /widget -->

          <!-- <div class="widget widget-nopad">
            <div class="widget-header"> <i class="icon-list-alt"></i>
              <h3>Novidades recentes</h3>
            </div>
            <div class="widget-content">
              <div id='calendar'>
              </div>
            </div>
          </div> -->
          
        </div>
          
        
      </div>
      <!-- /row --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /main-inner --> 
</div>
<!-- /main -->


<!-- Modal -->
<div id="modalExcel" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Gerar arquivo excel</h3>
  </div>
  <form class="form-horizontal" action="gerarExcel.php" method="POST">
  <div class="modal-body">
      <div>
            <div class="control-group">                     
              <label class="control-label" for="firstname">Data Início</label>
              <div class="controls">
                <input type="text" id="datainicio" name="datainicio" placeholder="Ex: 00/00/0000" required>
              </div> <!-- /controls -->       
            </div> <!-- /control-group -->
            
            <div class="control-group">                     
              <label class="control-label" for="firstname">Data Fim</label>
              <div class="controls">
                <input type="text" id="datafim" name="datafim" placeholder="Ex: 00/00/0000" required>
              </div> <!-- /controls -->       
            </div> <!-- /control-group -->

            <div class="control-group">                     
              <label class="control-label" for="firstname">Número do Contrato</label>
              <div class="controls">
                <input type="text" id="numcontrato" name="numcontrato" placeholder="Ex: 009123123" required>
              </div> <!-- /controls -->       
            </div> <!-- /control-group -->              
      </div>    
  </div>
  <div class="modal-footer">
    <button type="button" class="btn" data-dismiss="modal" aria-hidden="true">Fechar</button>
    <button type="submit" class="btn btn-primary">Gerar arquivo</button>
  </div>
  </form>
</div>

<?php
    require_once($_SERVER['DOCUMENT_ROOT']."/amildental/admin/template/rodape_admin.php");
?>
<script src="/amildental/admin/js/jquery.dataTables.min.js" type="text/javascript"></script>

<script>
$(function(){
    
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

    $("#datainicio, #datafim").datepicker();
});
</script>
