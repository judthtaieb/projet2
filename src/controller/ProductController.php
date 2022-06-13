<?php
include_once __DIR__.'/../function.php';

function supprimer_produit(){
    // appel du model
    include __DIR__.'/../entity/modeleproduit.php';
    $id=$_GET['id'];
    supprimer_un_produit_m($id);

    // appel de la vue grace à la fonction du controller
    $liste_produit=afficher_produit_m();  
    // inclus la vue
    include __DIR__.'/../../templates/listeproduits.php';

}
function add_product_form(){
include __DIR__.'/../../templates/ajouter_produit.php';
}
function save_product(){
include __DIR__.'/../entity/modeleproduit.php';
save_produit_m();
var_dump($_FILES);  
       
         
move_uploaded_file($_FILES['PJ']['tmp_name'], $_SERVER["DOCUMENT_ROOT"]."/img/".$_FILES['PJ']['name']);

//DANS L INSERTION
$_FILES['PJ']['name'];
}

//afficher tout les produit
function afficher_product(){
    //appelle du modele le modele des produits
   include __DIR__.'/../entity/modeleproduit.php';
   $liste_produit=afficher_produit_m(); 
   // inclus la vue
   include __DIR__.'/../../templates/listeproduits.php';

}


?>