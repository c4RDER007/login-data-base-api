<?php
$username = filter_input(INPUT_POST, 'username');
$password = filter_input(input_post, 'password');
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "sign up"
if(!empty($username)){
	if(!empty($password)){


	}
	else{
		echo "password should not be empty";
		die();
	}


}


else{
	echo "username should not be empty";
	die();
}
	


	$conn = mysql_connect("localhost","root","");
	if (!$conn) {
    die("Connection failed");
	}//else {echo "connected" ;}

	$db = mysql_select_db("tache_task",$conn);
	if (!$db) {
    die("Selecting database failed ");
	}
	//else {echo "selected";} 
?>