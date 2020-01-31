<?php
  $active_menu = "data_tables";
  include_once "../layout/header.php";
?>

<body class="hold-transition skin-red sidebar-mini">


  <link rel="stylesheet" href="../../plugins/datatables/dataTables.bootstrap.css">

  <script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="../../plugins/datatables/dataTables.bootstrap.min.js"></script>


  <div class="wrapper">

    <?php include_once "../layout/topmenu.php"; ?>
    <?php include_once "../layout/left-sidebar.php"; ?>
    

    <div class="content-wrapper">

        <?php include_once("data_tables/main_header.php") ?>
        
    </div>
    
    <?php include_once "../layout/copyright.php"; ?>
    <?php include_once "../layout/right-sidebar.php"; ?>


    <div class="control-sidebar-bg"></div>
  </div>

<?php include_once "../layout/footer.php" ?>
<script src="data_tables/script.js"></script>