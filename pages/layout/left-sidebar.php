<?php
function isActive($menu, $mode="full"){
  global $active_menu;
  if ($mode == "partial")
    echo ($active_menu == $menu? "active": "");
  else
    echo ($active_menu == $menu? "class='active'": "");
}
?>

<aside class="main-sidebar" style="background-color: white;">

  <section class="sidebar">

    <ul class="sidebar-menu">
      <li class="header" style="background-color: white;">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i> <span>FILTER DATA</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li <?php isActive("data_tables") ?>>
              <a href="../../pages/filter/data_tables.php"><i class="fa fa-circle-o"></i>Data Tables</a>
            </li>
          </ul>
          <ul class="treeview-menu">
            <li <?php isActive("simple_tables") ?>>
              <a href="../../pages/filter/grafik.php"><i class="fa fa-circle-o"></i>Grafik</a>
            </li>
          </ul>
        </li>
      </ul>
    </section>

  </aside>
  <script>
    var parent = $("ul.sidebar-menu li.active").closest("ul").closest("li");
    if (parent[0] != undefined)
      $(parent[0]).addClass("active");
  </script>