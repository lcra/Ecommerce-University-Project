<!DOCTYPE html>
<html lang="en">
<head>
    <title>UG Assignment 2 - Group 16</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Lukas  Formato | Kieran Mayer | Luke Crawford" />
    <link rel="stylesheet" href="source-styles\contact-us.css">
    <script src="source-scripts/contact.js" defer></script>
</head>
<body>
    <?php require_once "source-inc/dbconn.inc.php"; ?>
    <div>
        <?php require_once "source-inc/menu.inc.php"; ?>         
    </div>

    <form onsubmit="return false;">
        <div class="heading-container">
            <h1 class="contact-heading">CONTACT US</h1>
            <p class="contact-text">Have any questions for us?... We'd love your feedback - and we're always happy to help!
                <br> Reach out to us below.</p>
        </div>
        <div class="contact-container">
            <div class="form">
            <label for="name"></label>First name:<br>
            <input type="text" id="name" name="name" required> <br>
            <label for="email"></label>Email:<br>
            <input type="email" id="email" name="email" required> <br>
            <label for="question"></label>How can we help?<br>
            <textarea id="question" name="question" required> </textarea> <br>
            <input type="submit" value="Send" id="send">
            </div>

            <div class="success">
                <h1>
                Your message has been sent. <br> <br>
                One of our representatives will contact you regarding your question.
                </h1>
            </div>
        </div>
    </form>
</body>
</html>
