<?php
    include_once __DIR__.'/../function.php';
    
    function ligne_commande_m(){
    
        $PDO=connect_bd();
        $produits=getallpanier();
        include_once __DIR__.'/../entity/P_commande.php';
        insert_p_commande_m();
        $last_commande_p=afficher_last_p_commande_m();

 
        

        foreach ( $produits as $key=>$value   ) {
            $sql = "INSERT INTO ligne_commande (id, id_produit , quantite , total,p_commande_id	)
            VALUES (?,?,?,?,?)";
            $stmt= $PDO->prepare($sql);
            $stmt->execute([NULL, 
            $value['product']['id']  , 
            $value['quantite'],
            $value['quantite'] * $value['product']['prix'],
            $last_commande_p['id']
            ]);
        }
    }
?>    