<?php
require_once dirname(__FILE__)."/connection.php";


mysqli_query($db, "USE boutiques") ? "boutiques set\n" : "boutiques err\n";

mysqli_query($db, "CREATE DATABASE boutiques");
mysqli_query($db, "USE boutiques");

/*****************************
 * la table des utilisateurs
 *****************************/

$query = "CREATE TABLE users_shop (
    id_users INT AUTO_INCREMENT,
    login varchar(255),
    password varchar(512) NOT NULL,
    PRIMARY KEY(id_users)
)";
check_query($db, $query);

$query= "INSERT INTO users_shop (login, password) VALUES
('toto', 'tata'),
('tata', 'lalala')";
check_query($db, $query);

/*****************************
 * la table des categories
 *****************************/


$query = "
CREATE TABLE categorie_shop (
    id_cat INT AUTO_INCREMENT,
    PRIMARY KEY (id_cat),
    cat_nom varchar(255) NOT NULL
)
";
check_query($db, $query);

$query= "INSERT INTO categorie_shop(cat_nom) VALUES
('homme'),
('femme'),
('enfant'),
('pull'),
('chaussures')
";
check_query($db, $query);

/*****************************
 * la table des produits
 *****************************/

$query = "CREATE TABLE product_shop (
    id_product INT AUTO_INCREMENT,
    PRIMARY KEY (id_product),
    name_pro varchar(255) NOT NULL, 
    price INT NOT NULL,
    categories INT,
    FOREIGN KEY (categories) REFERENCES categorie_shop(id_cat)
)";
check_query($db, $query);

$query= "INSERT INTO product_shop(name_pro,price,categories) VALUES
('pull rose','20',3),
('pantalon vert','10',1)
";
mysqli_query($db, $query);
/*****************************
 * creation card shop
 *****************************/

$query = "CREATE TABLE card_shop (
    id_cards INT AUTO_INCREMENT,
    PRIMARY KEY(id_cards),
    id_users INT,
    FOREIGN KEY (id_users) REFERENCES users_shop(id_users)
)";
check_query($db, $query);

/*****************************
 * creation card shop product
 *****************************/
$query = "CREATE TABLE card_shop_product (
    id_card_product INT,
    FOREIGN KEY (id_card_product) REFERENCES card_shop(id_cards),
    id_product INT,
    FOREIGN KEY (id_product) REFERENCES product_shop(id_product),
    amount INT NOT NULL
    )";
check_query($db, $query);