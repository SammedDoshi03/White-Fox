<?php

require_once("connection.php");

if (isset($_POST['update'])) {
    $ProductID = $_GET['product_id'];
    $ProductName = $_POST['product_name'];
    $ProductPrice = $_POST['product_price'];
    $ProductQuantity = $_POST['product_quantity'];

    $query = " update product set product_name = '" . $ProductName . "', product_price='" . $ProductPrice . "',product_quantity='" . $ProductQuantity . "' where product_name='" . $ProductName . "'";
    $result = mysqli_query($con, $query);

    if ($result) {
        header("location:../view.php");
    } else {
        echo ' Something Wents Wrong ';
    }
}
else if (isset($_POST['delete'])) {
  
    $ProductName = $_POST['product_name'];
    $query = " delete from product where product_name = '".$ProductName."'";
    $result = mysqli_query($con,$query);

    if ($result) {
        header("location:../view.php");
    } else {
        echo ' Something Wents Wrong ';
    }
} else {
    header("location:../view.php");
}


?>
