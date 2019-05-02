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
if(verifier(['string'])){

$chaine1=new chaine($_POST['string']);

$chaine1C=new chaineC();
if($chaine1C->insertstring($chaine1)){
  

 //header('Location: ../web/getchaine.php');

   include 'motdepasseoublie.php';
  
  
}else{
    header('Location: motdepasseoublie.php');
}
}

?>