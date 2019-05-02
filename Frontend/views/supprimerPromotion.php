<?PHP
include "../core/promotionP.php";
$promotionP=new promotionP();
if (isset($_POST["Referenceproduit"])){
	$promotionP->supprimerPromotion($_POST["Referenceproduit"]);
	header('Location: ../promotion1.php?operation=oksupp');
}

?>