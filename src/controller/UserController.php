<?php

function deconnexion_user(){

    unset($_SESSION['user']);
    include __DIR__.'/../../templates/home.php';

}

function ajout_user(){
    if(isset( $_POST['nom'])||isset ( $_POST['prenom'])|| isset($_POST['adresse'])||isset($_POST['codepostal'])||isset($_POST['email'])||isset($_POST['motdepasse'])){
    include __DIR__.'/../../src/entity/inscriptionuser.php';
    save_user_m();
    
    include __DIR__.'/../../templates/home.php';  
    }
    else{
        include __DIR__.'/../../templates/inscription.php';
    }
}

function authentification(){
    include __DIR__.'/../../templates/authentification_user.php';
} 

function authentification_user(){
    // appel du modele
    include __DIR__.'/../entity/inscriptionuser.php';

    if (authentification_user_m()==true) { 
        include __DIR__.'/../../templates/home.php';
    }
    else {    // appel de la vue
    include __DIR__.'/../../templates/authentification_user.php';
    }
}

function inscription(){
    include __DIR__.'/../../templates/inscription.php';
} 

function enregistrer_user(){
    // appel du modele
    include __DIR__.'/../entity/inscriptionuser.php';
    save_user_m();


    // appel de la vue
    include __DIR__.'/../../templates/home.php';
}
?>
