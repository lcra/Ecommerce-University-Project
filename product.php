<?php require_once "source-inc/add-to-cart.inc.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>UG Assignment 2 - Group 16</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Lukas  Formato | Kieran Mayer | Luke Crawford" />
    <script src="scripts/script.js" defer></script>
    <link rel="stylesheet" href="source-styles/product.css">   
</head>
<body>
    <?php require_once "source-inc/dbconn.inc.php"; ?>
    <div>
        <?php require_once "source-inc/menu.inc.php"; ?>         
    </div>
    
    <?php
        $itemsSQL = "SELECT item_id, name, gender, charSize, price, category, quantity, image, alt, description FROM items WHERE item_id = 1";
        $result = mysqli_query($conn, $itemsSQL);
        
        if ($row = mysqli_fetch_array($result)){?>
            <div class="content">
                <div class="image-collage">
                    <? echo "<img class=\"product-image\" alt='".$row['alt']."' src='".$row['image']."' />"; ?>
                </div>
                <div class="product-info">
                    <h1 class="product"><?=$row['name'];?></h1>
                    <p class="short-descr">
                        <? echo $row['category'] ?>
                    </p>
                    <p class="price">
                        $<?=$row['price'] ?>
                    </p>
                    <p class="size">
                        Select Size
                    </p>
                    <form method="post" action="product.php?item_id=<?=$row['item_id']?>">
                        <input type="hidden" name="name" value="<?=$row['name'] ?>">
                        <input type="hidden" name="price" value="<?=$row['price'] ?>">
                        <input type="hidden" name="quantity" value="1">
                        <input type="radio" name="charSize" value="S" id="S">
                        <label for="S" class="size-button">S</label>
                        <input type="radio" name="charSize" value="M" id="M">
                        <label for="M" class="size-button">M</label>
                        <input type="radio" name="charSize" value="L" id="L">
                        <label for="L" class="size-button">L</label>
                        <input type="submit" value="Add to cart" name="add_to_cart">
                    </form>
                    <p class="hdescr">
                        Product Description
                    </p>
                    <p class="descr">
                        <?=$row['description'] ?>
                    </p>
                </div>
            </div>    
        <?php 
        }
        mysqli_close($conn);
    ?>
</body>
</html>
