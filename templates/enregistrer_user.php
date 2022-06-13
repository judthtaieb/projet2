<?php include "header.php";     ?> 
<?php
var_dump($_POST);
?>

<?php
$sql = "INSERT INTO user (id, nom, prenom ,adresse,codepostal,email,motdepasse) VALUES (?,?,?,?,?,?,?)";
$stmt= $bdd->prepare($sql);
$stmt->execute([NULL, $_POST['nom'], $_POST['prenom'], $_POST['adresse'],$_POST['codepostal'],$_POST['email'],$mdp]);

?>

<?php include "footer.php";     ?>