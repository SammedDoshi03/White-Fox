<?php

    require_once("connection.php");

    if(isset($_POST['submit']))
    {
		$ProductName = $_POST['product_name'];
		$ProductPrice = $_POST['product_price'];
		$ProductQuantity = $_POST['product_quantity'];

		// (Product_Name,Product_Price,Product_Quantity)

		$query = " insert into product(product_name, product_price,product_quantity) values('$ProductName','$ProductPrice','$ProductQuantity')";
		$result = mysqli_query($con,$query);

		if($result)
		{
			header("location:../view.php");
		}
		else
		{
			echo mysqli_error($con);
			echo 'Something Wents Wrong';
		}
	
    }
    else
    {
		header("location:../view.php");
    }



?>