<?php

$username = $password = "";

$username_err = $password_err = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
	if(empty($_POST["email"])){
	$username = "Email is Required";
	}
	else{
		$username = $_POST["email"];
	}
	
	if(empty($_POST["password"])){
	$password_err = "Password is Required";
	}
	else{
		$password = $_POST["password"];
	}
}

	
	
	if($username && $password){
		include("connections.php");
		$check_email = mysqli_query($connections, "SELECT * FROM customertbl WHERE username = '$username'");
		$check_email_row = mysqli_num_rows($check_email);		
		
			if($check_email_row > 0){
					while($row = mysqli_fetch_assoc($check_email)){
						
						$user_id = $row["id"];
						$db_password = $row["password"];
						$db_account_type = $row["account_type"];				
								
								if($password == $db_password){
										
										session_start();
										$_SESSION["id"] = $user_id; 
										
										if($db_account_type == "1"){	
											echo"<script>window.location.href='admin';</script>";
										}
										else{
											echo"<script>window.location.href='user';</script>";
										}	
								}
								
								else{
									$password_err = "Password is incorect";
								}
				
			}	
				
	}
	
	else{
			$email_err = "Email is incorect";
	}
}
	
?>