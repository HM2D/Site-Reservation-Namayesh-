<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properties -->
  <title>Forgot Password</title>

  <link rel="stylesheet" href="<?php echo base_url('rassets/semantic-ui/semantic.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('rassets/sematic-ui/semantic.helper.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/main.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/login_forgot.css');?>">



</head>
<body>


  <div class="ui middle aligned center aligned grid">
  <div class="column">
    <h2 class="ui violet header">
      <div class="content login-header">
        Resset Your Password
      </div>
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
    
    </h2>
    <form class="ui large form" action="<?php echo base_url('/index.php/ForgotPassword')?>" method="post">
      <div class="ui segment">
        <div class="field">
          <div class="ui left icon input">
            <i class="user icon"></i>
            <input type="text" name="username" value ="<?php echo set_value('username');?>" placeholder="Username">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="mail icon"></i>
            <input type="email" name="email" value ="<?php echo set_value('email');?>"  placeholder="Email">
          </div>
        </div>
        <button class="ui fluid large submit button" type="submit">Reset</button>
      </div>    

    </form>
  </div>
</div>

  <script type="text/javascript" src="<?php echo base_url('rassets/jquery/jquery.min.js');?>"></script>
  <script type="text/javascript" src="<?php echo base_url('rassets/semantic-ui/semantic.min.js');?>"></script>

</body>
</html>
