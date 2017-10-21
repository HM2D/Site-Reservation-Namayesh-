

<div class="container">
    <div class="row">
        <div class="col-sm-9 col-md-10">
        
         <div class="tab-content">
                <div class="tab-pane fade in active" id="home">
                    <div class="list-group">
                        <!-- Trigger the modal with a button -->


                        <?php 
$i=0;
                        if(isset($Reqs)){ foreach($Reqs as $row): 
                            ?>
                            <a href="#" style = "outline:none;"class="list-group-item text-primary" data-toggle="modal"  data-target="#myModal<?php echo $i;?>">
                             
                            <span class="name" style="min-width: 120px;
                                display: inline-block;"><? echo $row['sname'] ?></span> <span class=""><? echo $row['Title'] ?></span>
                            <span class="text-muted" style="font-size: 11px;">-<? echo substr($row['Content'], 0, 20);?></span>
                            
<span class="badge " style="display:inline-block"><? echo date('F d , H:i', strtotime($row['SentDateTime'])); ?></span> <span class="pull-right">
                            <?php if($row['Status']==0){echo "<p class='text-default  pull-left' style='display: inline-block; min-width: 120px;'>Pending</p>"; }
                            else if($row['Status']==2){echo "<p class='text-success  pull-left' style='display: inline-block; min-width: 120px;'>Approved</p>";}
                            else if($row['Status'] == 1){ echo "<p class='text-danger  pull-left' style='display: inline-block; min-width: 120px;'>Declined</p>";}?>
                                </span></span></a>

<!-- Modal -->
<div id="myModal<?php echo $i; $i++;?>" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="text-primary pull-left"><?php echo $row['Title'];?></h4><br><br><br>
         <p class="text-primary pull-left"><?php echo "<b>From:  </b>" ?></p><p class="text pull-left">&nbsp</p><p class="text-default pull-left"><?php echo " ". $row['sname']; ?></p><br><br>
        
       <p class="text-primary pull-left"><?php echo "<b>Requested Site:  </b>" ?>&nbsp</p><p class="text-default pull-left"><?php echo $row['Name']; ?></span></p>
       <br><br> 
        <p class="text-primary pull-left"><?php echo "<b>Start Time:  </b>" ?>&nbsp</p>&nbsp<p class="text-default pull-left"><?php echo date('F d , H:i', strtotime($row['StartTime']));  ?></span></p>
       <br> <br><p class="text-primary pull-left"><?php echo "<b>End Time:  </b>" ?>&nbsp</p>&nbsp<p class="text-default pull-left"><?php echo date('F d , H:i', strtotime($row['EndTime'])); ?></span></p>
        
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body hideOverflow"  >
        <?php echo $row['Content']; ?>

      </div>
      <div class="modal-footer">

        <p class="text-default pull-left"><span class="badge badge-danger"><?php echo date('F d , H:i', strtotime($row['SentDateTime'])); ?></span></p>
         <form method="post" action="<?php echo base_url('/index.php/ActionController/DeclineReq/'.rtrim(base64_encode(base_url('/index.php/'. uri_string())), '=')); ?> ">
        <button type="submit" class="btn btn-danger" name="DeclineButton" value="<?php echo $row['idRequests']; ?>" >Decline</button></form>
      <form method="post" action="<?php echo base_url('/index.php/ActionController/ApproveReq/'.rtrim(base64_encode(base_url('/index.php/'. uri_string())), '=')); ?> ">
      <button type="submit" class="btn btn-success" name="ApproveButton" value="<?php echo $row['SenderID']."/".$row['StartTime']."/".$row['EndTime']."/".$row['SiteID']."/".$row['idRequests']; ?>" >Approve</button></form>
      
       </div>
    </div>

  </div>
</div>

                            <?php endforeach;}else 
                            echo '<h1 class=" text-primary" style="text-align:center">You Don'."'".'t Have Anything Here!</h1> ';?>

                    </div>
                </div>
                <div class="tab-pane fade in" id="profile">
                    <div class="list-group">
                        <div class="list-group-item">
                            <span class="text-center">This tab is empty.</span>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade in" id="messages">
                    ...</div>
                <div class="tab-pane fade in" id="settings">
                    This tab is empty.</div>
            </div>
        </div>
    </div>
  </div>
</div>
