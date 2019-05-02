
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

<div class="form-style-5" style="margin-left: 20px">
<form method="POST" >
<fieldset>

 <input id="login" type="text" class="input-block-level" name="string"  placeholder="Code D'accés" style="width: 190px ;height: 10px ;margin-left: 500px; margin-top: 20px">
       <input type="submit" class="btn btn-large btn-primary" name="loginn" style="margin-left: 535px; margin-top: 20px" value="Envoyer" >

</fieldset>




</form>
<div id="wrong" style="visibility: hidden; margin-left: 505px; margin-top: -72px" ><p style="color: red;">Ce Code Est Incorrect</p></div>
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

?>



<?php


$bdd = new PDO('mysql:host=localhost;dbname=projetweb', 'root', '');

if(isset($_POST['loginn'])) { 
   $string = htmlspecialchars($_POST['string']);
   
   if(!empty($string) ) 
   
{
      $requser = $bdd->prepare("SELECT chaine FROM motdepasse where chaine='$string'");
      $requser->execute();


      $userexist = $requser->rowCount();

      if($userexist == 1) 
      
      {    
         $userinfo = $requser->fetch();

$m=$userinfo;

echo $m;
         //$_SESSION['mpoo'] = $userinfo;







       

  echo "<script type='text/javascript'>;
 window.location='modifiermotdepasse.php';
 </script>";
  
  
 



          }
         else { 
                 echo "<script type='text/javascript'>document.getElementById('wrong').style.visibility = 'visible';

</script>";
               
                    
                           }
      

     
     
    
      
}
   
}

?>




