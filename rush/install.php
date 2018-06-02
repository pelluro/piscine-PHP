<?php
require_once dirname(__FILE__)."/functions/connection_install.php";

if(!mysqli_query($db, "USE boutiques"))
{
	mysqli_query($db, "CREATE DATABASE boutiques");
}
mysqli_query($db, "USE boutiques");

/*****************************
 * la table des utilisateurs
 *****************************/

$query = "CREATE TABLE users_shop (
    id INT AUTO_INCREMENT,
    username varchar(255),
    password varchar(512) NOT NULL,
    PRIMARY KEY(id)
)";
check_query($db, $query);

/*****************************
 * la table des categories
 *****************************/
$query = "
CREATE TABLE category_shop (
    id INT AUTO_INCREMENT,
    PRIMARY KEY (id),
    name varchar(255) NOT NULL
)
";
check_query($db, $query);


/*****************************
 * la table des produits
 *****************************/

$query = "CREATE TABLE product_shop (
    id INT AUTO_INCREMENT,
    PRIMARY KEY (id),
    name varchar(255) NOT NULL,
    price float NOT NULL,
	imglink varchar(255)
)";
check_query($db, $query);

/*****************************
 * creation card shop
 *****************************/

$query = "CREATE TABLE card_shop (
    id INT AUTO_INCREMENT,
    PRIMARY KEY(id),
    user_id INT,
    FOREIGN KEY (user_id) REFERENCES users_shop(id)
)";
check_query($db, $query);

/*****************************
 * creation card shop product
 *****************************/
$query = "CREATE TABLE card_shop_product (
    card_shop_id INT,
    FOREIGN KEY (card_shop_id) REFERENCES card_shop(id),
    product_id INT,
    FOREIGN KEY (product_id) REFERENCES product_shop(id),
    amount INT NOT NULL
    )";
check_query($db, $query);

/*****************************
 * creation categories product
 *****************************/
$query = "CREATE TABLE categories_product (
    category_id INT,
    FOREIGN KEY (category_id) REFERENCES category_shop(id),
    product_id INT,
    FOREIGN KEY (product_id) REFERENCES product_shop(id)
    )";
check_query($db, $query);