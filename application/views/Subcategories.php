

<div class="container">
    <div class="row">
        <div class="col-sm-9 col-md-10">
        
         <div class="tab-content">
                <div class="tab-pane fade in active" id="home">
                    <div class="list-group">
                        <!-- Trigger the modal with a button -->

<input type="Button" href="#" style = "outline:none;"class="btn btn-Primary" data-toggle="modal" value="Add+"  data-target="#AddModal">
<!-- Modal -->
<div id="AddModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
 <form method="post" action="<?php echo base_url('/index.php/ActionController/CreateUser/'.rtrim(base64_encode(base_url('/index.php/'. uri_string())), '=')); ?> ">
        
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title text-primary">Add A Subcategory</h4>
      </div>
      <div class="modal-body hideOverflow"  >
   

      <label for="FullName" class="text">Full Name:</label>
  <input type="text" name="FullName" class="form-control" >
 <br>
      <label for="Email" class="text">Email:</label>
  <input type="text" name="Email" class="form-control" >
<br><br>
<input id="hiddensite" name="Role" style="display:none"> 

<div class="dropdown">     
<button name="Role"  id="rolebutton" class="btn btn-Success dropdown-toggle" style="display:inline-block" type="button" data-toggle="dropdown">Roles
  <span class="caret"></span></button>

    <ul class="dropdown-menu">
    <?php foreach($Roles as $role): ?>

    <li value="<?php echo $role['idRole']; ?>"  onclick="dropdown(this.innerHTML);"><?php echo $role['idRole']. " " . $role['RoleName'];?></li>
    
    <? endforeach;?>
  </ul>
</div>
 <br><br>



      </div>
      <div class="modal-footer">

        
        <button type="submit" class="btn btn-Primary" name="submitButton" value="" >Submit</button></form>
      
       </div>
    </div>

  </div>
</div>
<br><br>

                        <?php 
$i=0;
                        if(isset($Reqs)){ foreach($Reqs as $row): 
                            ?>

                            <a href="#" style = "outline:none;"class="list-group-item text-primary" data-toggle="modal"  data-target="#">
                            
                            <span class="name" style="min-width: 120px;
                                display: inline-block;"><? echo $row['Username'] ?></span> <span class=""><? echo $row['FullName'] ?></span>
                             <input type="Button" href="#" style = "outline:none;"class="btn-xs  btn-danger pull-right" value="Delete" data-toggle="modal"  data-target="#myModal<?php echo $i;?>">
                            

                          </a>

                           

<!-- Modal -->
<div id="myModal<?php echo $i; $i++;?>" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="text-primary pull-left"><?php echo $row['Username'];?></h4><br><br><br>
         <p class="text-primary pull-left"><?php echo "<b>Name:  </b>" ?></p><p class="text pull-left">&nbsp</p><p class="text-default pull-left"><?php echo " ". $row['FullName']; ?></p><br><br>
        
       <p class="text-primary pull-left"><?php echo "<b>Email:  </b>" ?>&nbsp</p><p class="text-default pull-left"><?php echo $row['Email']; ?></span></p>
       <br><br> 
        
       
        <p class="text-primary pull-left"><?php echo "<b>Role:  </b>" ?>&nbsp</p><p class="text-default pull-left"><?php echo $row['RoleName']; ?></span></p>
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-footer">

        
         <form method="post" action="<?php echo base_url('/index.php/ActionController/DeleteSubcategory/'.rtrim(base64_encode(base_url('/index.php/'. uri_string())), '=')); ?> ">
        <p class="text-danger text pull-left">Are You Sure You Want To Delete?</p>
        <button type="submit" class="btn btn-danger" name="deleteButton" value="<?php echo $row['UserID']; ?>" >Delete</button></form>
      
       </div>
    </div>

  </div>
</div>

                            <?php endforeach;}else 
                            echo '<h1 class=" text-primary" style="text-align:center">You Don'."'".'t Have Anything Here!</h1> ';?>

                    </div>
                </div>
                </div>
        </div>
    </div>
  </div>
</div>

<script>
function dropdown(value) {
  
  var y = document.getElementById('rolebutton');
  value[1] = "p";


  value[value.length - 1] = "p";
  
  var aNode = y.innerHTML = value + ' <span class="caret"></span>'; 
  var x = document.getElementById('hiddensite');

  //console.log($('hiddensite'));
  $('#hiddensite').val(value.split(" ")[0]);
}
</script>
