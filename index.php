<?php

include "bootstrap.php";

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Demo-Glance">
    <link rel="icon" href="<?=$theme->img('favicon.ico')?>">

    <title>Theme Light</title>

    
    <!-- Bootstrap core CSS -->
    <link href="<?=$theme->enqueue('assets/bootstrap-3.3.6/css/bootstrap.min.css')?>" rel="stylesheet">
    <?php $theme->css();?>
    
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug --
    <link href="../css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template general--
    <link href="../css/general.css" rel="stylesheet">
    
    <!-- Custom styles for this template --
    <link href="../css/dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="<?=$theme->enqueue('assets/ie-emulation-modes-warning.js')?>"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            <a class="navbar-brand" href="#"><img class="logo" src="<?=$theme->img('logo')?>"/> <span>Theme Light</span></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><i class="glyphicon glyphicon-user"></i> Profile</a></li>
            <li><a href="#"><i class="glyphicon glyphicon-question-sign"></i> Help</a></li>
          </ul>
          <form class="navbar-form navbar-left">
              <div class="input-group">
                <input type="text" class="form-control search" placeholder="Any question?">
                <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
              </div>
          </form>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div id="main-sidebar" class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#"><i class="glyphicon glyphicon-dashboard"></i> Dashboard<span class="sr-only">(current)</span></a></li>
            <li><a href="#"><i class="glyphicon glyphicon-user"></i> Users</a></li>
            <li><a href="#"><i class="glyphicon glyphicon-upload"></i> Uploads</a></li>
            <li><a href="#"><i class="glyphicon glyphicon-stats"></i> Analytics</a></li>
            <li><a href="#"><i class="glyphicon glyphicon-cog"></i> Settings</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Dashboard</h1>
          <h2 class="sub-header">User access</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Code</th>
                  <th>User</th>
                  <th>Login</th>
                  <th>Logout</th>
                </tr>
              </thead>
              <tbody>
                  
                <tr>
                  <td>185628</td>
                  <td>Anne Ford</td>
                  <td>2016-01-08  2 min ago</td>
                  <td>online</td>
                </tr>
                
                <tr>
                  <td>185629</td>
                  <td>Jack Shephard</td>
                  <td>2016-01-08 1 h 24 min ago</td>
                  <td>2016-01-08 15 min ago</td>
                </tr>
                
                <tr>
                  <td>185630</td>
                  <td>Alice Lindelof</td>
                  <td>2016-01-08 1 h 3 min ago</td>
                  <td>online</td>
                </tr>
                
                <tr>
                  <td>185631</td>
                  <td>John Locke</td>
                  <td>2016-01-08 46 min ago</td>
                  <td>2016-01-08 13 min ago</td>
                </tr>
                
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?=$theme->enqueue('assets/jquery/jquery.min-1.11.3.js')?>"></script>
    <script>window.jQuery || document.write('<script src="<?=$theme->enqueue('assets/jquery/jquery.min-1.11.3.js')?>"><\/script>')</script>
    <script src="<?=$theme->enqueue('assets/bootstrap-3.3.6/js/bootstrap.min.js')?>"></script>
    
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="<?=$theme->enqueue('assets/holder.min.js')?>"></script>
    
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?=$theme->enqueue('assets/ie10-viewport-bug-workaround.js')?>"></script>
    
    <!-- Begin scripts current page -->
    <?=$theme->js(array('main', 'home'))?>
    <!-- End scripts current page -->
    
  </body>
</html>

