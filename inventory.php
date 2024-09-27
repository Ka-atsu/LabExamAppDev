<?php
session_start();

if(!isset($_SESSION['inventory'])){
    $_SESSION['inventory'] = [];
}

$searchQuery = isset($_GET['search']) ? trim($_GET['search']) : '';

$itemsHtml = '';
$productFound = false;
foreach($_SESSION['inventory'] as $item){
    if (empty($searchQuery) || stripos($item['name'], $searchQuery) !== false) {
        $itemsHtml .= "<tr>";
        $itemsHtml .= "<td>" . $item['name'] . "</td>";
        $itemsHtml .= "<td>" . $item['quantity'] . "</td>";
        $itemsHtml .= "</tr>";
        $productFound = true;
    }
}
?>  

<table>  
    <thead>  
        <tr>  
            <th>Item Name</th>  
            <th>Quantity</th>  
        </tr>  
    </thead>  
    <tbody>  
    <?php 
        if ($itemsHtml) {
            echo $itemsHtml; 
        } else {
            echo "<tr><td colspan='2'>Product not found</td></tr>"; 
        }
        ?>  
    </tbody>  
</table> 