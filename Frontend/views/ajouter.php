<?PHP
include "../core/service_client.php";
if (isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['age']) and isset($_POST['sexe']) and isset($_POST['adresse']) and isset($_POST['email']) and isset($_POST['mdp']) and isset($_POST['fidelite']))
{
$client1= new client($_POST['identifiant'],$_POST['nom'],$_POST['prenom'],$_POST['age'],$_POST['sexe'],$_POST['adresse'],$_POST['email'],$_POST['mdp'],$_POST['fidelite']);
//Partie2

//var_dump($client1);


//Partie3
$ser=new service_client();
$ser->ajouter($client1);

$header="MIME-Version: 1.0\r\n";
$header.='From:"Tarek loukil"<tarek.loukil5@gmail.com>'."\n";
$header.='Content-Type:text/html; charset="uft-8"'."\n";
$header.='Content-Transfer-Encoding: 8bit';

$message='
<html>
	<body>
		<div align="center">
			
			<br />
			Bienvenue chez CasaSport !
			<br />
		</div>
	</body>
</html>
';

mail($_POST['email'], "Salut tout le monde !", $message, $header);

header('Location: session.php');
	
}else{
	echo "vérifier les champs";

}


?>
