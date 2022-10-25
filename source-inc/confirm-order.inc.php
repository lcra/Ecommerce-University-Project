<?php
    require_once "dbconn.inc.php";
    require_once "add-to-cart.inc.php";
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);



    // ~~~~~ trying to iterate through the session~~~~~~

    // if (isset($_POST["credit-card"], $_POST["customer-name"], $_POST["address"])){
    //     $testVar = $_SESSION['cart'];

    //     foreach($_SESSION['cart'] as $key => $value){
    //                 $sql = "INSERT INTO Customer(creditCard, customer_name, address, item_id) VALUES(?, ?, ?, ?);";
    //     $statement = mysqli_stmt_init($conn);
    //     mysqli_stmt_prepare($statement, $sql);
    //     mysqli_stmt_bind_param($statement, 'issi', htmlspecialchars($_POST["credit-card"]), htmlspecialchars($_POST["customer-name"]), htmlspecialchars($_POST["address"]), $testVar);      
    //     if (mysqli_stmt_execute($statement)){
    //         header("location: ../index.php");
    //     }
    //     mysqli_close($conn);

    //     }
    //     }


//      ~~~ this is the working code for uploading the customer info ~~~

        if (isset($_POST["credit-card"], $_POST["customer-name"], $_POST["address"])){
            $sql = "INSERT INTO Customer(creditCard, customer_name, address) VALUES(?, ?, ?);";
            $statement = mysqli_stmt_init($conn);
            mysqli_stmt_prepare($statement, $sql);
            mysqli_stmt_bind_param($statement, 'iss', htmlspecialchars($_POST["credit-card"]), htmlspecialchars($_POST["customer-name"]), htmlspecialchars($_POST["address"]));      
            if (mysqli_stmt_execute($statement)){
                header("location: ../index.php");
            }
            mysqli_close($conn);

        }




  


?>