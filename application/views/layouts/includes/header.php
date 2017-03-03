<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The GamingPlace</title>
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>assets/css/custom.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">The GamingPlace</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.html">Home</a></li>
            <li><a href="register.html">Create Account</a></li>
          </ul>
       <form class="navbar-form navbar-right">
        <div class="form-group">
          <input name="username" type="text" class="form-control" placeholder="Enter Username">
        </div>
        <div class="form-group">
          <input name="password" type="password" class="form-control" placeholder="Enter Password">
        </div>
        <button name="submit" type="submit" class="btn btn-default">Login</button>
      </form>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container">
    <div class="row">
      <div class="col-md-4">
        <?php $this->load->view('layouts/includes/sidebar'); ?>
      </div>
      </div>
      <div class="col-md-8">
        <div class="panel panel-default">
        <div class="panel-heading panel-heading-green">
          <h3 class="panel-title">TheGamesShop</h3>
        </div>