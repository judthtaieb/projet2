<?php
include_once __DIR__.'/../function.php';

function save_user_m(){

    $PDO=connect_bd();
    
    $mdp= password_hash($_POST['motdepasse'],PASSWORD_BCRYPT);
 

    $sql = "INSERT INTO user (id, nom, prenom,adresse,codepostal,motdepasse,email) VALUES (?,?,?,?,?,?,?)";
    $stmt= $PDO->prepare($sql);
    $stmt->execute([NULL, $_POST['nom'], $_POST['prenom'], $_POST['adresse'],$_POST['codepostal'],$mdp,$_POST['email']]);
}


function authentification_user_m(){
          
    $PDO=connect_bd();
    // POST
    $mail=$_POST['email'];
    $mdp=$_POST['motdepasse'];
 
    // Récupère les données de la table produits
    $requete1 = "SELECT * FROM user where email='$mail'";
    $resultat = $PDO->prepare($requete1);

    $resultat->execute();

    
            
    // nouveau tableau initialisé à vide
    $rows=array();

    while($ligne = $resultat->fetch()) {  
        // enrichir mon tableau avec le tab $ligne
        $rows[]=$ligne;
    } 


    // cas mot de passe OK
    if (($mail==$rows[0]['email']) && (password_verify($mdp, $rows[0]['motdepasse'] ))   ){
        
    
        $_SESSION['user']=$rows[0]['email'];
         return true;
    }
    else { 
     // cas mot de passe KO 
        return false;
    }
 
}
function authentification_un_user_m( $mail){
          
    $PDO=connect_bd();
    // POST 
    // Récupère les données de la table produits
    $requete1 = "SELECT * FROM user where email='$mail'";
    $resultat = $PDO->prepare($requete1);

    $resultat->execute();

    
            
    // nouveau tableau initialisé à vide
    $rows=array();

    while($ligne = $resultat->fetch()) {  
        // enrichir mon tableau avec le tab $ligne
        $rows[]=$ligne;
    } 
 
    return $rows;
 
}

?>




