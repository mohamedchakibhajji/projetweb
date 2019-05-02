<?php
include "../core/config.php";
include "../entities/carte_fidelite.php";

class service_carteF {
    public  $connexion;

    function __construct(){
        $this->connexion=Config::getConnexion();
    }
    
    function ajouter($car){
        $sql="INSERT INTO cartefidelite (identifiant,password) VALUES (:identifiant,:password)";
        $db = config::getConnexion();
        try{
        $req=$db->prepare($sql);
        
        $identifiant=$car->getId();
        $password=$car->getpassword();
        
        $req->bindValue(':identifiant',$identifiant);
        $req->bindValue(':password',$password);
               
        
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
    }
    
    function modifier($car,$num)
    {
        $sql= "UPDATE `cartefidelite` SET `identifiant`=".$car->getId()." WHERE num =".$car->getNum()."";
        $db = config::getConnexion();
        //$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{        
        $req=$db->prepare($sql);
        $identifiant=$car->getId();
        $datas = array(':identifiant'=>$identifiant);
        $req->bindValue(':num',$num);
                  
            $s=$req->execute();
            
            header('Location: afficherCarte.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
        
    }

    function afficher ($car)
    {
        echo "identifiant: ".$car->getId()."<br>";
        echo "Num: ".$car->getNum()."<br>";
        echo "Pts: ".$car->getPts()."<br>";
     
    }

      function afficherCarte(){
        //$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
        $sql="SElECT * From cartefidelite";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }
    function rechercher($num)
    {
        try{
            $sql="select * from cartefidelite where num=".$num."";
            $resultat=$this->connexion->query($sql);
        } catch(Exception $ex)
        {
            die('Error:'.$ex->getMessage());
        }
        return $resultat;
    }
    function recuperer($num){
        $sql="SELECT * from cartefidelite where num=$num";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    function supprimer($num){
        $sql="DELETE FROM cartefidelite where num= :num";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':num',$num);
        try{
            $req->execute();
            header('Location: afficherCarte.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
}

?>