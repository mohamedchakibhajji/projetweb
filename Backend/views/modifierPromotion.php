<?PHP
include "../entities/promotion.php";
include "../core/promotionP.php";

if (isset($_POST['modifier']) and !empty($_POST["Referenceproduit"])){
	extract($_POST);
	if(!empty($_POST["solde"])){
		promotionP::modifierPromotion($_POST["Referenceproduit"],"solde",$solde);
			header('Location: ../promotion1.php?operation=update');
	}
	
	if(isset($_POST["Boutique"])){
	if(!empty($_POST["Boutique"])){
		promotionP::modifierPromotion($_POST["Referenceproduit"],"Boutique",$Boutique);
			header('Location: ../promotion1.php?operation=update');
	}
	}

}
?>
