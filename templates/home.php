<?php include "header.php";     ?>
<?php echo "Bienvenue sur le site";
?>
<p class="h1">Bienvenue sur la home .</p><?php if (isset($_SESSION['user'])) echo $_SESSION['user']; ?>
 <?php include "footer.php";     ?>