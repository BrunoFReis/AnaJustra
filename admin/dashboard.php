<?php 
    session_start();
    $_SESSION["menu-admin"] = "dashboard";
    
    require_once($_SERVER['DOCUMENT_ROOT']."/amildental/admin/template/cabecalho_admin.php");
    //require_once($_SERVER['DOCUMENT_ROOT']."/MilAmigos/views/banner-principal.php");

    //$produtoDAO = new ProdutoDAO($conexao); 

    require_once($_SERVER['DOCUMENT_ROOT']."/amildental/admin/template/menu-superior.php");

    $relatoriosDAO = new RelatoriosDAO($conexao);
    $relatorio = $relatoriosDAO->retornaQuantitativos();
?>

<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span6">

          <div class="widget widget-nopad">
            <div class="widget-header"> <i class="icon-list-alt"></i>
              <h3>Estatísticas do dia</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <div class="widget big-stats-container">
                <div class="widget-content">
                  <h6 class="bigstats">
                      Informações básicas do andamento dos cadastros e entregas de documentos dos clientes.
                  </h6>
                  <div id="big_stats" class="cf">
                    <div class="stat">
                      <i class="icon-arrow-up" style="color: #19bc9c;"></i>
                      <span class="value"><?=$relatorio->qtdClientes?></span>
                    </div>
                    <!-- .stat -->
                    
                    <div class="stat">
                      <i class="icon-thumbs-up-alt"></i>
                      <span class="value"><?=$relatorio->qtdFinalizados?></span>
                    </div>
                    <!-- .stat -->
                    
                    <div class="stat">
                      <i class="icon-envelope"></i>
                      <span class="value">0</span>
                    </div>
                    <!-- .stat -->
                    
                    <div class="stat">
                      <i class="icon-list-alt"></i>
                      <span class="value"><?=$relatorio->porcentagem?>%</span>
                    </div>
                    <!-- .stat --> 
                  </div>
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
          
        <!-- /span6 -->
        <div class="span6">
          <div class="widget">
            <div class="widget-header"> <i class="icon-bookmark"></i>
              <h3>Atalhos</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <div class="shortcuts">
                  <!-- <a href="javascript:;" class="shortcut">
                    <i class="shortcut-icon icon-list-alt"></i>
                    <span class="shortcut-label">Apps</span>
                  </a>
                  <a href="javascript:;" class="shortcut">
                    <i class="shortcut-icon icon-bookmark"></i>
                    <span class="shortcut-label">Bookmarks</span>
                  </a>
                  <a href="javascript:;" class="shortcut">
                    <i class="shortcut-icon icon-signal"></i>
                    <span class="shortcut-label">Reports</span>
                  </a>
                  <a href="javascript:;" class="shortcut">
                    <i class="shortcut-icon icon-comment"></i>
                    <span class="shortcut-label">Comments</span>
                  </a> -->

                  <a href="/amildental/admin/relatorios/clientes.php" class="shortcut">
                    <i class="shortcut-icon icon-user"></i>
                    <span class="shortcut-label">Clientes</span>
                  </a>
                  <a href="/amildental/admin/relatorios/finalizadas.php" class="shortcut">
                    <i class="shortcut-icon icon-signal"></i>
                    <span class="shortcut-label">Finalizados</span>
                  </a>
                  <a href="javascript:;" class="shortcut">
                    <i class="shortcut-icon icon-file"></i>
                    <span class="shortcut-label">Notes</span>
                  </a>
                  <a href="javascript:;" class="shortcut">
                    <i class="shortcut-icon icon-tag"></i>
                    <span class="shortcut-label">Tags</span>
                  </a>
                </div>
              <!-- /shortcuts --> 
            </div>
            <!-- /widget-content --> 
          </div>
          <!-- /widget -->

          <!-- <div class="widget">
            <div class="widget-header"> <i class="icon-signal"></i>
              <h3>Gráfico Mensal</h3>
            </div>
            <div class="widget-content">
              <canvas id="area-chart" class="chart-holder" height="250" width="538"> </canvas>
            </div>
          </div> -->

        </div>
        <!-- /span6 --> 
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

<script src="js/excanvas.min.js"></script> 
<script src="js/chart.min.js" type="text/javascript"></script>
<script language="javascript" type="text/javascript" src="js/full-calendar/fullcalendar.min.js"></script>

<script>     

        var lineChartData = {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [
                {
                    fillColor: "rgba(220,220,220,0.5)",
                    strokeColor: "rgba(220,220,220,1)",
                    pointColor: "rgba(220,220,220,1)",
                    pointStrokeColor: "#fff",
                    data: [65, 59, 90, 81, 56, 55, 40]
                },
                {
                    fillColor: "rgba(151,187,205,0.5)",
                    strokeColor: "rgba(151,187,205,1)",
                    pointColor: "rgba(151,187,205,1)",
                    pointStrokeColor: "#fff",
                    data: [28, 48, 40, 19, 96, 27, 100]
                }
            ]

        }

        var myLine = new Chart(document.getElementById("area-chart").getContext("2d")).Line(lineChartData);


        var barChartData = {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [
                {
                    fillColor: "rgba(220,220,220,0.5)",
                    strokeColor: "rgba(220,220,220,1)",
                    data: [65, 59, 90, 81, 56, 55, 40]
                },
                {
                    fillColor: "rgba(151,187,205,0.5)",
                    strokeColor: "rgba(151,187,205,1)",
                    data: [28, 48, 40, 19, 96, 27, 100]
                }
            ]

        }    

        $(document).ready(function() {
        var date = new Date();
        var d = date.getDate();
        var m = date.getMonth();
        var y = date.getFullYear();
        var calendar = $('#calendar').fullCalendar({
          header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay'
          },
          selectable: true,
          selectHelper: true,
          select: function(start, end, allDay) {
            var title = prompt('Event Title:');
            if (title) {
              calendar.fullCalendar('renderEvent',
                {
                  title: title,
                  start: start,
                  end: end,
                  allDay: allDay
                },
                true // make the event "stick"
              );
            }
            calendar.fullCalendar('unselect');
          },
          editable: true,
          events: [
            {
              title: 'All Day Event',
              start: new Date(y, m, 1)
            },
            {
              title: 'Long Event',
              start: new Date(y, m, d+5),
              end: new Date(y, m, d+7)
            },
            {
              id: 999,
              title: 'Repeating Event',
              start: new Date(y, m, d-3, 16, 0),
              allDay: false
            },
            {
              id: 999,
              title: 'Repeating Event',
              start: new Date(y, m, d+4, 16, 0),
              allDay: false
            },
            {
              title: 'Meeting',
              start: new Date(y, m, d, 10, 30),
              allDay: false
            },
            {
              title: 'Lunch',
              start: new Date(y, m, d, 12, 0),
              end: new Date(y, m, d, 14, 0),
              allDay: false
            },
            {
              title: 'Birthday Party',
              start: new Date(y, m, d+1, 19, 0),
              end: new Date(y, m, d+1, 22, 30),
              allDay: false
            },
            {
              title: 'EGrappler.com',
              start: new Date(y, m, 28),
              end: new Date(y, m, 29),
              url: 'http://EGrappler.com/'
            }
          ]
        });
      });
    </script><!-- /Calendar -->