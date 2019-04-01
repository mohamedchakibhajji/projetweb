<?PHP
include "../entities/produit.php";
include "../core/produitP.php";

if (isset($_POST['modifier']) and !empty($_POST["Referenceproduit"])){
	extract($_POST);
	if(!empty($_POST["Nomproduit"])){
		produitP::modifierProduit($_POST["Referenceproduit"],"Nomproduit",$Nomproduit);
			header('Location: ../produit1.php?operation=update');
	}
	
	if(isset($_POST["Categorie"])){
	if(!empty($_POST["Categorie"])){
		produitP::modifierProduit($_POST["Referenceproduit"],"Categorie",$Categorie);
			header('Location: ../produit1.php?operation=update');
	}
	}
	if(isset($_POST["Marque"])){	
		if(!empty($_POST["Marque"])){
		produitP::modifierProduit($_POST["Referenceproduit"],"Marque",$Marque);
			header('Location: ../produit1.php?operation=update');
	}
}
if(isset($_POST["Datedepublication"])){
		if(!empty($_POST["Datedepublication"])){
		produitP::modifierProduit($_POST["Referenceproduit"],"Datedepublication",$Datedepublication);
			header('Location: ../produit1.php?operation=update');
	}
}
if(isset($_POST["Boutique"])){
		if(!empty($_POST["Boutique"])){
		produitP::modifierProduit($_POST["Referenceproduit"],"Boutique",$Boutique);
			header('Location: ../produit1.php?operation=update');
	}
}
if(isset($_POST["description"])){
		if(!empty($_POST["description"])){
		produitP::modifierProduit($_POST["Referenceproduit"],"description",$description);
			header('Location: ../produit1.php?operation=update');
	}

}
}
?>
