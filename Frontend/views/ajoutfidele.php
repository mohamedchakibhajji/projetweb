<?PHP
include "../core/service_carteF.php";
if (isset($_POST['id']) and isset($_POST['pwd']))
{
$carte1= new carte($_POST['id'],0,0,$_POST['pwd']);
//Partie2

//var_dump($client1);


//Partie3
$ser=new service_carteF();
$ser->ajouter($carte1);
header("Location: session.php");

	
}else{
	echo "vérifier les champs";
}


?>
