<?php 
    session_start();
    $_SESSION["menu-admin"] = "relatorios";
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
                  <table class="display datatable" cellspacing="0" width="100%" >
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Qtd. Dependentes</th>
                            <th>CPF</th>
                            <th>Plano</th>
                            <th>Data</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Nome</th>
                            <th>Qtd. Dependentes</th>
                            <th>CPF</th>
                            <th>Plano</th>
                            <th>Data</th>  
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </tfoot>
                    <tbody>
                    <?php
                      $list = $clientesDAO->listaClientesAnalise();

                      foreach ($list as $cliente) {
                    ?>
                        <tr>
                            <td><?=$cliente->clinome?></td>
                            <td align="center"><?=$cliente->qtdDependentes?></td>
                            <td align="center"><?=$cliente->clicpf?></td>
                            <td align="center"><?=$cliente->nomeplano?></td>                
                            <td align="center"><?=$cliente->data?></td>  
                            <td align="center"><button class="btn btn-success" onclick="confirmarCliente(<?=$cliente->id?>)">Confirmar</button></td> 
                            <td align="center"><button class="btn btn-primary" onclick="PropostaCliente(<?=$cliente->id?>)">Proposta</button></td> 
                            <td align="center"><button class="btn btn-danger" onclick="excluirCliente(<?=$cliente->id?>)">x</button></td>
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
<script src="/amildental/admin/js/jquery.dataTables.min.js" type="text/javascript"></script>

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

    function confirmarCliente(id_cliente){
        $.ajax({
        method: "GET",
        url: "/amildental/views/cliente-banco.php",
        data: { acao: "confirmar", id_cliente: id_cliente }
        })
        .done(function() {
            window.location.href = "analise.php";
        });
    }
    
    function excluirCliente(id_cliente){
        if(confirm("Deseja mesmo excluir o cliente?")){
          $.ajax({
            method: "GET",
            url: "/amildental/views/cliente-banco.php",
            data: { acao: "excluir", id_cliente: id_cliente }
          })
          .done(function() {
              window.location.href = "analise.php";
          });
        }
    }
    
    function PropostaCliente(id_cliente){
        window.open("../../contrato.php?cli_id="+id_cliente+"")
    }
 
</script>
