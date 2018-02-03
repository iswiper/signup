<?php include('login_session.php');?>
<?php include('validation.php');?>
<!DOCTYPE html>
  <meta charset="UTF-8">
  <title>Login Form</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="design/css/style.css">

  



  <div class="form">
      
      
      
      <div id="login">   
          <h1>Welcome Back!</h1>
          
          <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
          
            <div class="field-wrap">
            
            <input type="text" placeholder="Username" name="username">
			<br>
			<span class="error"><?=$username_err?></span>
			</div>
          
          <div class="field-wrap">
            <input type="password" placeholder="Password" name="password">
			<br>
			<span class="erorr"><?=$password_err?></span>
          </div>
          
          <p class="forgot"><a href="#">Forgot Password?</a></p>
          
          <button type="submit" value="login" class="button button-block"/>Log In</button>
          
          </form>

      </div>
		
   

  </div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script  src="design/js/index.js"></script>

