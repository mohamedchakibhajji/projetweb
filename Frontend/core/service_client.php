<?PHP
include "config.php";
include "../entities/client.php";
class service_client {
function afficher ($client){
        echo "identifiant: ".$client->getId()."<br>";
        echo "Nom: ".$client->getNom()."<br>";
        echo "Prénom: ".$client->getPrenom()."<br>";
        echo "Age: ".$client->getAge()."<br>";
        echo "sexe: ".$client->getSexe()."<br>";
        echo "adresse: ".$client->getAdresse()."<br>";
        echo "email: ".$client->getEmail()."<br>";
        echo "mdp: ".$client->getMdp()."<br>";
        echo "fidelite: ".$client->getFidelite()."<br>";
    }
    
    function ajouter($client){
        $sql="INSERT INTO client (nom,prenom,age,sexe,mdp,email,fidelite,adresse) VALUES (:nom, :prenom,:age,:sexe,:mdp,:email,:fidelite,:adresse)";
        $db = config::getConnexion();
        try{
        $req=$db->prepare($sql);
        
        
        $nom=$client->getNom();
        $prenom=$client->getPrenom();
        $age=$client->getAge();
        $sexe=$client->getSexe();
        $adresse=$client->getAdresse();
        $email=$client->getEmail();
        $mdp=$client->getMdp();
        $fidelite=$client->getFidelite();

 
        $req->bindValue(':nom',$nom);
        $req->bindValue(':prenom',$prenom);
        $req->bindValue(':age',$age);
        $req->bindValue(':sexe',$sexe);
        $req->bindValue(':adresse',$adresse);
        $req->bindValue(':email',$email);
        $req->bindValue(':mdp',$mdp);
        $req->bindValue(':fidelite',$fidelite);
               
        
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
        
    }
    
    function afficherClient(){
        //$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
        $sql="SElECT * From client";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }
    function supprimer($identifiant){
        $sql="DELETE FROM client where identifiant= :identifiant";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':identifiant',$identifiant);
        try{
            $req->execute();
            header('Location: afficher.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
   function modifier($client,$identifiant){
        $sql="UPDATE client SET  nom=:nom,prenom=:prenom,age=:age,sexe=:sexe,adresse=:adresse,email=:email,mdp=:mdp,fidelite=:fidelite WHERE identifiant=:identifiant";
        
        $db = config::getConnexion();
        //$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{        
        $req=$db->prepare($sql);
        $nom=$client->getNom();
        $prenom=$client->getPrenom();
        $age=$client->getAge();
        $sexe=$client->getSexe();
        $adresse=$client->getAdresse();
        $email=$client->getEmail();
        $mdp=$client->getMdp();
        $fidelite=$client->getFidelite();
        $datas = array(':identifiant'=>$identifiant,':nom'=>$nom,':prenom'=>$prenom,':age'=>$age,':sexe'=>$sexe,':adresse'=>$adresse,':email'=>$email,':mdp'=>$mdp,':fidelite'=>$fidelite);
        $req->bindValue(':identifiant',$identifiant);
        $req->bindValue(':nom',$nom);
        $req->bindValue(':prenom',$prenom);
        $req->bindValue(':age',$age);
        $req->bindValue(':sexe',$sexe);
        $req->bindValue(':adresse',$adresse);
        $req->bindValue(':email',$email);
        $req->bindValue(':mdp',$mdp);
        $req->bindValue(':fidelite',$fidelite);
        
        
            $s=$req->execute();
            

        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
        
    }
    function recuperer($identifiant){
        $sql="SELECT * from client where identifiant=$identifiant";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    
    function rechercher($identifiant){
        $sql="SELECT * from client where identifiant=$identifiant";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

function verifmail($mail){
  $pdo=config::getConnexion();
  // Prepare a select statement
        $sql = "SELECT email FROM client WHERE email = :email";
        
        if($stmt = $pdo->prepare($sql)){
         // Set parameters
            $param_mail = trim($mail);
            // Bind variables to the prepared statement as parameters
            $stmt->bindValue(":email", $param_mail);            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                if($stmt->rowCount() == 1){
                 return 1;
                } else{
                 return 0;
                    
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        unset($stmt);
 }


function verifpass($pass){
  $pdo=config::getConnexion();
  // Prepare a select statement
        $sql = "SELECT mdp FROM client WHERE mdp = :mdp";
        
        if($stmt = $pdo->prepare($sql)){
         // Set parameters
            $param_pass = trim($pass);
            // Bind variables to the prepared statement as parameters
            $stmt->bindValue(":mdp", $param_pass);            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                if($stmt->rowCount() == 1){
                 return 1;
                } else{
                 return 0;
                    
                }
            }
        }
         
        // Close statement
        unset($stmt);
 }
 function connexion($username,$password){
  $pdo=config::getConnexion();
        // Prepare a select statement
        $sql = "SELECT id, username, password,nom,prenom,email,photo FROM users WHERE username = :username";
        
        if($stmt = $pdo->prepare($sql)){
            // Set parameters
            $param_username = trim($username);
            $stmt->bindValue(":username",$param_username);
           
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Check if username exists, if yes then verify password
                if($stmt->rowCount() == 1){
                    if($row = $stmt->fetch()){
                        $id = $row["id"];
                        $username = $row["username"];
                        $nom = $row["nom"];
                        $prenom = $row["prenom"];
                        $email = $row["email"];
                        $photo = $row["photo"];
                        $hashed_password = $row["password"];
                        if(password_verify($password, $hashed_password)){
                          unset($stmt);
                            // Password is correct, so start a new session
                                unset($pdo);
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username; 
                            $_SESSION["nom"] = $nom; 
                            $_SESSION["prenom"] = $prenom; 
                            $_SESSION["email"] = $email; 
                            $_SESSION["picture"] = $photo; 
                           return 0 ;
                        } else{
                          unset($stmt);
                            // Display an error message if password is not valid
                                unset($pdo);
                            return 1;
                        }
                    }
                } else{
                  unset($stmt);
                        unset($pdo);
                    return 2;
                }
            } else{
              unset($stmt);
                 unset($pdo);
             return 3;
            } 
    }
 }

}

?>