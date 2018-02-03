<?php

$search = $searchErr = "";

if($_SERVER["REQUEST_METHOD"]=="POST"){
	
	if(empty($_POST["search"])){
	
	 $searchErr ="Required";
		
	}
	
	else{
		
		$search = $_POST["search"];
	 
	}
	
	
	if($search){
		
		echo "<script>window.location.href='result.php?search=$search';</script>";
		
	}
	
}


?>



<style>
.error{
	color:red;	
}
</style>


<form method="POST" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]);?>">

	<input type="text" name="search" value="<?php echo $search;?>">
	<span class="error"><?php echo $searchErr; ?></span>
	<br>
	<input type="submit" value="search">
	
	
<form>