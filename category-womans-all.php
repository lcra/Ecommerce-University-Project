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
        <?php require_once "source-inc/menu.inc.php"; ?>         
    </div>
    <div class="align-middle">
        <div class="box-fill">
            <h1 class="whats-new">WOMANS CLOTHING</h1>
        </div>
        <hr width="80%" size="2" color="black" class="hr-line"></hr>
    </div>
    <div>
        <div class="flex-container">
            <?php
                $itemsSQL = "SELECT item_id, name, gender, charSize, price, category, type, quantity, link, image, alt, description FROM items WHERE category = 'Womans'";
                $result = mysqli_query($conn, $itemsSQL);
        
                while ($row = mysqli_fetch_array($result)){?>
                    <div class="flex-child">
                    <a href="<?php echo $row['link']; ?>"><img class="featured-img" src="<?php echo $row['image']; ?>" alt="<?php echo $row['alt']; ?>"></a>
                        <div>
                            <a href="<?=$row['link'];?>" class="featured-font"><?=$row['name'];?></a>
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
