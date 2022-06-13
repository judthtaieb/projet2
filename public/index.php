<?php
 session_start();

if (!isset($_SERVER['PATH_INFO'])) {
    $path="";
}

if (isset($_SERVER['PATH_INFO'])) {
        $path=$_SERVER['PATH_INFO'];
}

if ($path==""){
    include __DIR__.'/../src/controller/HomeController.php';
    home();
}

if($path=="/home"){
    include __DIR__.'/../src/controller/HomeController.php';
    home();
}

if($path=="/ajoutproduit"){
    include __DIR__.'/../src/controller/ProductController.php';
    add_product_form();
}

if ($path=="/enregistrer__produit"){
    
    include __DIR__.'/../src/controller/ProductController.php';
    save_product();
}

if ($path=="/catalog"){
    include __DIR__.'/../src/controller/ProductController.php';
    afficher_product();
}



// routeur : url /afficher_produit => controleur des produits
if ($path=="/afficher_produit")  {
    include __DIR__.'/../src/Controller/ProductController.php';
    afficher_product();
}

if ($path=="/supprimerproduits")  {
    include __DIR__.'/../src/Controller/ProductController.php';
    supprimer_produit();
}

if ($path=='/panier')  { 
include __DIR__.'/../src/controller/CartController.php';
panier();
}

if ($path=='/ajouter_panier'){
include __DIR__.'/../src/controller/CartController.php';
ajouter_panier();
}

if ($path=='/vider_panier'){
include __DIR__.'/../src/controller/CartController.php';
vider_panier();
}

if ($path=='/voir_panier'){
include __DIR__.'/../src/controller/CartController.php';
getallpanier();

}

if ($path=='/supprimer_produit')  {
    include __DIR__.'/../src/Controller/ProductController.php';
    supprimer_produit();

}

if ($path=='/passer_commande'){
include __DIR__.'/../src/controller/CartController.php';
passer_commande();

}

if ($path=='/connexion')  {

    // on inserer les données en BD
    // APPELLE LE MODELE
    include __DIR__.'/../src/Controller/UserController.php';

    inscription();

} 


if ($path=='/inscription')  {

    // on inserer les données en BD
    // APPELLE LE MODELE
    include __DIR__.'/../src/Controller/UserController.php';

    ajout_user();

} 


if ($path=='/authentification')  {

    // on inserer les données en BD
    // APPELLE LE MODELE
    include __DIR__.'/../src/Controller/UserController.php';
    
    authentification();
}
   

if ($path=='/authentification_enregistrer')  {

    // on inserer les données en BD
    // APPELLE LE MODELE
    include __DIR__.'/../src/Controller/UserController.php';

    authentification_user();

} 
if ($path=='/deconnexion')  {

    // on inserer les données en BD
    // APPELLE LE MODELE
    include __DIR__.'/../src/Controller/UserController.php';

    deconnexion_user();

} 

?>