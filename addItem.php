<?php
session_start();

if(!isset($_SESSION['inventory'])){
    $_SESSION['inventory'] = [];
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $itemName = trim($_POST['itemName']);
    $quantity = intval($_POST['quantity']);  

    $itemExist = false; 
    foreach($_SESSION['inventory'] as $item){
        if(strcasecmp($item['name'], $itemName) == 0){
            $itemExist = true; 
            break;
        }
    }

    if(!$itemExist && !empty($itemName) && $quantity > 0){
        $_SESSION['inventory'][] = ['name' => $itemName, 'quantity' => $quantity];
    }
}
header("Location: index.php");  
exit();  
?>
