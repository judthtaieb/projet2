<?php include "header.php";     ?>
<form enctype="multipart/form-data"    action="/enregistre_produit" method="POST"  >




  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Nom du produit</label>
    <input type="text"  name="nom" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Description</label>
  <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Prix</label>
    <input type="number" name="prix"class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="formFile" class="form-label">Choisissez une image</label>
    <input class="form-control" type="file" id="formFile" name="PJ"  >
</div>
  
  <button type="submit" class="btn btn-primary">Ajouter</button>
</form>


<?php include "footer.php";     ?>