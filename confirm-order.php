<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>UG Assignment 2 - Group 16</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Lukas  Formato | Kieran Mayer | Luke Crawford" />
    <script src="scripts/script.js" defer></script>
    <link rel="stylesheet" href="source-styles/confirm-order.css">
</head>
<body>
    <div>
        <?php require_once "source-inc/menu.inc.php"; ?>         
    </div>
    <?php require_once "source-inc/dbconn.inc.php"; ?>
    
    <div class="payment">
        <div class="form">
        <h2>Enter your details</h2>
        <form action="source-inc/confirm-order.inc.php" method="POST">
        <input 
            type="text" 
            name="credit-card" 
            placeholder="Enter your credit card number"
            required
        >
        <input 
            type="text" 
            name="customer-name" 
            placeholder="Enter your name"
            required
        >
        <input 
            type="text" 
            name="address" 
            placeholder="Enter your email address"
            required
        >
        <input 
            type="submit" 
            id="submit" 
            value="Confirm"
        >
        
    </form>
    </div>
        </div>
    </body>
</html>
