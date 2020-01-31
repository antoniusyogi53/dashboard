<?php
include('config.php');                
?>

<script src="https://cdn.anychart.com/releases/v8/js/anychart-base.min.js"></script>
<script src="https://cdn.anychart.com/releases/v8/js/anychart-ui.min.js"></script>
<script src="https://cdn.anychart.com/releases/v8/js/anychart-exports.min.js"></script>
<script src="https://cdn.anychart.com/releases/v8/js/anychart-stock.min.js"></script>
<script src="https://cdn.anychart.com/releases/v8/js/anychart-data-adapter.min.js"></script>
<link rel="stylesheet" href="https://cdn.anychart.com/releases/v8/css/anychart-ui.min.css" />
<link rel="stylesheet" href="https://cdn.anychart.com/releases/v8/fonts/css/anychart-font.min.css" />
<style>
  #container {
    width: 80%;
    height: 500px;
    margin: 0;
    padding: 0;
  }
</style>


<section class="content-header">
  <h1>
    Dashboard
    <small>advanced chart</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
    <li><a href="#">Filter Data</a></li>
    <li class="active">Grafik</li>
  </ol>
</section>


<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Tahun</h3>
          <br>
          <form>
            <div>
              <select name="tahuns">
                <option value="">Pilih Tahun</option>
                <?php
                $thn_skr = date('Y');
                for ($x = $thn_skr; $x >= 2015; $x--) {
                  ?>
                  <option value="<?php echo $x ?>"><?php echo $x ?></option>
                  <?php
                }
                ?>
              </select>
              <button>Cari</button>  
            </div>
          </form>
        </br>
      </div>

