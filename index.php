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
    <?php require_once "source-inc/dbconn.inc.php"; ?>
    <div>
        <?php require_once "source-inc/menu.inc.php"; ?>         
    </div>
    <div>
        <?php require_once "source-inc/slider.inc.php"; ?>
    </div>
    <div>
        <?php require_once "source-content/whats-new.php"; ?>
        <?php require_once "source-content/on-sale.php"; ?>
    </div> 
</body>
</html>
