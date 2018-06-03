<?php
if (!isset($_SESSION['loggued_on_user']))
	header("location: ../index.php");
?>
<div class="topmenu">
	<a href="../index.php">Accueil Site</a>
	<a href="index.php">Accueil Admin</a>
	<a href="product.php">Produits</a>
	<a href='../logout.php'>Deconnexion</a><a href='../del_account.php'>Suppression de compte</a>
</div>