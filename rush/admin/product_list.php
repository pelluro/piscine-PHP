<?php
	require_once dirname(__FILE__)."/functions/functions_products.php";
	$products = getproducts();
	echo "<div>Toto = ".$products[0]."</div>";
?>
<table width="100%">	
<tr>
	<th>#</th>
	<th>Name</th>
	<th>Price</th>
	<th>Image</th>
	<th>Category</th>
</tr>
<?php

/*
	foreach($products as $product)
	{
		?>
		<tr>
			<td><?echo $product["id"];?></td>
			<td><?=$product["name"]?></td>
			<td><?=$product["price"]?></td>
			<td><img src='<?=$product["imglink"]?>'/></td>
			<td><?=$product["catname"]?></td>
		</tr>
		<?php
	}*/
?>
</table>