<div class="box">
    <div class="box-header">
      <h3 class="box-title">Grafik Berdasarkan Tahun</h3>
    </div>

        <?php
        $status="";
        $tahun=@$_GET['tahuns'];
        $total = mysqli_query($con,"SELECT count(*) as jum FROM are where YEAR(Tanggal_Pemesanan)='$tahun'");
        $data = mysqli_fetch_row($total);
        $totalall = $data[0];


        $hasil1 = mysqli_query($con,"SELECT count(*) as jum FROM are WHERE MONTH(Tanggal_Pemesanan)='01' and YEAR(Tanggal_Pemesanan)='$tahun'");
        $data1 = mysqli_fetch_row($hasil1);
        $jumlah1 = $data1[0];
        $percent1= $jumlah1 * $totalall /100 ;


        $hasil2 = mysqli_query($con,"SELECT count(*) as jum FROM are WHERE MONTH(Tanggal_Pemesanan)='02' and YEAR(Tanggal_Pemesanan)='$tahun'");
        $data2 = mysqli_fetch_row($hasil2);
        $jumlah2 = $data2[0];
        $percent2= $jumlah2 * $totalall /100 ;


        $hasil3 = mysqli_query($con,"SELECT count(*) as jum FROM are WHERE MONTH(Tanggal_Pemesanan)='03' and YEAR(Tanggal_Pemesanan)='$tahun'");
        $data3 = mysqli_fetch_row($hasil3);
        $jumlah3 = $data3[0];
        $percent3= $jumlah3 * $totalall /100 ;


        $hasil4 = mysqli_query($con,"SELECT count(*) as jum FROM are WHERE MONTH(Tanggal_Pemesanan)='04' and YEAR(Tanggal_Pemesanan)='$tahun'");
        $data4 = mysqli_fetch_row($hasil4);
        $jumlah4 = $data4[0];
        $percent4= $jumlah4 * $totalall /100 ;


        $hasil5 = mysqli_query($con,"SELECT count(*) as jum FROM are WHERE MONTH(Tanggal_Pemesanan)='05' and YEAR(Tanggal_Pemesanan)='$tahun'");
        $data5 = mysqli_fetch_row($hasil5);
        $jumlah5 = $data5[0];
        $percent5= $jumlah5 * $totalall /100 ;


        $hasil6 = mysqli_query($con,"SELECT count(*) as jum FROM are WHERE MONTH(Tanggal_Pemesanan)='06' and YEAR(Tanggal_Pemesanan)='$tahun'");
        $data6 = mysqli_fetch_row($hasil6);
        $jumlah6 = $data6[0];
        $percent6= $jumlah6 * $totalall /100 ;


        $hasil7 = mysqli_query($con,"SELECT count(*) as jum FROM are WHERE MONTH(Tanggal_Pemesanan)='07' and YEAR(Tanggal_Pemesanan)='$tahun'");
        $data7 = mysqli_fetch_row($hasil7);
        $jumlah7 = $data7[0];
        $percent7= $jumlah7 * $totalall /100 ;


        $hasil8 = mysqli_query($con,"SELECT count(*) as jum FROM are WHERE MONTH(Tanggal_Pemesanan)='08' and YEAR(Tanggal_Pemesanan)='$tahun'");
        $data8 = mysqli_fetch_row($hasil8);
        $jumlah8 = $data8[0];
        $percent8= $jumlah8 * $totalall /100 ;


        $hasil9 = mysqli_query($con,"SELECT count(*) as jum FROM are WHERE MONTH(Tanggal_Pemesanan)='09' and YEAR(Tanggal_Pemesanan)='$tahun'");
        $data9 = mysqli_fetch_row($hasil9);
        $jumlah9 = $data9[0];
        $percent9= $jumlah9 * $totalall /100 ;


        $hasil10 = mysqli_query($con,"SELECT count(*) as jum FROM are WHERE MONTH(Tanggal_Pemesanan)='10' and YEAR(Tanggal_Pemesanan)='$tahun'");
        $data10 = mysqli_fetch_row($hasil10);
        $jumlah10 = $data10[0];
        $percent10= $jumlah10 * $totalall /100 ;


        $hasil11 = mysqli_query($con,"SELECT count(*) as jum FROM are WHERE MONTH(Tanggal_Pemesanan)='11' and YEAR(Tanggal_Pemesanan)='$tahun'");
        $data11 = mysqli_fetch_row($hasil11);
        $jumlah11 = $data11[0];
        $percent11= $jumlah11 * $totalall /100 ;


        $hasil12 = mysqli_query($con,"SELECT count(*) as jum FROM are WHERE MONTH(Tanggal_Pemesanan)='12' and YEAR(Tanggal_Pemesanan)='$tahun'");
        $data12 = mysqli_fetch_row($hasil12);
        $jumlah12 = $data12[0];
        $percent12= $jumlah12 * $totalall /100 ;

        ?>





        <?php
        $status="success"; 
        $rt = mysqli_query($con,"SELECT * FROM are WHERE MONTH(Tanggal_Pemesanan)='01' and YEAR(Tanggal_Pemesanan)='$tahun' and status='$status'");
        $num0 = mysqli_num_rows($rt);
        {?>
        <?php } ?>


        <?php
        $status="on progress"; 
        $rt = mysqli_query($con,"SELECT * FROM are WHERE MONTH(Tanggal_Pemesanan)='01' and YEAR(Tanggal_Pemesanan)='$tahun' and status='$status'");
        $num2 = mysqli_num_rows($rt);
        {?>
        <?php } ?>


        <?php
        $status="cancel by system";                   
        $rt = mysqli_query($con,"SELECT * FROM are WHERE MONTH(Tanggal_Pemesanan)='01' and YEAR(Tanggal_Pemesanan)='$tahun' and status='$status'");
        $num3 = mysqli_num_rows($rt);
        {?>
        <?php } ?>

        <?php
        $status="cancel by customer";                   
        $rt = mysqli_query($con,"SELECT * FROM are WHERE MONTH(Tanggal_Pemesanan)='01' and YEAR(Tanggal_Pemesanan)='$tahun' and status='$status'");
        $num4 = mysqli_num_rows($rt);
        {?>
        <?php } ?>

        <?php
        $status="cancel by vendor";                   
        $rt = mysqli_query($con,"SELECT * FROM are WHERE MONTH(Tanggal_Pemesanan)='01' and YEAR(Tanggal_Pemesanan)='$tahun' and status='$status'");
        $num49 = mysqli_num_rows($rt);
        {?>
        <?php } ?>

 

        <?php
        $status="success"; 
        $rt = mysqli_query($con,"SELECT * FROM are WHERE MONTH(Tanggal_Pemesanan)='02' and YEAR(Tanggal_Pemesanan)='$tahun' and status='$status'");
        $num5 = mysqli_num_rows($rt);
        {?>
        <?php } ?>


        <?php
        $status="on progress"; 
        $rt = mysqli_query($con,"SELECT * FROM are WHERE MONTH(Tanggal_Pemesanan)='02' and YEAR(Tanggal_Pemesanan)='$tahun' and status='$status'");
        $num6 = mysqli_num_rows($rt);
        {?>
        <?php } ?>


        <?php
        $status="cancel by system";                   
        $rt = mysqli_query($con,"SELECT * FROM are WHERE MONTH(Tanggal_Pemesanan)='02' and YEAR(Tanggal_Pemesanan)='$tahun' and status='$status'");
        $num7 = mysqli_num_rows($rt);
        {?>
        <?php } ?>

        <?php
        $status="cancel by customer";                   
        $rt = mysqli_query($con,"SELECT * FROM are WHERE MONTH(Tanggal_Pemesanan)='02' and YEAR(Tanggal_Pemesanan)='$tahun' and status='$status'");
        $num8 = mysqli_num_rows($rt);
        {?>
        <?php } ?>

        <?php
        $status="cancel by vendor";                   
        $rt = mysqli_query($con,"SELECT * FROM are WHERE MONTH(Tanggal_Pemesanan)='02' and YEAR(Tanggal_Pemesanan)='$tahun' and status='$status'");
        $num50 = mysqli_num_rows($rt);
        {?>
        <?php } ?>



        <?php
        $status="success"; 
        $rt = mysqli_query($con,"SELECT * FROM are WHERE MONTH(Tanggal_Pemesanan)='03' and YEAR(Tanggal_Pemesanan)='$tahun' and status='$status'");
        $num9 = mysqli_num_rows($rt);
        {?>
        <?php } ?>


        <?php
        $status="on progress"; 
        $rt = mysqli_query($con,"SELECT * FROM are WHERE MONTH(Tanggal_Pemesanan)='03' and YEAR(Tanggal_Pemesanan)='$tahun' and status='$status'");
        $num10 = mysqli_num_rows($rt);
        {?>
        <?php } ?>


        <?php
        $status="cancel by system";                   
        $rt = mysqli_query($con,"SELECT * FROM are WHERE MONTH(Tanggal_Pemesanan)='03' and YEAR(Tanggal_Pemesanan)='$tahun' and status='$status'");
        $num11 = mysqli_num_rows($rt);
        {?>
        <?php } ?>

        <?php
        $status="cancel by customer";                   
        $rt = mysqli_query($con,"SELECT * FROM are WHERE MONTH(Tanggal_Pemesanan)='03' and YEAR(Tanggal_Pemesanan)='$tahun' and status='$status'");
        $num12 = mysqli_num_rows($rt);
        {?>
        <?php } ?>

        <?php
        $status="cancel by vendor";                   
        $rt = mysqli_query($con,"SELECT * FROM are WHERE MONTH(Tanggal_Pemesanan)='03' and YEAR(Tanggal_Pemesanan)='$tahun' and status='$status'");
        $num51 = mysqli_num_rows($rt);
        {?>
        <?php } ?>



        <?php
        $status="success"; 
        $rt = mysqli_query($con,"SELECT * FROM are WHERE MONTH(Tanggal_Pemesanan)='04' and YEAR(Tanggal_Pemesanan)='$tahun' and status='$status'");
        $num13 = mysqli_num_rows($rt);
        {?>
        <?php } ?>


        <?php
        $status="on progress"; 
        $rt = mysqli_query($con,"SELECT * FROM are WHERE MONTH(Tanggal_Pemesanan)='04' and YEAR(Tanggal_Pemesanan)='$tahun' and status='$status'");
        $num14 = mysqli_num_rows($rt);
        {?>
        <?php } ?>


        <?php
        $status="cancel by system";                   
        $rt = mysqli_query($con,"SELECT * FROM are WHERE MONTH(Tanggal_Pemesanan)='04' and YEAR(Tanggal_Pemesanan)='$tahun' and status='$status'");
        $num15 = mysqli_num_rows($rt);
        {?>
        <?php } ?>

        <?php
        $status="cancel by customer";                   
        $rt = mysqli_query($con,"SELECT * FROM are WHERE MONTH(Tanggal_Pemesanan)='04' and YEAR(Tanggal_Pemesanan)='$tahun' and status='$status'");
        $num16 = mysqli_num_rows($rt);
        {?>
        <?php } ?>

        <?php
        $status="cancel by vendor";                   
        $rt = mysqli_query($con,"SELECT * FROM are WHERE MONTH(Tanggal_Pemesanan)='04' and YEAR(Tanggal_Pemesanan)='$tahun' and status='$status'");
        $num52 = mysqli_num_rows($rt);
        {?>
        <?php } ?>



        <?php
        $status="success"; 
        $rt = mysqli_query($con,"SELECT * FROM are WHERE MONTH(Tanggal_Pemesanan)='05' and YEAR(Tanggal_Pemesanan)='$tahun' and status='$status'");
        $num17 = mysqli_num_rows($rt);
        {?>
        <?php } ?>


        <?php
        $status="on progress"; 
        $rt = mysqli_query($con,"SELECT * FROM are WHERE MONTH(Tanggal_Pemesanan)='05' and YEAR(Tanggal_Pemesanan)='$tahun' and status='$status'");
        $num18 = mysqli_num_rows($rt);
        {?>
        <?php } ?>


        <?php
        $status="cancel by system";                   
        $rt = mysqli_query($con,"SELECT * FROM are WHERE MONTH(Tanggal_Pemesanan)='05' and YEAR(Tanggal_Pemesanan)='$tahun' and status='$status'");
        $num19 = mysqli_num_rows($rt);
        {?>
        <?php } ?>

        <?php
        $status="cancel by customer";                   
        $rt = mysqli_query($con,"SELECT * FROM are WHERE MONTH(Tanggal_Pemesanan)='05' and YEAR(Tanggal_Pemesanan)='$tahun' and status='$status'");
        $num20 = mysqli_num_rows($rt);
        {?>
        <?php } ?>

        <?php
        $status="cancel by vendor";                   
        $rt = mysqli_query($con,"SELECT * FROM are WHERE MONTH(Tanggal_Pemesanan)='05' and YEAR(Tanggal_Pemesanan)='$tahun' and status='$status'");
        $num53 = mysqli_num_rows($rt);
        {?>
        <?php } ?>


        <?php
        $status="success"; 
        $rt = mysqli_query($con,"SELECT * FROM are WHERE MONTH(Tanggal_Pemesanan)='06' and YEAR(Tanggal_Pemesanan)='$tahun' and status='$status'");
        $num21 = mysqli_num_rows($rt);
        {?>
        <?php } ?>


        <?php
        $status="on progress"; 
        $rt = mysqli_query($con,"SELECT * FROM are WHERE MONTH(Tanggal_Pemesanan)='06' and YEAR(Tanggal_Pemesanan)='$tahun' and status='$status'");
        $num22 = mysqli_num_rows($rt);
        {?>
        <?php } ?>


        <?php
        $status="cancel by system";                   
        $rt = mysqli_query($con,"SELECT * FROM are WHERE MONTH(Tanggal_Pemesanan)='06' and YEAR(Tanggal_Pemesanan)='$tahun' and status='$status'");
        $num23 = mysqli_num_rows($rt);
        {?>
        <?php } ?>

        <?php
        $status="cancel by customer";                   
        $rt = mysqli_query($con,"SELECT * FROM are WHERE MONTH(Tanggal_Pemesanan)='06' and YEAR(Tanggal_Pemesanan)='$tahun' and status='$status'");
        $num24 = mysqli_num_rows($rt);
        {?>
        <?php } ?>

        <?php
        $status="cancel by vendor";                   
        $rt = mysqli_query($con,"SELECT * FROM are WHERE MONTH(Tanggal_Pemesanan)='06' and YEAR(Tanggal_Pemesanan)='$tahun' and status='$status'");
        $num54 = mysqli_num_rows($rt);
        {?>
        <?php } ?>



        <?php
        $status="success"; 
        $rt = mysqli_query($con,"SELECT * FROM are WHERE MONTH(Tanggal_Pemesanan)='07' and YEAR(Tanggal_Pemesanan)='$tahun' and status='$status'");
        $num25 = mysqli_num_rows($rt);
        {?>
        <?php } ?>


        <?php
        $status="on progress"; 
        $rt = mysqli_query($con,"SELECT * FROM are WHERE MONTH(Tanggal_Pemesanan)='07' and YEAR(Tanggal_Pemesanan)='$tahun' and status='$status'");
        $num26 = mysqli_num_rows($rt);
        {?>
        <?php } ?>


        <?php
        $status="cancel by system";                   
        $rt = mysqli_query($con,"SELECT * FROM are WHERE MONTH(Tanggal_Pemesanan)='07' and YEAR(Tanggal_Pemesanan)='$tahun' and status='$status'");
        $num27 = mysqli_num_rows($rt);
        {?>
        <?php } ?>

        <?php
        $status="cancel by customer";                   
        $rt = mysqli_query($con,"SELECT * FROM are WHERE MONTH(Tanggal_Pemesanan)='07' and YEAR(Tanggal_Pemesanan)='$tahun' and status='$status'");
        $num28 = mysqli_num_rows($rt);
        {?>
        <?php } ?>

        <?php
        $status="cancel by vendor";                   
        $rt = mysqli_query($con,"SELECT * FROM are WHERE MONTH(Tanggal_Pemesanan)='07' and YEAR(Tanggal_Pemesanan)='$tahun' and status='$status'");
        $num55 = mysqli_num_rows($rt);
        {?>
        <?php } ?>



        <?php
        $status="success"; 
        $rt = mysqli_query($con,"SELECT * FROM are WHERE MONTH(Tanggal_Pemesanan)='08' and YEAR(Tanggal_Pemesanan)='$tahun' and status='$status'");
        $num29 = mysqli_num_rows($rt);
        {?>
        <?php } ?>


        <?php
        $status="on progress"; 
        $rt = mysqli_query($con,"SELECT * FROM are WHERE MONTH(Tanggal_Pemesanan)='08' and YEAR(Tanggal_Pemesanan)='$tahun' and status='$status'");
        $num30 = mysqli_num_rows($rt);
        {?>
        <?php } ?>


        <?php
        $status="cancel by system";                   
        $rt = mysqli_query($con,"SELECT * FROM are WHERE MONTH(Tanggal_Pemesanan)='08' and YEAR(Tanggal_Pemesanan)='$tahun' and status='$status'");
        $num31 = mysqli_num_rows($rt);
        {?>
        <?php } ?>

        <?php
        $status="cancel by customer";                   
        $rt = mysqli_query($con,"SELECT * FROM are WHERE MONTH(Tanggal_Pemesanan)='08' and YEAR(Tanggal_Pemesanan)='$tahun' and status='$status'");
        $num32 = mysqli_num_rows($rt);
        {?>
        <?php } ?>

        <?php
        $status="cancel by vendor";                   
        $rt = mysqli_query($con,"SELECT * FROM are WHERE MONTH(Tanggal_Pemesanan)='08' and YEAR(Tanggal_Pemesanan)='$tahun' and status='$status'");
        $num56 = mysqli_num_rows($rt);
        {?>
        <?php } ?>



        <?php
        $status="success"; 
        $rt = mysqli_query($con,"SELECT * FROM are WHERE MONTH(Tanggal_Pemesanan)='09' and YEAR(Tanggal_Pemesanan)='$tahun' and status='$status'");
        $num33 = mysqli_num_rows($rt);
        {?>
        <?php } ?>


        <?php
        $status="on progress"; 
        $rt = mysqli_query($con,"SELECT * FROM are WHERE MONTH(Tanggal_Pemesanan)='09' and YEAR(Tanggal_Pemesanan)='$tahun' and status='$status'");
        $num34 = mysqli_num_rows($rt);
        {?>
        <?php } ?>


        <?php
        $status="cancel by system";                   
        $rt = mysqli_query($con,"SELECT * FROM are WHERE MONTH(Tanggal_Pemesanan)='09' and YEAR(Tanggal_Pemesanan)='$tahun' and status='$status'");
        $num35 = mysqli_num_rows($rt);
        {?>
        <?php } ?>

        <?php
        $status="cancel by customer";                   
        $rt = mysqli_query($con,"SELECT * FROM are WHERE MONTH(Tanggal_Pemesanan)='09' and YEAR(Tanggal_Pemesanan)='$tahun' and status='$status'");
        $num36 = mysqli_num_rows($rt);
        {?>
        <?php } ?>

        <?php
        $status="cancel by vendor";                   
        $rt = mysqli_query($con,"SELECT * FROM are WHERE MONTH(Tanggal_Pemesanan)='09' and YEAR(Tanggal_Pemesanan)='$tahun' and status='$status'");
        $num57 = mysqli_num_rows($rt);
        {?>
        <?php } ?>



        <?php
        $status="success"; 
        $rt = mysqli_query($con,"SELECT * FROM are WHERE MONTH(Tanggal_Pemesanan)='10' and YEAR(Tanggal_Pemesanan)='$tahun' and status='$status'");
        $num37 = mysqli_num_rows($rt);
        {?>
        <?php } ?>


        <?php
        $status="on progress"; 
        $rt = mysqli_query($con,"SELECT * FROM are WHERE MONTH(Tanggal_Pemesanan)='10' and YEAR(Tanggal_Pemesanan)='$tahun' and status='$status'");
        $num38 = mysqli_num_rows($rt);
        {?>
        <?php } ?>


        <?php
        $status="cancel by system";                   
        $rt = mysqli_query($con,"SELECT * FROM are WHERE MONTH(Tanggal_Pemesanan)='10' and YEAR(Tanggal_Pemesanan)='$tahun' and status='$status'");
        $num39 = mysqli_num_rows($rt);
        {?>
        <?php } ?>

        <?php
        $status="cancel by customer";                   
        $rt = mysqli_query($con,"SELECT * FROM are WHERE MONTH(Tanggal_Pemesanan)='10' and YEAR(Tanggal_Pemesanan)='$tahun' and status='$status'");
        $num40 = mysqli_num_rows($rt);
        {?>
        <?php } ?>

        <?php
        $status="cancel by vendor";                   
        $rt = mysqli_query($con,"SELECT * FROM are WHERE MONTH(Tanggal_Pemesanan)='10' and YEAR(Tanggal_Pemesanan)='$tahun' and status='$status'");
        $num58 = mysqli_num_rows($rt);
        {?>
        <?php } ?>



        <?php
        $status="success"; 
        $rt = mysqli_query($con,"SELECT * FROM are WHERE MONTH(Tanggal_Pemesanan)='11' and YEAR(Tanggal_Pemesanan)='$tahun' and status='$status'");
        $num41 = mysqli_num_rows($rt);
        {?>
        <?php } ?>


        <?php
        $status="on progress"; 
        $rt = mysqli_query($con,"SELECT * FROM are WHERE MONTH(Tanggal_Pemesanan)='11' and YEAR(Tanggal_Pemesanan)='$tahun' and status='$status'");
        $num42 = mysqli_num_rows($rt);
        {?>
        <?php } ?>


        <?php
        $status="cancel by system";                   
        $rt = mysqli_query($con,"SELECT * FROM are WHERE MONTH(Tanggal_Pemesanan)='11' and YEAR(Tanggal_Pemesanan)='$tahun' and status='$status'");
        $num43 = mysqli_num_rows($rt);
        {?>
        <?php } ?>

        <?php
        $status="cancel by customer";                   
        $rt = mysqli_query($con,"SELECT * FROM are WHERE MONTH(Tanggal_Pemesanan)='11' and YEAR(Tanggal_Pemesanan)='$tahun' and status='$status'");
        $num44 = mysqli_num_rows($rt);
        {?>
        <?php } ?>

        <?php
        $status="cancel by vendor";                   
        $rt = mysqli_query($con,"SELECT * FROM are WHERE MONTH(Tanggal_Pemesanan)='11' and YEAR(Tanggal_Pemesanan)='$tahun' and status='$status'");
        $num59 = mysqli_num_rows($rt);
        {?>
        <?php } ?>



        <?php
        $status="success"; 
        $rt = mysqli_query($con,"SELECT * FROM are WHERE MONTH(Tanggal_Pemesanan)='12' and YEAR(Tanggal_Pemesanan)='$tahun' and status='$status'");
        $num45 = mysqli_num_rows($rt);
        {?>
        <?php } ?>


        <?php
        $status="on progress"; 
        $rt = mysqli_query($con,"SELECT * FROM are WHERE MONTH(Tanggal_Pemesanan)='12' and YEAR(Tanggal_Pemesanan)='$tahun' and status='$status'");
        $num46 = mysqli_num_rows($rt);
        {?>
        <?php } ?>


        <?php
        $status="cancel by system";                   
        $rt = mysqli_query($con,"SELECT * FROM are WHERE MONTH(Tanggal_Pemesanan)='12' and YEAR(Tanggal_Pemesanan)='$tahun' and status='$status'");
        $num47 = mysqli_num_rows($rt);
        {?>
        <?php } ?>

        <?php
        $status="cancel by customer";                   
        $rt = mysqli_query($con,"SELECT * FROM are WHERE MONTH(Tanggal_Pemesanan)='12' and YEAR(Tanggal_Pemesanan)='$tahun' and status='$status'");
        $num48 = mysqli_num_rows($rt);
        {?>
        <?php } ?>

        <?php
        $status="cancel by vendor";                   
        $rt = mysqli_query($con,"SELECT * FROM are WHERE MONTH(Tanggal_Pemesanan)='12' and YEAR(Tanggal_Pemesanan)='$tahun' and status='$status'");
        $num60 = mysqli_num_rows($rt);
        {?>
        <?php } ?>



        <body>
          <div class="container">
            <div class="row">
              <div id="container"></div>

            </div>
          </div>


      </div>

    </div>

  </div>
  <script type="text/javascript">
    anychart.onDocumentReady(function() {

  var dataSet = anychart.data.set(getData());


  var seriesData_1 = dataSet.mapAs({
    'x': 0,
    'value': 1
  });


  var seriesData_2 = dataSet.mapAs({
    'x': 0,
    'value': 2
  });


  var seriesData_3 = dataSet.mapAs({
    'x': 0,
    'value': 3
  });


  var seriesData_4 = dataSet.mapAs({
    'x': 0,
    'value': 4
  });


  var seriesData_5 = dataSet.mapAs({
    'x': 0,
    'value': 5
  });
  

  var seriesData_6 = dataSet.mapAs({
    'x': 0,
    'value': 6
  });



  var chart = anychart.column();


  chart.animation(true);

  chart.padding(10);


  chart.yAxis(false);


  chart.xAxis()
  .title('')
  .stroke('black', 2);

  chart.xAxis().ticks()
  .enabled(false);


  chart.yScale().stackMode('value');


  chart.title('');



  chart.dataArea()
  .background()
  .enabled(true)
  .fill('#456')
  .corners(25, 25, 0, 0);


  chart.xGrid()
  .stroke('#fff .1')
  .isMinor(true)
  .drawFirstLine(false)
  .drawLastLine(false);

  chart.yGrid()
  .stroke('#fff .1')
  .isMinor(true)
  .drawFirstLine(false)
  .drawLastLine(false);




  var series_1 = chart.column(seriesData_1);
  series_1.name('Total');


  var series_2 = chart.column(seriesData_2);
  series_2.name('Success');


  var series_3 = chart.column(seriesData_3);
  series_3.name('On Progress');


  var series_4 = chart.column(seriesData_4);
  series_4.name('Cancel By System');


  var series_5 = chart.column(seriesData_5);
  series_5.name('Cancel By Customer');


    var series_6 = chart.column(seriesData_6);
    series_6.name('Cancel By Vendor');


  chart.legend()
  .enabled(true)
  .fontSize(13)
  .fontColor('white')
  .positionMode('inside')
  .margin({
    top: 15
  });


  chart.container('container');

  chart.draw();
});

    function getData() {
      return [
      ['Janurai', <?php echo $jumlah1 = $data1[0]; ?>, <?php echo htmlentities($num0); ?>, <?php echo htmlentities($num2); ?>, <?php echo htmlentities($num3); ?>, <?php echo htmlentities($num4); ?>, <?php echo htmlentities($num49); ?>],
      ['Februari', <?php echo $jumlah2 = $data2[0]; ?>, <?php echo htmlentities($num5); ?>, <?php echo htmlentities($num6); ?>, <?php echo htmlentities($num7); ?>, <?php echo htmlentities($num8); ?>, <?php echo htmlentities($num50); ?>],
      ['Maret', <?php echo $jumlah3 = $data3[0]; ?>, <?php echo htmlentities($num9); ?>, <?php echo htmlentities($num10); ?>, <?php echo htmlentities($num11); ?>, <?php echo htmlentities($num12); ?>, <?php echo htmlentities($num51); ?>],
      ['April', <?php echo $jumlah4 = $data4[0]; ?>, <?php echo htmlentities($num13); ?>, <?php echo htmlentities($num14); ?>, <?php echo htmlentities($num15); ?>, <?php echo htmlentities($num16); ?>, <?php echo htmlentities($num52); ?>],
      ['Mei', <?php echo $jumlah5 = $data5[0]; ?>, <?php echo htmlentities($num17); ?>, <?php echo htmlentities($num18); ?>, <?php echo htmlentities($num19); ?>, <?php echo htmlentities($num20); ?>, <?php echo htmlentities($num53); ?>],
      ['Juni', <?php echo $jumlah6 = $data6[0]; ?>, <?php echo htmlentities($num21); ?>, <?php echo htmlentities($num22); ?>, <?php echo htmlentities($num23); ?>, <?php echo htmlentities($num24); ?>, <?php echo htmlentities($num54); ?>],
      ['Juli', <?php echo $jumlah7 = $data7[0]; ?>, <?php echo htmlentities($num25); ?>, <?php echo htmlentities($num26); ?>, <?php echo htmlentities($num27); ?>, <?php echo htmlentities($num28); ?>, <?php echo htmlentities($num55); ?>],
      ['Agustus', <?php echo $jumlah8 = $data8[0]; ?>, <?php echo htmlentities($num29); ?>, <?php echo htmlentities($num30); ?>, <?php echo htmlentities($num31); ?>, <?php echo htmlentities($num32); ?>, <?php echo htmlentities($num56); ?>],
      ['September', <?php echo $jumlah9 = $data9[0]; ?>, <?php echo htmlentities($num33); ?>, <?php echo htmlentities($num34); ?>, <?php echo htmlentities($num35); ?>, <?php echo htmlentities($num36); ?>, <?php echo htmlentities($num57); ?>],
      ['Oktober', <?php echo $jumlah10 = $data10[0]; ?>, <?php echo htmlentities($num37); ?>, <?php echo htmlentities($num38); ?>, <?php echo htmlentities($num39); ?>, <?php echo htmlentities($num40); ?>, <?php echo htmlentities($num58); ?>],
      ['November', <?php echo $jumlah11 = $data11[0]; ?>, <?php echo htmlentities($num41); ?>, <?php echo htmlentities($num42); ?>, <?php echo htmlentities($num43); ?>, <?php echo htmlentities($num44); ?>, <?php echo htmlentities($num59); ?>],
      ['Desember', <?php echo $jumlah12 = $data12[0]; ?>, <?php echo htmlentities($num45); ?>, <?php echo htmlentities($num46); ?>, <?php echo htmlentities($num47); ?>, <?php echo htmlentities($num48); ?>, <?php echo htmlentities($num60); ?>]
      ]
    }
  </script>

</section>
