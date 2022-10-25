<?php

require_once "source-inc/add-to-cart.inc.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>UG Assignment 2 - Group 16</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Lukas  Formato | Kieran Mayer | Luke Crawford" />
    <script src="scripts/script.js" defer></script>
    <link rel="stylesheet" href="source-styles/index.css">
</head>
<body>
<div>
    <?php require_once "source-inc/menu.inc.php"; ?>         
</div>

<?php require_once "source-inc/dbconn.inc.php"; ?>

<?php

$itemsSQL = "SELECT item_id, name, gender, price, quantity, charSize FROM items"; 

$result = mysqli_query($conn, $itemsSQL);

while ($row = mysqli_fetch_array($result)){?>
    <form method="post" action="product-testing.php?item_id=<?=$row['item_id']?>">
        <h5><?=$row['name'];?></h5>
        <input type="submit" value="Add to cart" name="add_to_cart">
        <input type="hidden" name="name" value="<?=$row['name'] ?>">
        <input type="hidden" name="price" value="<?=$row['price'] ?>">
        <input type="hidden" name="charSize" value="<?=$row['charSize'] ?>">
        <input type="hidden" name="quantity" value="1">
    </form>
    <?php    }



?>

</body>