<?php
if (!isset($_SERVER['PATH_INFO'])) {
    $path="";
}
if (isset($_SERVER['PATH_INFO'])) {
        $path=$_SERVER['PATH_INFO'];
    }
else{
        echo "erreur";
    }
if ($path==""){
    echo"Vous etes sur la page d'acceuil";
}
if ($path=="/test"){
    echo"vous etes sur la page test";
}
if($path=="/ajoutproduit"){
    include __DIR__.'/../src/controller/ProductController.php';
    add__product__form();
}
if ($path=="/enregistrer__produit"){
    echo"enrgistre le produit via le formulaire";
}
if ($path=="/catalog"){
    echo"evous etes sur la page catalogue";
}






?>