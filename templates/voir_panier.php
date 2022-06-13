<?php include "header.php";     ?> 

 <p class="h1">Votre panier</p>


 <table class="table"> 
    <?php if (isset($_SESSION['cart'])) { ?>
  <thead>
    <tr>
    <th scope="col">NUM</th>
      <th scope="col">ID_PRODUIT</th>
      <th scope="col">NOM</th>
      <th scope="col">PRIX</th>
      <th scope="col">DESCRIPTION</th>
      <th scope="col">QUANTITE</th>  
      <th scope="col">PRIX TOTAL (P*Q)</th>
    </tr>
  </thead>
  
  <tbody>

  <?php 
       foreach($produit  as $key => $value){
       ?>
    <tr>  
      <td><?=$key ?> </td>
      <td><?=$value['product']['id']; ?></td> 
      <td><?=$value['product']['nom']; ?></td> 
      <td><?=$value['product']['prix']; ?></td>
      <td><?=$value['product']['description']; ?></td> 
      <td><?=$value['quantite']; ?></td>
      <td><?=$value['quantite']*$value['product']['prix']; ?></td> 
    </td>
       
      <td>
           <?php 
     
         ?>
    </td> 
    <?php  
 } 

 ?>
  </tbody>
</table>
TOTAL : <?=$PT;?>
<br />
<a href="/vider_panier" class="btn btn-primary"> Vider le panier </a> 
<a href="/passer_commande" class="btn btn-primary"> Passer la commande </a>  
<?php } else { echo "le panier est vide"; } ?>

<?php include "footer.php";     ?>