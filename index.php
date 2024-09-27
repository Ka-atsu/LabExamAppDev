<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles.css"> 
</head>
<body>
    <div class="topNav">
        <h2>Inventory</h2>
        <form action="index.php" method="get" class="rightTopNav">
            <input type="text" id="search" name="search" placeholder="Search" value="<?php echo isset($_GET['search']) ? $_GET['search'] : ''; ?>">
            <button type="submit">Search</button>
        </form>
    </div>
    <div class="container">
        <div class="navlinks">
            <a href="#DashBoard" class="active">DASHBOARD</a>
        </div>
        <section id="DashBoard" class="DashBoardTab">
            <form action="addItem.php" method="POST" class="inventoryForm">
                <h2>Add New Item</h2>  
                <label for="itemName">Item Name:</label>  
                <input type="text" id="itemName" name="itemName" placeholder="Enter item name" required>  
                
                <label for="quantity">Quantity:</label>  
                <input type="number" id="quantity" name="quantity" placeholder="Enter quantity" required min="1">  
                
                <button type="submit">Add Item</button>  
            </form>
            <div class="allItems">
                <?php include 'inventory.php'; ?>
            </div>
        </section>
    </div>
</body>
</html>
