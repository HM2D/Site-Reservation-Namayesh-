
<div class="container">
    <div class="row">
        <div class="col-sm-9 col-md-10">
        
            <h2>Compose</h2>

            <div class="form-group">
              <p class="text-warning" > <?php echo validation_errors(); ?> </p>
  <form method="post" action="<?php echo base_url('/index.php/Compose');?>">
  <label for="site">Sites:</label>
  <div class="dropdown">
  <button name="site"  class="btn btn-Success dropdown-toggle" style="display:inline-block" type="button" data-toggle="dropdown">Sites
  <span class="caret"></span></button>

  <ul class="dropdown-menu">
    <?php foreach($Site as $row): ?>

    <li value="<?php echo $row['idSite']; ?>"  onclick="dropdown(this.innerHTML);"><?php echo $row['idSite'] . " " . $row['Name']. "  Capacity: " . $row['Capacity'];?></li>
    
    <? endforeach;?>
  </ul>
</div>





 <input id="hiddensite" name="site" style="display:none"> 

<br>
<label for="StartTime">StartTime:</label>
<br>
<input type="datetime-local" name="StartTime">
<br>
<br>
<label for="EndTime">EndTime:</label>
<br>
<input type="datetime-local" name="EndTime">
<br>

<br>
  <label for="title">Title:</label>
  <input type="text" name="title" class="form-control" id="usr">
  <label for="content">Content:</label>
  <textarea class="form-control" name="content" rows="5" id="comment"></textarea>

  <br><br>

  <input type="submit" class="btn btn-primary pull-right" value="Send" >



</form>





</div>





        </div>
    </div>
  </div>
</div>
<script>
function dropdown(value) {
  
  var y = document.getElementsByClassName('btn btn-success dropdown-toggle');
  value[1] = "p";

  value[value.length - 1] = "p";
  
  var aNode = y[0].innerHTML = value + ' <span class="caret"></span>'; 
  var x = document.getElementById('hiddensite');

  //console.log($('hiddensite'));
  $('#hiddensite').val(value.split(" ")[0]);
}
</script>