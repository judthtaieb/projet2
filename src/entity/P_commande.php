<?php
include_once __DIR__.'/../function.php';

function insert_p_commande_m(){
    $user= authentification_un_user_m($_SESSION['user']);

    $PDO=connect_bd();
     // insertion du num commande global
     include_once __DIR__.'/../Controller/CartController.php';
     $produit=getallpanier(); // recuperer les produits via la fonction
     $total=get_total_panier($produit); // recuperer le  prix total en bouclant sur les P.
   // insertion du num commande global
   $sql = "INSERT INTO p_commande (id, id_user, total)  
   VALUES (?,?,? )";
   $stmt= $PDO->prepare($sql);
   $stmt->execute([NULL,  $user[0]['id'], $total ]);

}

function afficher_last_p_commande_m(){
        
    $PDO=connect_bd();

            
    // Récupère les données de la table produits
    $requete1 = "SELECT * FROM p_commande order by id desc limit 1";

    // le prepare (avec le execute) est comme un query mais beaucoup plus sécurisé (voir ci-dessous)
    // l'opérateur flèche -> permer d'accéder aux éléments d'une classe (méthode ou attribut)
    $resultat = $PDO->prepare($requete1);
    $resultat->execute();
        
    // nouveau tableau initialisé à vide
    $rows=array();

    while($ligne = $resultat->fetch()) { 
        // enrichir mon tableau avec le tab $ligne
        $rows=$ligne;
    } 

    return $rows;

}
?>

