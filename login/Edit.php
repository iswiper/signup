<?php

	$user_id = $_REQUEST["id"];
	
	
	
	include("connections.php");
	
	$get_record = mysqli_query($connections, "SELECT * FROM mytbl WHERE id = '$user_id'" );
	
	while($row_edit = mysqli_fetch_assoc($get_record)){
		
		$db_name = $row_edit["name"];
		$db_address = $row_edit["address"];
		$db_email = $row_edit["email"];
		
	}

?>	
	<form method="POST" action="Update_Rec.php">
	
	
	<input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
	<br>
	<input type="text" name="new_name" value="<?php echo $db_name; ?>">
	<br>
	<input type="text" name="new_address" value="<?php echo $db_address; ?>">
	<br>
	<input type="text" name="new_email" value="<?php echo $db_email; ?>">
	<br>
			
	
	<input type="submit" value="Update">
	
	
	
	</form>


