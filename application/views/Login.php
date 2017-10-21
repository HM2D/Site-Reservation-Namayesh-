<!doctype html>

<head>

	<!-- Basics -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	<title>Login</title>

	<!-- CSS -->
	
	<link rel="stylesheet" href="<?php echo base_url("css/reset.css");?>">
	<link rel="stylesheet" href="<?php echo base_url("css/animate.css");?>">
	<link rel="stylesheet" href="<?php echo base_url("css/styles.css");?>">

	
</head>

	<!-- Main HTML -->
	
<body>
	
	<!-- Begin Page Content -->
	
	<div id="container">
		
		<form method="post" action="<?php echo base_url('/index.php/Login');?>">
			
     <?php
      if(isset($Failed))
        echo '<p class="text-danger  text-center">'.$Failed.'</p>';
    ?>	

		<label for="name">Username:</label>
		
		<input type="name" name="username">
		
		<label for="username">Password:</label>
		
		<p><a href="<?php echo base_url('/index.php/ForgotPassword'); ?>">Forgot your password?</a>
		
		<input type="password" name="password">
		
		<div id="lower">
		
		
		
		<input type="submit" value="Login">
		
		</div>
		
		</form>
		
	</div>
	
	
	<!-- End Page Content -->
	
</body>

</html>
	
	
	
	
	
		
	