<?php

function passer_commande(){

include_once __DIR__.'/../entity/Ligne_commande.php';
include __DIR__.'/../entity/inscriptionuser.php';

ligne_commande_m();

include __DIR__.'/../../templates/home.php';

}


function get_total_panier($produit){
    $PT=0;
foreach($produit  as $key => $value){
$PT= $value['quantite']*$value['product']['prix']+ $PT;
}
return $PT;
}

function panier(){
    $produit=getallpanier();
    $PT=get_total_panier($produit);
    // afficher la vue du panier
    include __DIR__.'/../../templates/voir_panier.php';

}

function  vider_panier(){
    
    unset($_SESSION['cart']);
        include __DIR__.'/../../src/controller/ProductController.php';
        afficher_product();
}


function ajouter_panier(){ 
    
        $id=$_GET['id'];
        //cas ou le panier n existe pas 

        if (!isset ($_SESSION["cart"] ))   {
            $_SESSION["cart"]=array();
        }

    //sinon il existe et on peut afficher les elements
     //$_SESSION["cart"]=[$id,1];
    
        //cas ou le panier existe deja 
        // on ajoute dans le tableau cart un element uniquement si il n'existait pas
        // si il existait on ajoute la quantité +1
    
        // si l element est deja present dans le tableau initial

    if ( array_key_exists( $id, $_SESSION["cart"]) ){
        //echo "element deja existant";  
        $_SESSION["cart"][$id]=$_SESSION["cart"][$id] + 1;
    }

    else {
        // nouvel element non present dans le tab initial:il est ajoute au tableau 
        //
       $_SESSION["cart"][$id]=1;
    }
    $produit=getallpanier();
    $PT=get_total_panier($produit);
    include __DIR__.'/../../templates/voir_panier.php';
        //var_dump($_SESSION);
    }


    function getallpanier(){

        include_once __DIR__.'/../entity/modeleproduit.php';
    
    
        // tableau initialisé à vide
        $tab_produit_full=array();
    
        // boucle sur mon panier de session 
        foreach($_SESSION['cart']  as $key => $value){
    
           // grace au modele je recupere la ligne complete du produit
           $produit = afficher_un_produit_m($key); 
           
       // a chaque boucle je met la ligne produite complete et sa quantite
       $tab_produit_full[]=[
        'product'=>$produit,
        'quantite'=>$value
     ]; 
        }
    
        return $tab_produit_full;
    
     }
    
?>


