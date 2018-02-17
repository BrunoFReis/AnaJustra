<?php 
    session_start();
    $_SESSION["menu-admin"] = "relatorios";
    
    require_once($_SERVER['DOCUMENT_ROOT']."/amildental/admin/template/cabecalho_admin.php");
    require_once($_SERVER['DOCUMENT_ROOT']."/amildental/admin/template/menu-superior.php");
?>

<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span12">

          <div class="widget widget-nopad">
            <div class="widget-header"> <i class="icon-list-alt"></i>
              <h3>Propostas Finalizadas</h3>
              <a href="gerarExcel.php" target="_blank">
                <button class="btn btn-sm btn-success pull-right" style="margin: 7px;">Excel</button>
              </a>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <div class="widget big-stats-container">
                <div class="widget-content" style="padding: 10px;">
                  <table id="example1" class="display" cellspacing="0" width="100%" >
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
                        <tr>
                            <td>Bruno Nunes de Freitas</td>
                            <td align="center">03710117100</td>
                            <td align="center">Dental 200</td>                
                            <td align="center">12/02/2018</td>                  
                        </tr>           
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
    $('#example1').dataTable( {
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
