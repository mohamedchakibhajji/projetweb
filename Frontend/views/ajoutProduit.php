<?PHP
include "../entities/produit.php";
include "../core/produitP.php";

function verifier($tableau){
	foreach ($tableau as $key => $value) {
		if(!isset($_POST[$value])){
			return false;
		}
	}
	return true;
}
if(verifier(['Nomproduit','Referenceproduit' ,'Categorie' ,'Marque','prix','Datedepublication' ,'Boutique','description'])){

$produit1=new Produit($_POST['Nomproduit'],$_POST['Referenceproduit'],$_POST['Categorie'],$_POST['Marque'],$_POST['prix'],$_POST['Datedepublication'],$_POST['New'],$_POST['Boutique'], $_FILES['file1']['name'],$_POST['description']);

$produit1P=new produitP();
if($produit1P->ajouterProduit($produit1)){
	 $name = $_FILES['file1']['name'];
 $location='../image/';
  $tmp_name = $_FILES['file1']['tmp_name'];
if( move_uploaded_file($tmp_name ,$location.$name)){
	echo "ok";
	header('Location: ../produit1.php?operation=ok');	
}
else{
	var_dump($_FILES["file1"]);
}
}

	
}else{
	echo "vérifier les champs";
}
//*/

?>