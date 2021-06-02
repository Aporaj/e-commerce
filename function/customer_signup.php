<?php

	// Signup page for the customer

	include('db/dbconn.php');
	if (isset($_POST['signup']))
{
	$firstname=  htmlspecialchars(htmlentities(trim($_POST['firstname']))); 
	$mi= htmlspecialchars(htmlentities(trim($_POST['mi'])));
	$lastname= htmlspecialchars(htmlentities(trim( $_POST['lastname'])));
	$address=htmlspecialchars(htmlentities(trim($_POST['address']))) ;
	$country=htmlspecialchars(htmlentities(trim( $_POST['country'])));
	$zipcode= htmlspecialchars(htmlentities(trim($_POST['zipcode'])));	
	$mobile= htmlspecialchars(htmlentities(trim($_POST['mobile'])));
	$email= htmlspecialchars(htmlentities(trim($_POST['email'])));
	$password= htmlspecialchars(htmlentities($_POST['password']));

	// $pre_code = "TYFTS";
	// $code = '123489544894390342598034';
	// $code1 = str_shuffle($code);
	// $code2 = substr($code1,0,5);
	// $card_no = $pre_code.$code2;
	// $issue_date = date("M D,Y");
	// $total_money = 0;
	// $money_received = 0;
	// $money_spent = 0;

	



	$check = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM `customer` WHERE `email` = '$email'"));
		if($check == 1)
			{
				echo "<script>alert('EMAIL ALREADY EXIST')</script>";	 
			}
			else
				{
					mysqli_query ($conn, "INSERT INTO customer (firstname, mi, lastname, address, country, zipcode, mobile, email, password)
					VALUES ('$firstname', '$mi', '$lastname', '$address', '$country', '$zipcode', '$mobile', '$email', '$password')") 
					or die(mysqli_error());	

				// $check = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM `customer` WHERE `email` = '$email'"));

				// $fetch = mysqli_fetch_array ($check);

				// $id = int() $fetch['customerid'];



				// 	mysqli_query ($conn, "INSERT INTO wallet (customer_id, total_money, amount_spent, issue_date, money_recieved, card)
				// 	VALUES ('$id', '$mi', '$lastname', '$total_money', '$money_spent', '$issue_date', '$money_received', '$card_no')") 
				// 	or die(mysqli_error());


					echo "<script>alert('Account is successfully Created')</script>";
				}			
}
?>