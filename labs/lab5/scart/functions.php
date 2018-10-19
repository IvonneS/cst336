<?php

function displayResults(){
    global $items; 
    if(isset($_SESSION['cart'])){
        echo "<table class = 'table'>";
        foreach ($_SESSION['cart'] as $item){
            echo "<tr>";
            echo "<td><h4>$item</h4></td>";
            echo "</tr>";
            
            //button 
            echo "<form method= 'post'>";
            echo "<input type= 'hidden' name= 'itemName' value= '$itemName'>";
            echo "<input type= 'hidden' name= 'itemId' value= '$itemId'>";
            echo "<input type= 'hidden' name= 'itemImage' value= '$itemImage'>";
            echo "<input type= 'hidden' name= 'itemPrice' value= '$itemPrice'>";
            
            echo "<td><button class= 'btn btn-warning'>Add</td>";
            echo "</form>";
            echo "</tr>";
        }
        echo "</table>";
    }
    if($_POST['itemId'] == $itemId){
        echo '<td><button class = "btn btn-success">Added</button></td>';
    }else{
        echo '<td><button class= "btn btn-warning">Add</button>Add</td>';
    }
}
function displayCart(){
    if(isset($_SESSION['cart'])){
        echo "<table class= 'table'>";
        foreach ($_SESSION['cart'] as $item){
            $itemName = $item['name'];
            $itemPrice = $item['price'];
            $itemImage = $item['image'];
            $itemId = $item['id'];
            $itemQuant = $item['quantity'];
            
            //Display item
            echo "<tr>";
            echo "<td><img src='$itemImage'></td>";
            echo "<td><h4>$itemName</h4></td>";
            echo "<td><h4>$itemPrice</h4></td>";
            echo "<td><h4>$itemQuant</h4></td>";
            echo "</tr>";
            
            echo "<form method= 'post'>";
            echo "<input type= 'hidden' name= 'removeId' value= '$itemId'>";
            echo "<td><input type='text' name='update' class='form-control' placeHolder='$itemQuant'></td>";
            echo "<td><button class= 'btn btn-warning'>Remove</td>";
            echo "</form>";
            echo "</tr>";
        }
        echo "</table>";
    }
}
function displayCartCount(){
    echo count($_SESSION['cart']);
}
    /*if(isset($items)){
        echo "<table class = 'table'>";
        foreach($items as $item){
            
            $itemName = $item['name'];
            $itemPrice = $item['salePrice'];
            $itemImage = $item['thumbnailImage'];
            $itemId = $item['itemId'];
            //display table 
            echo "<tr>";
            echo "<td><img src = '$itemImage'></td>";
            echo "<td><h4>$itemName</h4></td>";
            echo "<td><h4>$itemPrice</h4></td>";
            
            //button 
            echo "<form method= 'post'>";
            echo "<input type= 'hidden' name= 'itemName' value= '$itemName'>";
            echo "<td><button class= 'btn btn-warning'>Add</td>";
            echo "</form>";
            echo "</tr>";
    }
    echo "</table>";
    }*/
    

?>