<?PHP
include "../core/fournisseurC.php";
include "../core/commandefC.php";
$FournisseurC=new FournisseurC();
$CommandefC=new CommandefC();
$liste=$FournisseurC->rechercherFournisseurRetard();
foreach ($liste as $row)
{
	$CommandefC->supprimerCommandefournisseur($row["referenceF"]);
}
$FournisseurC->supprimerFournisseurRetard();
header('Location: FournisseurRetard.php?operation=ok');
?>

