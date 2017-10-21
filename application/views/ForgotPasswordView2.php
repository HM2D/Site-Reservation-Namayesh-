<!doctype html>

<head>

	<!-- Basics -->
	
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
	
	<?php
      if(validation_errors()!= null)
        echo '<div class="ui error message red">'. validation_errors().'</div>';
    ?>
     <?php
      if(isset($Failed))
        echo '<div class="ui error message red">'.$Failed.'</div>';
    ?>
    <?php
      if(isset($Msg))
        echo '<div class="ui error message green">'.$Msg.'</div>';
    ?>


		<form method="post" action="<?php echo base_url('/index.php/ForgotPassword')?>">
		
		<label for="name">Username:</label>
		
		<input type="name" name="username" placeholder="Username">
		
		
		
		<label for="email">Email:</label>
		
		<input type="name" name="email"  placeholder="Email">
		
		
		<div id="lower">
		
		
		
		<input type="submit" value="Submit">
		
		</div>
		
		</form>
		
	</div>
	
	
	<!-- End Page Content -->
	
</body>

</html>
	
	
	
	
	
		
	