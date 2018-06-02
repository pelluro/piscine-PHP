<?php
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Les Produits</title>
    <div class="menu">
        <?php include 'menu.php';?>
    </div>
    <link rel="stylesheet" href="produit.css">

</head>
<body>
<div class="menu">
    <nav>
        <ul>
            <li class="entree"><a href="#">Femme</a>
                <ul class="details">
                    <li><a href="#"> Salade au poulet avec pignon de pain</a></li>
                    <li><a href="#">Salade au thon</a></li>
                    <li><a href="#">Gaspacho</a></li>
                </ul>
            </li>
            <li class="plat"><a href="#">Homme</a>
                <ul class="details">
                    <li class="hey"><a href="#"> Riz au poulet avec sa sauce tomate</a>

                        <ul class="details_plat">
                            <li><a href="#"> Riz</a></li>
                            <li><a href="#"> Poulet</a></li>
                            <li><a href="#"> Sauce tomate</a></li>
                        </ul>

                    </li>

                    <li><a href="#">Pate au pesto</a></li>
                    <li><a href="#">Sandwich jambon beurre</a></li>
                </ul>
            </li>
            <li class="dessert"><a href="#"> Enfant</a>
                <ul class="details">
                    <li><a href="#"> Moelleux au chocolat avec coulis de
                            fraise</a></li>
                    <li><a href="#">Tarte au pomme</a></li>
                    <li><a href="#">Panier de fruits </a></li>
                </ul>
            </li>
            <li class="contact"><a href="#"> Vente Flash</a>
                <ul class="details">
                    <li><a href="#"> toto_va_a_la_plage_en_ete@sncf.fr</a></li>
                </ul></li>

        </ul>
    </nav>
</div>
</body>
</html>
