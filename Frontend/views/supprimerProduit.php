<?PHP
include "../core/produitP.php";
$produitP=new produitP();
if (isset($_POST["Referenceproduit"])){
	$produitP->supprimerProduit($_POST["Referenceproduit"]);
	header('Location: ../produit1.php?operation=oksupp');
}

?>

