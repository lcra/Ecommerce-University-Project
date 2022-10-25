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
    <link rel="stylesheet" href="source-styles/cart.css">
</head>
<body>
    <div>
        <?php require_once "source-inc/menu.inc.php"; ?>         
    </div>
    <?php require_once "source-inc/dbconn.inc.php"; ?>

<div class="cart-container">

<?php


    $total = 0;

    $output = "";

    $output .= "
    <table>
        <tr>
            <th>ITEM NAME</th>
            <th>ITEM PRICE</th>
            <th>ITEM SIZE</th>
            <th>ITEM QUANTITY</th>
            <th>TOTAL ITEM PRICE</th>
        </tr>
    ";

    if(!empty($_SESSION['cart'])){


        foreach($_SESSION['cart'] as $key => $value){
            $output .= "
            <tr>
                <td>".$value['name']."</td>
                <td>$".$value['price']."</td>
                <td>".$value['charSize']."</td>
                <td>".$value['quantity']."</td>
                <td>$".number_format($value['price'] * $value['quantity'])."</td>
                <td>
                    <a href='cart.php?action=remove&item_id=".$value['item_id']."'>
                    <button>Remove</button>
                    </a>
                </td>
            ";

            $total = $total + $value['quantity'] * $value['price'];

        }

        $output .= "
        <tr>
            <td colspan='4'></td>
            <td><b>Total Price: $total</b></td>
            <td>
                <a href='cart.php?action=clearall'>
                <button>Clear All</button>
            </td>
        </tr>
        
        ";

        $output.="
        <tr>
            <td colspan='5'</td>
            <td>
            <a href='confirm-order.php'>
            <button>Confrim Order</button>
            </a>
            </td>
        </tr>
        ";
    }


echo $output;


if(isset($_GET['action'])){
    if($_GET['action'] == "clearall"){
        unset($_SESSION['cart']);
    }
}

if(isset($_GET['action'])){
    if($_GET['action'] == "remove"){
        foreach($_SESSION['cart'] as $key => $value){
            if ($value['item_id'] == $_GET['item_id']){
                unset($_SESSION['cart'][$key]);
            }
        }
    }
}

?>

</div>

</body>
</html>
