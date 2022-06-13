<?php include "header.php";     ?>
<?php

       
?>

      <p class="h1">Authentification</p>
<form action="/authentification_enregistrer" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
    <input type="password" class="form-control" id="exampleInputPassword1"  name="motdepasse">
  </div>
   
  <button type="submit" class="btn btn-primary">Authentification</button>
</form>

<a href="/authentification">Authentification</a>
<a href="/connexion">Inscription</a>

