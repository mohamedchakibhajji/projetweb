<?PHP
include "config.php";
class ProduitP {
function afficherProduit ($Produit){
		echo "Nom Produit: ".$Produit->getNomproduit()."<br>";
		echo "Reference Nom Produit: ".$Produit->getReferenceproduit()."<br>";
		echo "Catégorie: ".$Produit->getCategorie()."<br>";
		echo "Marque: ".$Produit->getMarque()."<br>";
		echo "Prix: ".$Produit->getprix()."<br>";
		echo "Date De Publication: ".$Produit->getDatedepublication()."<br>";
		echo "quantite: ".$Produit->getquantite()."<br>";
		echo "Boutique: ".$Produit->getBoutique()."<br>";
		echo "Photo de produit: ".$Produit->getphotodeproduit()."<br>";
		echo "Description : ".$Produit->getdescription()."<br>";
	}
	
	function ajouterProduit($Produit){
		$sql="insert into produit (	Nomproduit,Referenceproduit,Categorie,Marque,prix,Datedepublication,quantite,Boutique,photodeproduit,description) values (:Nomproduit, :Referenceproduit,:Categorie,:Marque,:prix,:Datedepublication,:quantite,:Boutique,:photodeproduit,:description)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);//prépare la requete sql à etre exécuté par
		
        $Nomproduit=$Produit->getNomproduit();
        $Referenceproduit=$Produit->getReferenceproduit();
        $Categorie=$Produit->getCategorie();
        $Marque=$Produit->getMarque();
        $prix=$Produit->getprix();
        $Datedepublication=$Produit->getDatedepublication();
        $quantite=$Produit->getquantite();
        $Boutique=$Produit->getBoutique();
        $photodeproduit=$Produit->getphotodeproduit();
        $description=$Produit->getdescription();
  		$req->bindValue(':Nomproduit',$Nomproduit);
		$req->bindValue(':Referenceproduit',intval($Referenceproduit));
		$req->bindValue(':Categorie',$Categorie);
		$req->bindValue(':Marque',$Marque);
		$req->bindValue(':prix',$prix);
		$req->bindValue(':Datedepublication',$Datedepublication);
		$req->bindValue(':quantite',$quantite);
		$req->bindValue(':Boutique',$Boutique);
		$req->bindValue(':photodeproduit',$photodeproduit);
		$req->bindValue(':description',$description);
         
         if( $req->execute()){
         	return 1;
         }else{
         	return 0;
         }
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}

	function getReference($Referenceproduit){
	$sql="SELECT * from Produit where Referenceproduit=$Referenceproduit";
		$db = config::getConnexion();
		try{
		$compte=$db->query($sql);
		return $compte;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function afficherProduits(){
		$sql="SElECT * From Produit";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	function produithomme(){
		$sql="SELECT * From Produit where Categorie like 'Vêtements Homme'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	function imprimerpdf(){
$pdf=new FPDF_plus();
 
$pdf->SetFont('Arial','',12);
 
$pdf->AddPage();
 
$resul_nom = mysql_query('SELECT * From Produit where quantite<5') or die ("requête impossible" . mysql_error());
$row_nom = mysql_fetch_row($resul_nom);
$pdf->Cell("","",$row_nom[1],"","","C");
$pdf->Ln(3);
$pdf->Image("../images/logo_casa_sport.png",10,8,33);
	}



	function supprimerProduit($Referenceproduit){
		$sql="DELETE FROM Produit where Referenceproduit= :Referenceproduit";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':Referenceproduit',$Referenceproduit);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	public static function modifierProduit($Referenceproduit,$argument,$valeur){
		$sql="UPDATE produit SET ".$argument."=:".$argument." WHERE Referenceproduit=:Referenceproduit";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
		if(strtolower($argument)=="new"){
			$valeur=intval($valeur);
		}
try{		
        $req=$db->prepare($sql);
         $s=$req->execute([
			":Referenceproduit"=>intval($Referenceproduit),
			":".$argument=>$valeur]);
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererProduit($Referenceproduit){
		$sql="SELECT * from produit where Referenceproduit=$Referenceproduit";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function supprimerPromotion($Referenceproduit){
		$sql="DELETE FROM promotion where Referenceproduit= :Referenceproduit";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':Referenceproduit',$Referenceproduit);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function modifierPrix(){
		$sql="SELECT produit.Referenceproduit ,produit.prix, promotion.solde FROM produit INNER JOIN promotion
ON (produit.Referenceproduit = promotion.Referenceproduit)";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function modifierPrixs($id){
		$sql="SELECT produit.Referenceproduit ,produit.prix, promotion.solde FROM produit,promotion where produit.Referenceproduit = promotion.Referenceproduit and promotion.Referenceproduit=".$id;
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
		function rechercherProduit($Referenceproduit){
$sql="SELECT * from produit where Referenceproduit=$Referenceproduit";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

function trierProduit(){
$sql="SELECT * from produit where quantite>0 ORDER BY prix DESC ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function trierProduitcroi(){
$sql="SELECT * from produit where quantite>0 ORDER BY prix";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function Produitfronttricrois(){
$sql="SELECT * from produit where quantite>0 ORDER BY prix ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function enstock(){
$sql="SELECT count(*) from produit where quantite>5";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function horsstock(){
$sql="SELECT count(*) from produit where quantite<5";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function stock(){
$sql="SELECT count(*) from produit";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	

	function produitmateriel(){
		$sql="SELECT * From Produit where Categorie like 'Matériel'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	
	function produitfemme(){
		$sql="SELECT * From Produit where Categorie like 'Vêtements Femme'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}


	function newhomme(){
$sql="SELECT * from produit where Datedepublication<Datedepublication+1 and Categorie like 'Vêtements Homme'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}


	function newfemme(){
$sql="SELECT * from produit where Datedepublication<Datedepublication+2 and Categorie like 'Vêtements Femme'  ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function newmateriel(){
$sql="SELECT * from produit where Datedepublication<Datedepublication+2 and Categorie like 'Matériel' ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

function triermateriel(){
$sql="SELECT * from produit  where Categorie like 'Matériel'  ORDER BY prix DESC";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

function triermaterielcroissant(){
$sql="SELECT * from produit where Categorie like 'Matériel'  ORDER BY prix";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

function trierproducthomme(){
$sql="SELECT * from produit  where Categorie like 'Vêtements Homme' ORDER BY prix DESC";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function trierproducthommecroissant(){
$sql="SELECT * from produit where Categorie like 'Vêtements Homme'  ORDER BY prix";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
  
  function trierproducfemme(){
$sql="SELECT * from produit  where Categorie like 'Vêtements Femme'   ORDER BY prix DESC";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function trierproductFemmecroissant(){
$sql="SELECT * from produit where Categorie like 'Vêtements Femme'   ORDER BY prix";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
  
  function  accessoires(){
$sql="SELECT * from produit where Categorie like 'Accessoires'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	 function  tricoiaccessoires(){
$sql="SELECT * from produit where Categorie like 'Accessoires'  ORDER BY prix";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
 
  function  tridecroiaccessoires(){
$sql="SELECT * from produit where Categorie like 'Accessoires'  ORDER BY prix DESC";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	 function  newaccessoires(){
$sql="SELECT * from produit where Categorie like 'Accessoires'  and Datedepublication<Datedepublication+2 ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function rechercherListeProduit($Referenceproduit){
		$sql="SELECT * from produit where Referenceproduit=$Referenceproduit";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
}

?>