<?php

session_start();
if (empty($_SESSION['l'])) {
    header("location:../login.html");
}
else {
?>
<!DOCTYPE html>
<html class="no-js">
    
    <head>
        <title>Produit</title>
        <!-- Bootstrap -->
        <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="../bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="../vendors/easypiechart/jquery.easy-pie-chart.css" rel="stylesheet" media="screen">
        <link href="../assets/styles.css" rel="stylesheet" media="screen">
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <script src="../vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <script type="../text/javascript" src="controlep.js"></script>
    </head>
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="#">Admin Panel</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav pull-right">
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i><?PHP echo $_SESSION['l'] ;?><i class="caret"></i>

                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a tabindex="-1" href="#">Profile</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a tabindex="-1" href="../login.html">Logout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="nav">
                            <li class="active">
                                <a href="#">Dashboard</a>
                            </li>
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle">Settings <b class="caret"></b>

                                </a>
                                <ul class="dropdown-menu" id="menu1">
                                    <li>
                                        <a href="#">Tools <i class="icon-arrow-right"></i>

                                        </a>
                                        <ul class="dropdown-menu sub-menu">
                                            <li>
                                                <a href="#">Reports</a>
                                            </li>
                                            <li>
                                                <a href="#">Logs</a>
                                            </li>
                                            <li>
                                                <a href="#">Errors</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">SEO Settings</a>
                                    </li>
                                    <li>
                                        <a href="#">Other Link</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="#">Other Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Other Link</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Content <i class="caret"></i>

                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a tabindex="-1" href="#">Blog</a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="#">News</a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="#">Custom Pages</a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="#">Calendar</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a tabindex="-1" href="#">FAQ</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Users <i class="caret"></i>

                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a tabindex="-1" href="#">User List</a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="#">Search</a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="#">Permissions</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span3" id="sidebar">
                    <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
                       
                        <li  >
                            <a href="../Fournisseur.php"> Fournisseur</a>
                        </li>

                         <li >
                            <a href="../Commandef.php"> Commandes Fournisseur</a>
                        </li>

                        <li class="active">
                            <a href="../produit1.php"> Produit</a>
                        </li>

                         <li>
                            <a href="../promotion1.php">Promotion</a>
                        </li>
                    </ul>
                </div>
                <div class="span9" id="content">
                     <div class="row-fluid">
                        
                    <!--block -->
               <div class="control-group">
                <form method="GET" action="rechercherProduit.php">
                                          <label class="control-label" for="typeahead">Référence Du Produit</label>
                                          <div class="controls">
                                            <input type="text" class="span6" id="typeahead" name="Referenceproduit" data-provide="typeahead" '>
                                           <button type="submit" name="Rechercher" value="Rechercher" class="btn btn-info">Rechercher</button>
                
                                          
                </form>
                  <form method="GET" action="statistique.php">
                                           <button type="submit" name="Statistique" value="Statistique" class="btn btn-info" style="margin-left:auto;margin-right:403px;display:block;"> Statistique </button>
                                           </div>
                </form>
                 <form method="GET" action="pdf.php">
                                           <button type="submit" value="Liste Produits Hors Stock" class="btn btn-info" style="margin-left:auto;margin-right:403px;display:block;"> Liste Produits Hors Stock </button>
                                           </div>
                </form>
                                        </div>
                                         <!--block -->
                                         <div class="control-group">
                <form method="GET" action="trierProduit.php">
                                          <div class="controls">
                                            <button type="submit" class="btn btn-large btn-block">Trier Le Tableau Produits</button>
                                          </div>
                </form>

                      
                      <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Produits</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                    <table class="table table-bordered">
                                      <thead>
                                       <?PHP
include "../core/produitP.php";
$Produit1P=new ProduitP();
$listeProduit=$Produit1P->afficherProduits();
$listepromotion=$Produit1P->modifierPrix();
?>
<table class="table table-bordered">
<tr>
<td>Reference Du produit</td>
<td>Nomproduit</td>
<td>Categorie</td>
<td>Marque</td>
<td>prix</td>
<td>Date de publication</td>
<td>Quantité</td>
<td>Boutique</td>
<td>Photo Du produit</td>
<td>Description</td>
</tr>

<?PHP
foreach($listeProduit as $row){
	?>
	<tr>
	<td><?PHP echo $row['Referenceproduit']; ?></td>
	<td><?PHP echo $row['Nomproduit']; ?></td>
	<td><?PHP echo $row['Categorie']; ?></td>
	<td><?PHP echo $row['Marque']; ?></td>
    <td><?PHP echo $row['prix']; ?> DT</td>
	<td><?PHP echo $row['Datedepublication']; ?></td>
    <td><?PHP echo $row['quantite']; ?></td>
	<td><?PHP echo $row['Boutique']; ?></td>
     <td> <?PHP echo "<img src='../image/".$row["photodeproduit"]."' width='150px' >";    ?>  </td>
	<td><?PHP echo $row['description']; ?></td>
	</tr>
	<?PHP
}
?>


                                      </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>       
                        
                        <!-- block -->

                       
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Promotions Et Nouveau Prix</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                    <table class="table table-bordered">
                                      <thead>
                                       <?PHP
$Produit1P=new ProduitP();
$listepromotion=$Produit1P->modifierPrix();
?>
<table class="table table-bordered">
<tr>
<td>Reference Du produit</td>
<td>Nouveau Prix</td>

</tr>

  <?PHP
foreach($listepromotion as $row){
    ?>
    <tr>
    <td><?PHP echo $row['Referenceproduit']; ?></td>
    <td><?PHP echo $row['prix']-($row['solde']/100)*$row['prix']; ?> DT</td>
    </tr>
    <?PHP
}
?>

                                      </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>                      
                        <!-- /block -->
                      
                        <!-- /block -->
                    </div>

                    <div class="row-fluid">
                        
                    </div>

                     <div class="row-fluid">
                        
           
        
        <!--/.fluid-container-->

        <script src="../vendors/jquery-1.9.1.js"></script>
        <script src="../bootstrap/js/bootstrap.min.js"></script>
        <script src="../vendors/datatables/js/jquery.dataTables.min.js"></script>


        <script src="../assets/scripts.js"></script>
        <script src="../assets/DT_bootstrap.js"></script>
        <script>
        $(function() {
            
        });
        </script>
    </body>
<?php } ?>
</html>
