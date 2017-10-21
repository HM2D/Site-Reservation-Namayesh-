<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-3 col-md-2">
            <div class="btn-group">
                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                    Mail <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Mail</a></li>
                    <li><a href="#">Contacts</a></li>
                    <li><a href="#">Tasks</a></li>
                </ul>
            </div>
        </div>
        <div class="col-sm-9 col-md-10">
            <!-- Split button -->
            <div class="btn-group">
                <button type="button" class="btn btn-default">
                    <div class="checkbox" style="margin: 0;">
                        <label>
                            <input type="checkbox">
                        </label>
                    </div>
                </button>
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <span class="caret"></span><span class="sr-only">Toggle Dropdown</span>
                </button>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#">All</a></li>
                    <li><a href="#">None</a></li>
                    <li><a href="#">Read</a></li>
                    <li><a href="#">Unread</a></li>
                    <li><a href="#">Starred</a></li>
                    <li><a href="#">Unstarred</a></li>
                </ul>
            </div>
            <button type="button" class="btn btn-default" data-toggle="tooltip" title="Refresh">
                &nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-refresh"></span>&nbsp;&nbsp;&nbsp;</button>
            <!-- Single button -->
            <div class="btn-group">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    More <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Mark all as read</a></li>
                    <li class="divider"></li>
                    <li class="text-center"><small class="text-muted">Select messages to see more actions</small></li>
                </ul>
            </div>
            <div class="pull-right">
                <span class="text-muted"><b>1</b>–<b>50</b> of <b>160</b></span>
                <div class="btn-group btn-group-sm">
                    <button type="button" class="btn btn-default">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </button>
                    <button type="button" class="btn btn-default">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-sm-3 col-md-2">
            
            <h3>As Manager</h3>
            <ul class="nav nav-pills nav-stacked">
                <li ><a href="#"><span class="badge pull-right">32</span> Unreviewed Requests </a>
                </li>

                <li><a href="#">Approved Requests</a></li>
                <li><a href="#">Declined Requests</a></li>
                <li><a href="#">Subcategories</a></li>
                
                <li><a href="#"><span class="badge pull-right">3</span>Sites</a></li>
              <hr>
              <h3>As Agent</h3>
              
            <li class="active"><a href="#" > <i class="glyphicon glyphicon-edit"></i> Compose Request</a></li>
                <li><a href="#">Sent Requests</a></li>
                <li><a href="#">Pending Requests</a></li>
                <li><a href="#">Declined Requests</a></li>
                
            </ul>
        </div>
        <div class="col-sm-9 col-md-10">
        
            <h2>Compose</h2>
            <div class="form-group">
                <form method="post" action="<?php echo base_url('/index.php/Compose');?>">
  <label for="username">To:</label>
  <input type="text" name="username" class="form-control" id="usr">
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
    </body>
</html>