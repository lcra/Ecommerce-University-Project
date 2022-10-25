<!DOCTYPE html>
<html lang="en">
<head>
    <title>UG Assignment 2 - Group 16</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Lukas  Formato | Kieran Mayer | Luke Crawford" />
    <script src="scripts/script.js" defer></script>
    <link rel="stylesheet" href="source-styles/menu.css">
</head>
<body>

  <?php require_once "source-inc/header-notice.inc.php"; ?>

  <nav id='menu'>
    <input type='checkbox' id='responsive-menu' onclick='updatemenu()'><label></label>
    <ul>
      <li><a href='http://localhost/group-16/'>HOME</a></li>
      <li><a class='dropdown-arrow' href='category-mens-all.php'>MENS</a>
        <ul class='sub-menus'>
          <li><a href='category-mens-jackets.php'>JACKETS</a></li>
          <li><a href='category-mens-jeans.php'>JEANS</a></li>
          <li><a href='category-mens-shirts.php'>SHIRTS</a></li>
        </ul>
      </li>
      <li><a class='dropdown-arrow' href='category-womans-all.php'>WOMANS</a>
        <ul class='sub-menus'>
          <li><a href='category-womans-jackets.php'>JACKETS</a></li>
          <li><a href='category-womans-jeans.php'>JEANS</a></li>
          <li><a href='category-womans-shirts.php'>SHIRTS</a></li>
        </ul>
      </li>
      <li><a href='about.php'>ABOUT US</a></li>
      <li><a href='contact-us.php'>CONTACT US</a></li>
    </ul>
  </nav>

  <?php require_once "source-inc/header-logo.inc.php"; ?>
  <?php require_once "source-inc/header-logo-cart.inc.php"; ?>
  
</body>
</html>