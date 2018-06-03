<?php
if(isset($_POST["form_productid"]))
{
	update_product($_POST["form_productid"],$_POST["form_productname"],$_POST["form_productprice"],$_POST["form_productimg"]);
	update_categories_of_product($_POST["form_productid"],$_POST["form_product_category"]);
}
else if(isset($_GET["action"]) && $_GET["action"] = "delete")
{
	del_product($_GET["id"]);
	header("Location: ".dirname(__FILE__));
}

$product = getproduct($_GET["id"]);
$categories = getallcategorieswithproduct($_GET["id"]);
?>
<form method="post" action="">
<input type="hidden" name="form_productid" value="<?=$product["id"]?>"/>
<div class="productdetail">
	<div class="productid"><?=$product["id"]?></div>
	<div class="productname">Name: <input type="textbox" name="form_productname" value="<?=$product["name"]?>"/></div>
	<div class="productprice">Price: <input type="textbox" name="form_productprice" value="<?=$product["price"]?>"/></div>
	<div class="productimg">Image: <input type="textbox" name="form_productimg" value='<?=$product["imglink"]?>'/></div>
	<div class="productcategories">Categories: 
	<?php
	foreach($categories as $category)
	{
		?>
		<div><input type="checkbox" name="form_product_category[]" value=<?=$category["id"]?> <?=$category["isinproduct"]==1?"checked":""?> /><?=$category["name"]?> </div>
		<?php
	}
	?>
	</div>
</div>
<input type="submit" value="Enregistrer"/>
</form>