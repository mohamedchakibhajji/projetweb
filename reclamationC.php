<?PHP
include_once"../entities/reclamation.php";
include "../config.php";

class reclamationC {
/*function afficherCommentaire ($commentaire){
		echo "id_commentaire: ".$commentaire->getid_commentaire()."<br>";
		echo "commentaire_com: ".$commentaire->getcommentaire_com()."<br>";
		echo "note: ".$commentaire->getnote()."<br>";
		echo "id_client: ".$commentaire->getid_client()."<br>";
		echo "id_produit: ".$commentaire->getid_produit()."<br>";
		echo "date_com: ".$commentaire->getdate_com()."<br>";
	}*/
	
	
	function afficherReclamation(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.id_reclamation= a.id_reclamation";
		$sql="SELECT * From reclamation";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
        	}

	function supprimerReclamation($id_reclamation){
		$sql="DELETE FROM reclamation where id_reclamation= :id_reclamation";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id_reclamation',$id_reclamation);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function supprimerDate(){
		$sql="DELETE  FROM reclamation where date_reclamation < NOW()-2";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierReclamation($reclamation,$id_reclamation){
		$sql="UPDATE reclamation SET  phone=:phone,email=:email,message=:message,repondre=:repondre,date_reclamation=:date_reclamation WHERE id_reclamation=:id_reclamation";
		
		$db = config::getConnexion();
		$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		
        $phone=$reclamation->getphone();
        $date_reclamation=$reclamation->getdate_reclamation();
        $email=$reclamation->getemail();
        $message=$reclamation->getmessage();
         $repondre=$reclamation->getrepondre();
        
		$datas = array(':id_reclamation'=>$id_reclamation, ':phone'=>$phone, ':email'=>$email,':message'=>$message,':repondre'=>$repondre,':date_reclamation'=>$date_reclamation);
		
		$req->bindValue(':id_reclamation',$id_reclamation);
		$req->bindValue(':phone',$phone);
		$req->bindValue(':email',$email);
		$req->bindValue(':message',$message);
		$req->bindValue(':repondre',$repondre);
		$req->bindValue(':date_reclamation',$date_reclamation);
		
		
		
            $s=$req->execute();
			
          // header('Location: ind.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererReclamation($id_reclamation){
		$sql="SELECT * from reclamation where id_reclamation=$id_reclamation";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherid_client($id_client){
		$sql="SELECT * from reclamation where id_client=$id_client";
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