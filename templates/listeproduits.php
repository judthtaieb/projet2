<?php include "header.php";     ?>
<?php

       
?>

      <p class="h1">Bienvenue sur notre site</p>



<div class="row row-cols-1 row-cols-md-3 g-4">

<?php  
      


    foreach($liste_produit  as $ligne){

    ?>
     
  <div class="col">
    <div class="card h-100">
    <img src="/img/<?= $ligne['image'] ?>" class="card-img-top" alt="...">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"> <a href=voir.php?id=<?=$ligne['id']?> >  <?= $ligne['nom']."</a> ". $ligne['prix']." € "?></h5>
        <p class="card-text"><?= $ligne['description'] ?></p>
        <p>  <a href="/ajouter_panier?id=<?=$ligne['id']?> " type="button" class="btn btn-primary" data-bs-toggle="button">Ajouter au panier </a>   </p>
        <p><a href="/supprimer_produit?id=<?= $ligne['id'] ?>" class="btn btn-danger active" role="button" data-bs-toggle="button" aria-pressed="true">Supprimer ce produit</a></p>
      </div>
    </div>
  </div>
   
  <?php
	}  

  ?>
  
</div>





   

   

</body>
</html>