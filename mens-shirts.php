<!DOCTYPE html>
<html lang="en">
<head>
    <title>UG Assignment 2 - Group 16</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Lukas  Formato | Kieran Mayer | Luke Crawford" />
    <script src="scripts/script.js" defer></script>
    <link rel="stylesheet" href="source-styles\categories.css">
</head>
<body>
    <?php require_once "source-inc/dbconn.inc.php"; ?>
    <div>
        <div class="flex-container">
            <?php
                $itemsSQL = "SELECT item_id, name, gender, charSize, price, category, type, quantity, image, alt, description FROM items WHERE type = 'Shirt' and category = 'Mens'";
                $result = mysqli_query($conn, $itemsSQL);
        
                while ($row = mysqli_fetch_array($result)){?>
                    <div class="flex-child">
                        <? echo "<img class=\"featured-img\" alt='".$row['alt']."' src='".$row['image']."' />"; ?>
                        <div>
                            <p class="featured-font"><?=$row['name'];?></p>
                        </div>
                        <div>
                            <p class="featured-dollar-symbol">$</p>
                            <p class="featured-price"><?=$row['price'] ?></p>
                        </div>
                    </div>
                <?php 
                }
                mysqli_close($conn);
            ?>      
        </div>
    </div>
</body>
</html>
