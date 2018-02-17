<?php
  $menu = $_SESSION["menu-admin"];
?>

<div class="subnavbar">
  <div class="subnavbar-inner">
    <div class="container">
      <ul class="mainnav">
        <li class="<?=selecionaMenu($menu, "dashboard")?>">
            <a href="/amildental/admin/dashboard.php"><i class="icon-dashboard"></i><span>Dashboard</span> </a> 
        </li>       
        <li class="dropdown <?=selecionaMenu($menu, "relatorios")?>">
          <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-list-alt"></i><span>Relatórios</span> <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="analise.php">Em Análise</a></li>
            <li><a href="finalizadas.php">Finalizados</a></li>            
          </ul>
        </li>
      </ul>
    </div>
    <!-- /container --> 
  </div>
  <!-- /subnavbar-inner --> 
</div>
<!-- /subnavbar -->