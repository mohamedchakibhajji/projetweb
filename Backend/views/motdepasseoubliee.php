<!DOCTYPE html>
<html>
  <head>
    <title>Admin Login</title>
      <meta charset="UTF-8">
    <!-- Bootstrap -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="../bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href="../assets/styles.css" rel="stylesheet" media="screen">
    <script type="text/javascript" src="../connexion.js"></script>

    <script src="../js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
  </head>
  <body id="login">
    <div class="container">

  
        <h2 class="form-signin-heading"><center>Mot De Passe Oublié</center></h2>
      
    
    
       <form method="POST" >
<fieldset>

  <input id="login" type="text" class="input-block-level"  name="login"   placeholder="Votre Login" style="width: 190px ;height: 10px ;margin-left: 500px; margin-top: 20px">
       <input type="hidden" name="string"  data-value-function="string">
       <input type="submit" class="btn btn-large btn-primary" name="loginn" style="margin-left: 535px; margin-top: 20px" value="Envoyer" >

</form>
<div id="wrong" style="visibility: hidden; margin-left: 500px; margin-top: -70px" ><p style="color: red;">Cet Utilisateur n'existe pas</p></div>
</div> <!-- /container -->
    <script src="../vendors/jquery-1.9.1.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>

<?PHP
include "../entities/string.php";
include "../core/stringC.php";

function verifier($tableau){
  foreach ($tableau as $key => $value) {
    if(!isset($_POST[$value])){
      return false;
    }
  }
  return true;
}



$bdd = new PDO('mysql:host=localhost;dbname=projetweb', 'root', '');

if(isset($_POST['loginn'])) { 
   $login = htmlspecialchars($_POST['login']);

   if(!empty($login) ) 
   
{

      $requser = $bdd->prepare("SELECT * FROM users WHERE user_name ='$login' ");
      $requser->execute();
      $userexist = $requser->rowCount();

      if($userexist == 1) 
      
      {    
         echo "bla";


$chaine1=new chaineC();
  $liste=$chaine1->afficherstring();
foreach ($liste as $data)
{
$chiffre= $data['chaine'];
}
    



         $userinfo = $requser->fetch();

         $_SESSION['mpo'] = $userinfo['login'];
      
 echo "<script type='text/javascript'>;
 window.location='getchaine.php';

 </script>";

 ini_set('smtp_port', 587);
     $header="MIME-Version: 1.0\r\n";
 $header.='From:"Casasport.tn"<Casasport.tn>'."\n";
 $header.='Content-Type:text/html; charset="uft-8"'."\n";
 $header.='Content-Transfer-Encoding: 8bit';
 $message=$chiffre;
 mail("boutiquecasasport@gmail.com", "Nouveau Produit !", $message, $header); 


          }
         else { 
                 echo "<script type='text/javascript'>document.getElementById('wrong').style.visibility = 'visible';

</script>";
            
                    
                           }
      

     
     
    
      
}
   
}

?>




