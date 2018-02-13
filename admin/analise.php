<?php 
    session_start();    
    require_once($_SERVER['DOCUMENT_ROOT']."/amildental/admin/template/cabecalho_admin.php");
    require_once($_SERVER['DOCUMENT_ROOT']."/amildental/admin/template/menu-superior.php");

    $clientesDAO = new ClientesDAO($conexao);
?>

<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span12">

          <div class="widget widget-nopad">
            <div class="widget-header"> <i class="icon-list-alt"></i>
              <h3>Propostas em Análise</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <div class="widget big-stats-container">
                <div class="widget-content" style="padding: 10px;">
                  <table id="example" class="display" cellspacing="0" width="100%" >
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>CPF</th>
                            <th>Plano</th>
                            <th>Data</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Nome</th>
                            <th>CPF</th>
                            <th>Plano</th>
                            <th>Data</th>  
                            <th></th>
                            <th></th>
                        </tr>
                    </tfoot>
                    <tbody>
                    <?php
                      $list = $clientesDAO->listaClientes();

                      foreach ($list as $cliente) {
                    ?>
                        <tr>
                            <td><?=$cliente->clinome?></td>
                            <td align="center"><?=$cliente->clicpf?></td>
                            <td align="center">Dental 200</td>                
                            <td align="center"><?=$cliente->data?></td>  
                            <td align="center"><button class="btn btn-success">Confirmar</button></td> 
                            <td align="center"><button class="btn btn-danger">Excluir</button></td>
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
<?php
    require_once($_SERVER['DOCUMENT_ROOT']."/amildental/admin/template/rodape_admin.php");
?>
<script src="js/jquery-1.12.4.js" type="text/javascript"></script>
<script src="js/jquery.dataTables.min.js" type="text/javascript"></script>

<script>
$(document).ready(function() {
    $('#example').dataTable( {
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
} );    

} );

 
</script>
