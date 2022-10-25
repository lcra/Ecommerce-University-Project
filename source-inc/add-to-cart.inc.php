<?php

session_start();

if(isset($_POST['add_to_cart'])){
    if(isset($_SESSION['cart'])){
        
        $session_array_id = array_column($_SESSION['cart'], "item_id");

        if(!in_array($_GET['item_id'], $session_array_id)){
            $session_array = array(
                'item_id' => $_GET['item_id'],
                'name' => $_POST['name'],
                'price' => $_POST['price'],
                'charSize' => $_POST['charSize'],
                'quantity' => $_POST['quantity']
    
            );
    
            $_SESSION['cart'][] = $session_array;
        }

    }else{
        $session_array = array(
            'item_id' => $_GET['item_id'],
            'name' => $_POST['name'],
            'price' => $_POST['price'],
            'charSize' => $_POST['charSize'],
            'quantity' => $_POST['quantity']

        );

        $_SESSION['cart'][] = $session_array;
    }
}

?>