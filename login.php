<?php

	include "connect.php";
	
	header ('Content-type: application/json');
	
	// $email = $_POST['email'];
	// $password = $_POST['password'];
	
	$query = mysql_query("SELECT * FROM `Users` where `Email` = '$email' AND `Password` = '$password' ", $conn);
	$num_rows = mysql_num_rows($query);
	
	if ($num_rows != 0){
	//	echo "login succesful";
		
		$row = mysql_fetch_array($query);
	//	while($row){
		
		$response = array('Email_ID'=>$row['Email'],'Name'=>$row['Name'],'Postal_code'=>$row['Postal_code'],'Address'=>$row['Address'],'Phone_No'=>$row['Phone_no'],);
		echo json_encode($response);
		
	//	}
		
	}else{
		$msg = array('Message' => "Your Password and Email-ID does not match");
		echo json_encode($msg);
	}
	//echo $name;
	
	//echo json_encode($name);
	
?>