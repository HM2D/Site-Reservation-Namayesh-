

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
                            <a href="#" style = "outline:none;"class="list-group-item text-primary" >
                             
                            <span class="name" style=";
                                display: inline-block;"><? echo $row['Name'] ?></span>&nbsp&nbsp<span class="text-primary">Capacity: </span> <span class=""><? echo $row['Capacity'] ?></span>&nbsp&nbsp<span class="Text-primary">Last Owner:</span>&nbsp<span><?php echo $row['fullname']; ?></span>
                          
<!-- Drop down -->

<div class="dropdown pull-right" > 

<form method="post" action="<?php echo base_url('/index.php/ActionController/GiveSite/'.rtrim(base64_encode(base_url('/index.php/'. uri_string())), '=')); ?> ">    
<button name="Role"  id="Subbutton<?php echo $row['idSite'];?>" class="btn-xs btn-Success dropdown-toggle" style="display:inline-block" type="button" data-toggle="dropdown">Subcategories
  <span class="caret"></span></button>

    <ul class="dropdown-menu">
    <?php foreach($Subcategories as $subs): ?>
    <?php if($subs['Role'] != 5){ ?> 
    <li value="<?php echo $row['idSite']; ?>"  onclick="dropdown(this.innerHTML,this.value);"><?php echo $subs['UserID']. " " . $subs['Username'];?></li>
    
    <?} endforeach;?>
  </ul>


<input type="text" name="idOfUser"  id="hiddenSub<?php echo $row['idSite'];?>" style="display:none" >

  <button type="submit" class="btn-xs btn-success" name="addSubButton" value="<?php echo $row['idSite'];?>" >Add To User</button>
</form>

</div>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
           <div class="pull-right" style="margin-right:20px"> <input type="date"  id="dateOfSite<?php echo $i;?>">&nbsp<input  class="btn-xs btn-primary" type="button" data-toggle="modal" onClick="getWantedSchedule('<?php echo $i;?>')"  data-target="#myModal<?php echo $i;?>" value="Show"> </div>           
                           
                            </a>
                           

                           

<!-- Modal -->
<div id="myModal<?php echo $i; ?>" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="text-primary"><?echo $row['Name']; ?></h4>
        </div>
      <div class="modal-body hideOverflow"  >
        

        <?php foreach($siteSchedule as $schedule):
        if($schedule['site'] == $row['idSite']){ ?>
        <div class="Schedule<?php echo $i;?>"><span class="text-primary">From: </span><span ><?php echo $schedule['StartTime']."  ";?></span><span class="text-primary">Till: </span><span><?php echo $schedule['EndTime']."  "; ?></span><span class="text-primary"> By: </span><span><?php echo $schedule['fullname'];?></span> <hr></div>
   <?php  } endforeach; ?>
      </div>
      <div class="modal-footer">

        
        
       </div>
    </div>

  </div>
</div>

                            <?php $i++; endforeach;}else 
                            echo '<h1 class=" text-primary" style="text-align:center">You Don'."'".'t Have Anything Here!</h1> ';?>

                    </div>
                </div>
                
            </div>
        </div>
    </div>
  </div>
</div>

<script>
function getWantedSchedule(id){

  var wantedDate = $('#dateOfSite'.concat(id)).val();
  console.log(wantedDate);
  //var StartTime = document.getElementsByClassName("StartTime"+id);
//  console.log(StartTime[);

var StartTime = $('.Schedule'+id);
console.log(StartTime[0].childNodes[1].innerHTML.split(" ")[0]);
for(i=0;i<StartTime.length;i++){
StartTime[i].style.display = "none";

}

for(i=0;i<StartTime.length;i++){
  if(StartTime[i].childNodes[1].innerHTML.split(" ")[0] == wantedDate)
    StartTime[i].style.display = "block";
}

}

</script>

<script>
function dropdown(value,value2) {
  console.log(value2);
  var y = document.getElementById('Subbutton'+value2);
  value[1] = "p";


  value[value.length - 1] = "p";
  
  var aNode = y.innerHTML = value + ' <span class="caret"></span>'; 

  //console.log($('hiddensite'));
  $('#hiddenSub'+value2).val(value.split(" ")[0]);
  console.log($('#hiddenSub'+value2).val());
}
</script>
