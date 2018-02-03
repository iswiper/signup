<?php

include("connections.php");

$name = $address = $email = $password = $cpassword = "";
$name_err = $address_err = $email_err = $password_err = $cpassword_err = $cpassword_erre = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		if(empty($_POST["name"])){
				$name_err= "Name is Required";
		}
		else{
			$name = $_POST["name"];
		}
		
		
		if(empty($_POST["address"])){
				$address_err= "Address is Required";
		}
		else{
			$address = $_POST["address"];
		}
		
		
		if(empty($_POST["email"])){
				$email_err= "email is Required";
		}
		else{
			$email = $_POST["email"];
		}
		
		
		if(empty($_POST["password"])){
			$password_err = "Password is Required";
		}
		else{
			$password = $_POST["password"];
		}
		
		if(empty($_POST["cpassword"])){
			$cpassword_err = "Confirm Password is Required";
		}
		else{
			$cpassword = $_POST["cpassword"];
		}
		
		
		
	
		if($name && $address && $email && $password && $cpassword){

		$check_email = mysqli_query($connections,"SELECT * FROM mytbl Where email= '$email'");
		$check_email_row = mysqli_num_rows($check_email);
		
		if($check_email_row > 0){	
			$email_err = "Email is Already Registered";
		}
		else{
			
			$query = mysqli_query($connections, "INSERT INTO mytbl(name,address,email,password,account_type)
			
			VALUES('$name','$address','$email','$cpassword','2')");
			
			echo "<script language = 'javascript'>alert('New Record has been Added')</script>";
			echo "<script language>window.location.href='Index.php';</script>";
		}
		
	
		}
}

?>

<style>
.error{
		color:red;
}
</style>

<br>
<?php include("nav.php");?>
<br>
<br>


<form method = "POST" action = "<?php htmlspecialchars("PHP_SELF"); ?>">

Name:<input type="text" name="name" value="<?php echo $name ?>"> <br>
<span class="error"><?php echo $name_err; ?></span><br>

Address:<input type="text" name="address" value="<?php echo $address ?>"> <br>
<span class="error"><?php echo $address_err; ?></span><br>


Email:<input type="text" name="email" value="<?php echo $email ?>"> <br>
<span class="error"><?php echo $email_err; ?></span><br>

Password:<input type="password" name="password" value="<?php echo $password ?>"> <br>
<span class="error"><?php echo $password_err; ?></span><br>

Confirm Password:<input type="password" name="cpassword" value="<?php echo $cpassword ?>"> <br>
<span class="error"><?php echo $cpassword_err; ?></span><br>


<input type="submit" value="submit"/> <br>



</form>


<hr>	

<?php

	
	
	echo "<table border = '1' width='50%'>";
	echo "<tr>
		<td>Name</td>
		<td>Address</td>
		<td>Email</td>
		
		<td>Option</td>
		
		
	
	</tr>";
	
	
	$view_query = mysqli_query($connections, "SELECT * FROM mytbl");
	
	while($row = mysqli_fetch_assoc($view_query)){
		
		$user_id = $row["id"];
		
		$db_name = $row["name"];
		$db_address = $row["address"];
		$db_email = $row["email"];
		
		echo"<tr>
		<td>$db_name</td>
		<td>$db_address</td>
		<td>$db_email</td>
		
		
		<td>
		<a href='Edit.php?id=$user_id'>Update</a>
		&nbsp;
		<a href='ConfirmDelete.php?id=$user_id'>Delete</a>
		</td>
		
		</tr>";
	}

	
	echo "<table>";
	
		

?>