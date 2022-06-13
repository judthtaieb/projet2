<?php include "header.php";     ?> 
<?php
var_dump($_POST);
?>

<?php
$sql = "INSERT INTO produit(id, nom, description ,prix) VALUES (?,?,?,?)";
$stmt= $bdd->prepare($sql);
$stmt->execute([NULL, $_POST['nom'], $_POST['description'], $_POST['prix']]);

?>

<?php include "footer.php";     ?>