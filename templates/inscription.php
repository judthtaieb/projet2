<?php include "header.php";     ?>
<p class="h1">Inscription</p>
<form action= "/inscription" method="POST">


  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Nom </label>
    <input type="text"  name="nom" class="form-control" id="exampleInputPassword1">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Prenom </label>
    <input type="text"  name="prenom" class="form-control" id="exampleInputPassword1">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Adresse </label>
    <input type="text"  name="adresse" class="form-control" id="exampleInputPassword1">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Code postal</label>
    <input type="number" name="codepostal"class="form-control" id="exampleInputPassword1">
  </div>

  <div class="mb-3 row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" name="email"  class="form-control-plaintext" id="staticEmail">
    </div>
  </div>

  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Mot de passe</label>
    <div class="col-sm-10">
      <input type="password" name="motdepasse" class="form-control" id="inputPassword">
    </div>
  </div>
  
  
  <button type="submit" class="btn btn-primary">Connexion</button>
</form>

<a href="/authentification">Authentification</a>
<a href="/connexion">Inscription</a>



<?php include "footer.php";     ?>