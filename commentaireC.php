<?PHP
include_once"../entities/commentaire.php";
include "../config.php";

class commentaireC {
/*function afficherCommentaire ($commentaire){
		echo "id_commentaire: ".$commentaire->getid_commentaire()."<br>";
		echo "commentaire_com: ".$commentaire->getcommentaire_com()."<br>";
		echo "note: ".$commentaire->getnote()."<br>";
		echo "id_client: ".$commentaire->getid_client()."<br>";
		echo "id_produit: ".$commentaire->getid_produit()."<br>";
		echo "date_com: ".$commentaire->getdate_com()."<br>";
	}*/
	
	function ajouterCommentaire($commentaire){
		$sql="insert into commentaire (id_commentaire,commentaire) values (:id_commentaire, :commentaire)";
		
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $id_commentaire=$commentaire->getid_commentaire();
        $commentaire=$commentaire->getcommentaire();


		$req->bindValue(':id_commentaire',$id_commentaire);
		$req->bindValue(':commentaire',$commentaire);
		
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherCommentaire(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SELECT * From commentaire";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
        	}
        	function afficherCommentaire1($id_client){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SELECT * From commentaire where id_client=:id_client";
		$db = config::getConnexion();
		 $req=$db->prepare($sql);
		$req->bindValue(':id_client',$id_client);
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
        	}
	function supprimercommentaire($id_commentaire){
		$sql="DELETE FROM commentaire where id_commentaire= :id_commentaire";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id_commentaire',$id_commentaire);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifiercommentaire($commentaire,$id_commentaire){
		$sql="UPDATE commentaire SET id_commentaire=:id_commentairee, commentaire=:commentaire WHERE id_commentaire=:id_commentaire";
		
		$db = config::getConnexion();
		$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$id_commentairee=$commentaire->getid_commentaire();
        $commentaire=$commentaire->getcommentaire();
       
        
		$datas = array(':id_commentairee'=>$id_commentairee,':id_commentaire'=>$id_commentaire, ':commentaire'=>$commentaire);
		
		$req->bindValue(':id_commentairee',$id_commentairee);
		$req->bindValue(':id_commentaire',$id_commentaire);
		$req->bindValue(':commentaire',$commentaire);
	
		
		
		
            $s=$req->execute();
			
          // header('Location: ind.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recuperercommentaire($id_commentaire){
		$sql="SELECT * from commentaire where id_commentaire=$id_commentaire";
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