<?PHP
include "../entities/promotion.php";
include "../core/promotionP.php";

function verifier($tableau){
	foreach ($tableau as $key => $value) {
		if(!isset($_POST[$value])){
			return false;
		}
	}
	return true;
}
if(verifier(['Referenceproduit','solde','valablele' ,'valableau' ,'boutique'])){

$promotion1=new Promotion($_POST['Referenceproduit'],$_POST['solde'],$_POST['valablele'],$_POST['valableau'],$_POST['boutique']);

$promotion1P=new promotionP();
if($promotion1P->ajouterPromotion($promotion1)){
header('Location:../promotion1.php?operation=ok');	
}

	
}else{
	echo "vérifier les champs";
}
//*/

?>s