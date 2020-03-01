<?php
	include "connect.php";
	
	 $name = $_POST['name'];
	 $email = $_POST['email'];
	 // $password = $_POST['password'];
	 // $postal_code = $_POST['postal_code'];
	 // $address = $_POST['address'];
	 // $phone = $_POST['phone'];
	 // $status = $_POST['status'];
	
	$check = mysql_query( "SELECT * FROM `Users` where `Email` = '$email' ", $conn);
	$num_rows = mysql_num_rows($check);
	
	if($num_rows == 0){
		 //$query = mysql_query( "INSERT INTO `Users`(`Name`, `Postal_code`, `Address`, `Phone_no`, `Status` , `Email` , `Password`) VALUES ('$name' ,'$postal_code' , '$address' , '$phone' , '$status' , '$email' , '$password') " , $conn);
		
		$query = mysql_query( "INSERT INTO `Users`(`Email` , `Name`) VALUES ('$email' , '$name' ) " , $conn);
		
		 if($query){
			echo json_encode(array("Message" =>"Successfully inserted the data"));
		}else{
			echo json_encode(array("Message" =>"Not Inserted"));
		}
	}else{
		echo json_encode(array("Message" =>"Email id already registered"));
	}
?>