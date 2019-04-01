<?PHP 
include "core/produitP.php"; ?>
<!DOCTYPE html>
<html class="no-js">
    
    <head>
        <title>Produit</title>
        <!-- Bootstrap -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="vendors/easypiechart/jquery.easy-pie-chart.css" rel="stylesheet" media="screen">
        <link href="assets/styles.css" rel="stylesheet" media="screen">
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <script src="vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
          <script type="text/javascript" src="Controleajout.js"></script>
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
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i> Chekib Elhajji<i class="caret"></i>

                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a tabindex="-1" href="#">Profile</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a tabindex="-1" href="login.html">Logout</a>
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
                        <li >
                            <a href="index.html"><i class="icon-chevron-right"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="calendar.html"><i class="icon-chevron-right"></i> Calendar</a>
                        </li>
                        <li>
                            <a href="stats.html"><i class="icon-chevron-right"></i> Statistics (Charts)</a>
                        </li>
                        <li>
                            <a href="form.html"><i class="icon-chevron-right"></i> Forms</a>
                        </li>
                        <li>
                            <a href="tables.html"><i class="icon-chevron-right"></i> Tables</a>
                        </li>
                        <li>
                            <a href="buttons.html"><i class="icon-chevron-right"></i> Buttons & Icons</a>
                        </li>
                        <li>
                            <a href="editors.html"><i class="icon-chevron-right"></i> WYSIWYG Editors</a>
                        </li>
                        
                        <li>
                            <a href="interface.html"><i class="icon-chevron-right"></i> UI & Interface</a>
                        </li>


                         <li class="active">
                            <a href="produit1.php"><span class="badge badge-success pull-right">731</span> Product</a>
                        </li>

                         <li>
                            <a href="promotion1.php"><span class="badge badge-warning pull-right">235</span> Promotion</a>
                        </li>

                        <li >
                            <a href="evenement.html"><span class="badge badge-success pull-right">731</span> Events</a>
                        </li>
                        <li>
                            <a href="livraison.html"><span class="badge badge-success pull-right">812</span> Delivery</a>
                        </li>
                        <li>
                            <a href="#"><span class="badge badge-info pull-right">27</span> Clients</a>
                        </li>
                        <li>
                            <a href="#"><span class="badge badge-info pull-right">1,234</span> Users</a>
                        </li>
                        <li>
                            <a href="#"><span class="badge badge-info pull-right">2,221</span> Messages</a>
                        </li>
                        <li>
                            <a href="#"><span class="badge badge-info pull-right">11</span> Reports</a>
                        </li>
                        <li>
                            <a href="#"><span class="badge badge-important pull-right">83</span> Errors</a>
                        </li>
                        <li>
                            <a href="#"><span class="badge badge-warning pull-right">4,231</span> Logs</a>
                        </li>
                    </ul>
                </div>
                <div class="span9" id="content">
                     <div class="row-fluid">
                         <!-- block --> 
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">
                                    <form method="POST" action="views/afficherProduit.php"></div>
                                <div class="muted pull-left">Afficher Produit</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                    <form class="form-horizontal">
                                      <fieldset>
                                        <div class="control-group">
                                   <button class="btn btn-warning btn-large" style="margin-left:auto;margin-right:auto;display:block;" >Afficher Les Produits</button>    
                                        </div>
                                      </fieldset>
                                    </form>

                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">

                                <div class="muted pull-left">
                                     Produit</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                    <?php 
                                    if(isset($_GET["operation"]) && $_GET["operation"]=="ok"){
                                        echo '<div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <h4>Success</h4>
                            The operation completed successfully</div>';
                           ini_set('smtp_port', 587);
     $header="MIME-Version: 1.0\r\n";
 $header.='From:"Casasport.tn"<Casasport.tn>'."\n";
 $header.='Content-Type:text/html; charset="uft-8"'."\n";
 $header.='Content-Transfer-Encoding: 8bit';
 $message="Cher Client, \n Un Nouveau Produit Est Disponnible Dans Notre Site Web Et Dans Notre Boutique";
 mail("mohamedchakib.hajji@esprit.tn", "Nouveau Produit !", $message, $header); 
                                    }

                                    ?>
                                   <form method="POST" action="views/ajoutProduit.php" enctype="multipart/form-data">
                                      <fieldset>
                                        <legend>Ajouter Produit</legend>
                                        <div class="control-group">
                                          <label class="control-label" for="typeahead">Nom du Produit </label>
                                          <div class="controls">
                                            <input type="text" class="span6" id="typeahead"  data-provide="typeahead" data-items="4"  name="Nomproduit" required>
                                            
                                          </div>
                                          </div>
                                          <br />
                                          <div class="control-group">
                                          <label class="control-label" for="typeahead">Reference du produit (Ex : #9999999)</label>
                                          <div class="controls">
                                            <input type="text" class="span6"   data-provide="typeahead" data-items="4" name="Referenceproduit" required>
                                            
                                          </div>
                                        </div>
                                            <div class="control-group">
                                          <label class="control-label" for="select01">Catégorie</label>
                                          <div class="controls">
                                            <select  class="chzn-select"  name="Categorie" required>
                                                <option> Sélectionnez</option>
                                              <option>Vêtements Homme</option>
                                              <option>Vêtements Femme</option>
                                              <option>Matériel</option>
                                              <option>Accessoires</option>
                                            </select>
                                          
                                          </div>
                                        </div>
                                       
                                            <div class="control-group">
                                          <label class="control-label" for="select01">Marque</label>
                                          <div class="controls">
                                            <select  class="chzn-select" name="Marque" required>
                                                <option> Sélectionnez</option>
                                              <option>Nike</option>
                                              <option>Adidas</option>
                                              <option>Givova</option>
                                              <option>Puma</option>
                                              <option>Fila</option>
                                              <option>Asics</option>
                                              <option>Puma</option>
                                               <option>Diadora</option>
                                            </select>
                                     
                                          </div>
                                        </div>
                                        <div class="control-group">
                                          <label class="control-label" for="typeahead">Prix</label>
                                          <div class="controls">
                                            <input type="number" class="span6"  id="s1"  data-provide="typeahead" data-items="4" name="prix" step=10 required>
                                            
                                          </div>
                                        </div>
                                        <div class="control-group">
                                          <label class="control-label" for="date01">Publier Le</label>
                                          <div class="controls">
                                            <p class="help-block"></p>
                                             <td><input type="date" name="Datedepublication" required ></td>
                                          </div>
                                        </div>
                                       
                                        <div class="control-group">
                                          <label class="control-label" for="optionsCheckbox">Check</label>
                                          <div class="controls">
                                            <label class="uniform">
                                              <input class="uniform_on" type="checkbox" id="optionsCheckbox" value="1" name="New">
                                              Cochez Si C'est Un Nouveau Produit
                                            </label>
                                          </div>
                                        </div>
                                  
                                        <div class="control-group">
                                          <label class="control-label" for="multiSelect">Boutiques</label>
                                          <div class="controls">
                                            <select multiple="multiple" id="multiSelect" class="chzn-select span4" id="selected" name="Boutique" required>
                                              <option>Tunis</option><option>Ben arous</option><option>Sousse</option><option>Sfax</option><option>Toutes</option>
                                            </select>
                                             
                                            <p class="help-block">Start typing to activate auto complete!</p>
                                          </div>
                                          
                                        </div>
                                        <div class="control-group">
                                          <label class="control-label" for="fileInput">Photo Du Produit</label>
                                          <div class="controls">
                                            <input class="input-file uniform_on" id="fileInput" type="file" name="file1" >
                                          </div>
                                        </div>
                                        <div class="control-group">
                                          <label class="control-label" for="textarea2">Description</label>
                                          <div class="controls">
                                            <textarea class="input-xlarge textarea" placeholder="Enter text ..." style="width: 810px; height: 200px" name="description" required></textarea>
                                          </div>
                                        </div>
                                        <div class="form-actions">
                                          <button  type="submit" name="ajouter" value="ajouter" onclick="return verifsolde();" class="btn btn-primary">Ajouter</button>
                                          <button type="reset" class="btn">Annuler</button>
                                        </div>
                                      </fieldset>
                                </form>

                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
                <div class="span9" id="content">
                     <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">
                                     Modifier Produit</div>
                               
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                    <?php 
                                    if(isset($_GET["operation"]) && $_GET["operation"]=="update"){
                                        echo '<div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <h4>Success</h4>
                            The operation completed successfully</div>';
                                    }
                                    ?>
                                    <form method="post" action="views/modifierProduit.php">
  
                                      <fieldset>
                                        <legend>Modifier Produit</legend>
                                        <div class="control-group">
                                          <label class="control-label" for="select01">Reference du Produit </label>
                                          <div class="controls">
                                        <select id="select01" class="chzn-select"name="Referenceproduit" >
                                              <?PHP

$Produit1P=new ProduitP();
$listeProduit=$Produit1P->afficherProduits();

?>

<?PHP
foreach($listeProduit as $row){
    ?>

<?PHP echo "<option value='".$row['Referenceproduit']."' class='active-result'>".$row['Referenceproduit']."</option>"; ?>

    <?PHP
}
?>
                                            </select>
                                            <p class="help-block">Start typing to activate auto complete!</p>
                                          </div>
                                          <br />
                                          <div class="control-group">
                                          <label class="control-label" for="typeahead">Nom Du Produit</label>
                                          <div class="controls">
                                            <input type="text" class="span6" id="typeahead" name="Nomproduit" data-provide="typeahead" '>
                                          </div>

                                        </div>
                                         <div class="control-group">
                                          <label class="control-label" for="select01">Catégorie</label>
                                          <div class="controls">
                                            <select id="select01" class="chzn-select"  name="Categorie" >
                                                <option> Sélectionnez</option>
                                              <option>Vêtements Homme</option>
                                              <option>Vêtements Femme</option>
                                              <option>Matériel</option>
                                              <option>Accessoires</option>
                                            </select>
                                          
                                          </div>
                                        </div>

                                        <div class="control-group">
                                          <label class="control-label" for="select01">Marque</label>
                                          <div class="controls">
                                            <select id="select01" class="chzn-select" name="Marque">
                                              <option> Sélectionnez</option>
                                              <option>Nike</option>
                                              <option>Adidas</option>
                                              <option>Givova</option>
                                              <option>Puma</option>
                                              <option>Fila</option>
                                              <option>Asics</option>
                                              <option>Puma</option>
                                               <option>Diadora</option>
                                            </select>
                                          </div>

                                        </div>

                                        <div class="control-group">
                                          <label class="control-label" for="date01">Publier Le</label>
                                          <div class="controls">
                                            <p class="help-block"></p>
                                             <td><input type="date" name="Datedepublication"></td>
                                          </div>
                                        </div>

                                        <div class="control-group">
                                          <label class="control-label" for="multiSelect">Boutiques</label>
                                          <div class="controls">
                                            <select multiple="multiple" id="multiSelect" class="chzn-select span4" name="Boutique">
                                              <option>Tunis</option><option>Ben arous</option><option>Sousse</option><option>Sfax</option><option>Toutes</option>
                                            </select>
                                            <p class="help-block">Start typing to activate auto complete!</p>
                                          </div>

                                        </div>
                                        <div class="control-group">
                                          <label class="control-label" for="textarea2">Description</label>
                                          <div class="controls">
                                            <textarea class="input-xlarge textarea" name="Description"  placeholder="Enter text ..." style="width: 810px; height: 200px" ></textarea>
                                          </div>
                                        </div>

                                        <div class="form-actions">
                                          <button type="submit" onclick="envoyermodifier();" class="btn btn-primary" name="modifier" value="modifier">Modifier</button>
                                          <button type="reset" class="btn">Annuler</button>
                                        </div>
                                      </fieldset>
                                    </form>

                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
                <div class="span9" id="content">
                     <div class="row-fluid">
                        <!-- block -->
                        <div class="block">

                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Supprimer Produit</div>
                            </div>
                            <div class="block-content collapse in">

                                 <form method="POST" action="views/supprimerProduit.php">
                                     <?php 
                                    if(isset($_GET["operation"]) && $_GET["operation"]=="oksupp"){
                                        echo '<div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <h4>Success</h4>
                            The operation completed successfully</div>';
                                    }
                                    ?>
                                <div class="span12">
                                      <fieldset>
                                        <legend>Supprimer Produit</legend>
                                        <div class="control-group">
                                          <label class="control-label" for="select01">Reference du Produit</label>
                                          <div class="controls">
                                            <select id="select01" class="chzn-select"name="Referenceproduit">
                                               
 <?PHP

$Produit1P=new ProduitP();
$listeProduit=$Produit1P->afficherProduits();

?>

<?PHP
foreach($listeProduit as $row){
    ?>

<?PHP echo "<option value='".$row['Referenceproduit']."' class='active-result'>".$row['Referenceproduit']."</option>"; ?>

    <?PHP
}
?>
                                            </select>
                                        </div>
                                          </div>
                                      </div>
                                          <br />
                                                                             <div class="form-actions">
                                          <button type="submit" onclick="envoyermodifier();" name="supprimer" value="supprimer"  class="btn btn-primary">Supprimer</button>
                                          <button type="reset" class="btn">Annuler</button>
                                        </div>
                                      </fieldset>
                                    </form>

                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>

        <!--/.fluid-container-->
        <link href="vendors/datepicker.css" rel="stylesheet" media="screen">
        <link href="vendors/uniform.default.css" rel="stylesheet" media="screen">
        <link href="vendors/chosen.min.css" rel="stylesheet" media="screen">

        <link href="vendors/wysiwyg/bootstrap-wysihtml5.css" rel="stylesheet" media="screen">

        <script src="vendors/jquery-1.9.1.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="vendors/jquery.uniform.min.js"></script>
        <script src="vendors/chosen.jquery.min.js"></script>
        <script src="vendors/bootstrap-datepicker.js"></script>

        <script src="vendors/wysiwyg/wysihtml5-0.3.0.js"></script>
        <script src="vendors/wysiwyg/bootstrap-wysihtml5.js"></script>

        <script src="vendors/wizard/jquery.bootstrap.wizard.min.js"></script>

    <script type="text/javascript" src="vendors/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="assets/form-validation.js"></script>
        
    <script src="assets/scripts.js"></script>
        <script>

    jQuery(document).ready(function() {   
       FormValidation.init();
    });
    

        $(function() {
            $(".datepicker").datepicker();
            $(".uniform_on").uniform();
            $(".chzn-select").chosen();
            $('.textarea').wysihtml5();

            $('#rootwizard').bootstrapWizard({onTabShow: function(tab, navigation, index) {
                var $total = navigation.find('li').length;
                var $current = index+1;
                var $percent = ($current/$total) * 100;
                $('#rootwizard').find('.bar').css({width:$percent+'%'});
                // If it's the last tab then hide the last button and show the finish instead
                if($current >= $total) {
                    $('#rootwizard').find('.pager .next').hide();
                    $('#rootwizard').find('.pager .finish').show();
                    $('#rootwizard').find('.pager .finish').removeClass('disabled');
                } else {
                    $('#rootwizard').find('.pager .next').show();
                    $('#rootwizard').find('.pager .finish').hide();
                }
            }});
            $('#rootwizard .finish').click(function() {
                alert('Finished!, Starting over!');
                $('#rootwizard').find("a[href*='tab1']").trigger('click');
            });
        });
        </script>
    </body>

</html>