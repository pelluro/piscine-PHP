<?php

require_once dirname(__FILE__)."connection.php";

mysqli_query($link, "USE boutiques") ? "boutiques set\n" : "boutiques err\n";

$login = "username";
$password = "password";
$dbname = "boutiques";

// Check connection

$sql = "SELECT * FROM users_shop";
$result = mysqli_query($link, $sql);

$sql="SELECT * FROM card_shop_product csp 
join card_shop c on c.ID = csp.cardshop_id
join product p on p.ID = csp.product_id";

//if (mysqli_num_rows($result) > 0) {
//    while($row = mysqli_fetch_assoc($result)) {
//        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
//    }
//} else {
//    echo "0 results";
//}

//mysqli_close($conn);
?>