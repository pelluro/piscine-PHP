<?php
require_once dirname(__FILE__)."/../../functions/functions.php";

function add_category($nom)
{
	global $db;
	$sql = "INSERT INTO category_shop (name) VALUES ('$nom')";
	if (!mysqli_query($db, $sql))
	    die("Error: " . $sql . "<br>Stacktrace :" . mysqli_error($db));
	if (!mysqli_query($db, $sql))
	    die("Error: " . $sql . "<br>Stacktrace :" . mysqli_error($db));
}

function del_category($category_id)
{
	global $db;
	$sql = "DELETE FROM categories_product WHERE category_id = $category_id";
	if (!mysqli_query($db, $sql))
	    die("Error: " . $sql . "<br>Stacktrace :" . mysqli_error($db));
	$sql = "DELETE FROM category_shop WHERE id = $category_id";
	if (!mysqli_query($db, $sql))
	    die("Error: " . $sql . "<br>Stacktrace :" . mysqli_error($db));
}

function update_category($category_id, $nom)
{
	global $db;
	$sql = "UPDATE category_shop SET name = '$nom' WHERE id = $product_id";
	if (!mysqli_query($db, $sql))
	    die("Error: " . $sql . "<br>Stacktrace :" . mysqli_error($db));
}

function getcategories()
{
	global $db;
	$sql = "SELECT category_shop.id, category_shop.name from category_shop";
	$resultat;
	$res = mysqli_query($db, $sql);
	while ($row = mysqli_fetch_assoc($res))
		$resultat[] = $row;
	return $resultat;
}

function getcategory($category_id)
{
	global $db;
	$sql = "SELECT category_shop.id, category_shop.name from category_shop WHERE category_shop.id = $category_id";
	$resultat;
	$res = mysqli_query($db, $sql);
	return mysqli_fetch_assoc($res);
}

function getproductsofcategory($category_id)
{
	global $db;
	$sql = "SELECT product_shop.id, product_shop.name, product_shop.price, product_shop.imglink from categories_product JOIN product_shop on category_shop.id = categories_product.product_id WHERE categories_product.category_id = $category_id";
	$resultat;
	$res = mysqli_query($db, $sql);
	while ($row = mysqli_fetch_assoc($res))
		$resultat[] = $row;
	return $resultat;
}
?>