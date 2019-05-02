
<?php

session_start();
if (empty($_SESSION['l'])) {
    header("location:../login.html");
}
else {
?>
<?php
  //require 'connect.php';
  $objectPdo = new PDO('mysql:host=localhost;dbname=projetweb', 'root', '');
  $pdoStat = $objectPdo->prepare('SELECT * FROM produit ORDER BY quantite ');
  $executeIsOK = $pdoStat->execute();
  $produit= $pdoStat->fetchAll();
      include "../config.php";

 ?>



<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
 
  <title>Liste Produit Hors Stock</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<picture> <center>
          <source media="(min-width: 100px)" srcset="../images/logo_casa_sport.png">
  <img src="../images/logo_casa_sport.png"    style="width:390px;">
  </center>
      </picture>
<body onload="window.print();">

<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-xs-12">
        <h2 class="page-header">
          <br>
              
          <small class="pull-right"></small>
        </h2>
      </div>
      <!-- /.col -->
    </div>
      
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- Table row -->
        <table class="table table-striped">
  <thead>
     </thead>
  <tbody>
   <html>
<head>
<meta charset="UTF-8">
<style type="text/css">
body {
    background-color: #f6f6ff;
    font-family: Calibri, Myriad;
}

#main {
    width: 780px;
    padding: 20px;
    margin: auto;
}

.images_petit {
width:100px;
height:100px;
}
table.timecard {
    margin: auto;
    width: 600px;
    border-collapse: collapse;
    border: 1px solid #fff; /*for older IE*/
    border-style: hidden;
}

table.timecard caption {
    background-color: #f79646;
    color: #fff;
    font-size: x-large;
    font-weight: bold;
    letter-spacing: .3em;
}

table.timecard thead th {
    padding: 8px;
    background-color: #fde9d9;
    font-size: large;
}

table.timecard thead th#thDay {
    width: 40%; 
}

table.timecard thead th#thRegular, table.timecard thead th#thOvertime, table.timecard thead th#thTotal {
    width: 20%;
}

table.timecard th, table.timecard td {
    padding: 3px;
    border-width: 1px;
    border-style: solid;
    border-color: #f79646 #ccc;
}

table.timecard td {
    text-align: right;
}

table.timecard tbody th {
    text-align: left;
    font-weight: normal;
}

table.timecard tfoot {
    font-weight: bold;
    font-size: large;
    background-color: #687886;
    color: #fff;
}

table.timecard tr.even {
    background-color: #fde9d9;
}

</style>

</head>

<body>
<div id="main">
<table class="timecard">
    <caption>Liste Des Produits Hors Stock</caption>
    <thead>
        <tr>
            <th id="thDay">photo du produit</th>
            <th id="thDay">Nom du produit</th>
            <th id="thDay">Réference Produit</th>
            <th id="thDay">Prix</th>
            
            
        </tr>
    </thead>
    
        
    <?php 



    $products=array();
$db = config::getConnexion();
$products = $db->query("SELECT * FROM produit WHERE quantite<5 ");


            foreach ($products as $row):?>
            
                                
    <tbody>
        <tr class="odd">

            <th ><div class="cart-img-product b-rad-4 o-f-hidden">

                                      <center> <?PHP echo "<img src='../image/".$row["photodeproduit"]."' width='150px' class='images_petit' >";    ?> </center> 
                                </div></th>
                                <td ><center><?PHP echo $row['Nomproduit']; ?></center></td>
                                 <td ><center><?PHP echo $row['Referenceproduit']; ?></center></td>
                                <td ><center><?PHP echo $row['prix']; ?>DT</center></td>
                            

            
            
        </tr>
        <?php endforeach;?>

    </tfoot>
</table>
 
</div>
</body>
</html>

    </tbody>
</table>

    <!-- /.row -->

    <div class="row">
      <!-- accepted payments column -->
      
      <!-- /.col -->
      
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->

</body>
<?php } ?>
</html>
