<?php
require_once dirname(__FILE__)."/../../functions/functions.php";

function add_produit($nom, $prix, $imglink, $categories)
{
	global $db;
	$sql = "INSERT INTO product_shop (name, price, imglink) VALUES ('$nom', '$prix', '$imglink')";
	if (!mysqli_query($db, $sql))
	    die("Error: " . $sql . "<br>Stacktrace :" . mysqli_error($db));
	$id = mysqli_insert_id($db);
	$sql = "";
	foreach($categories as $category)
	{
		$sql = $sql."INSERT INTO categories_product (category_id, product_id) VALUES ('$category', '$id');";
	}
	if (!mysqli_query($db, $sql))
	    die("Error: " . $sql . "<br>Stacktrace :" . mysqli_error($db));
}

function del_product($product_id)
{
	global $db;
	$sql = "DELETE FROM categories_product WHERE product_id = $product_id";
	if (!mysqli_query($db, $sql))
	    die("Error: " . $sql . "<br>Stacktrace :" . mysqli_error($db));
	$sql = "DELETE FROM card_shop_product WHERE product_id = $product_id";
	if (!mysqli_query($db, $sql))
	    die("Error: " . $sql . "<br>Stacktrace :" . mysqli_error($db));
	$sql = "DELETE FROM product_id WHERE id = $product_id";
	if (!mysqli_query($db, $sql))
	    die("Error: " . $sql . "<br>Stacktrace :" . mysqli_error($db));
}

function update_product($product_id, $nom, $prix, $imglink)
{
	global $db;
	$sql = "UPDATE product_shop SET name = '$nom', price = $prix, imglink = '$imglink' WHERE id = $product_id";
	if (!mysqli_query($db, $sql))
	    die("Error: " . $sql . "<br>Stacktrace :" . mysqli_error($db));
}

function add_categories_to_product($product_id, $categories)
{
	global $db;
	$sql = "SELECT category_id FROM categories_product WHERE product_id  = $product_id";
	$result = mysqli_query($db, $sql);
	$index = 0;
	while ($row = mysqli_fetch_array($result))
	{
		$categoriesofproduct[$index] = $row["category_id"];
		$index++;
	}
	$sql = "";
	foreach($categories as $category)
	{
		if(!is_in_array($category, $categoriesofproduct))
			$sql = $sql."INSERT INTO categories_product (category_id, product_id) VALUES ('$category', '$id');";
	}
	if (!mysqli_query($db, $sql))
	    die("Error: " . $sql . "<br>Stacktrace :" . mysqli_error($db));
}

function del_categories_of_product($product_id, $categories)
{
	global $db;
	$sql = "";
	foreach($categories as $category)
	{
		$sql = $sql."DELETE FROM categories_product WHERE category_id=$category and product_id = $product_id;";
	}
	if (!mysqli_query($db, $sql))
	    die("Error: " . $sql . "<br>Stacktrace :" . mysqli_error($db));
}

function getproducts()
{
	global $db;
	$sql = "SELECT product_shop.*, category_shop.id as catid, category_shop.name as catname
			from categories_product
			join product_shop on product_shop.id = categories_product.product_id
			JOIN category_shop on category_shop.id = categories_product.category_id";
	while ($row = mysqli_fetch_assoc($result))
	{
		echo "<div>Tata</div>";
		//$resultat[] = $row;
	}
	return NULL;
}
?>