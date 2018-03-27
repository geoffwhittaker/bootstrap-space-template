<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Bootstrap Space theme</title>
  <meta name="description" content="Space theme">
  <meta name="author" content="Geoffrey Whittaker">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="scripts/bootstrap.min.js"></script>
<script src="scripts/bootstrap.tab.js"></script>
<script src="scripts/scripts.js"></script>

  <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
  <![endif]-->
</head>

<body>
<div class="container">
     <header class="row">
        <div class="col-lg-12">
    <!-- header image ===========================================================-->
         <div id="headerImage"> </div>

         <!-- Start naviagation ===========================================================-->
        <nav class="navbar navbar-expand-lg navbar">
          <a class="navbar-brand" href="#">Space news</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
           aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><i class="material-icons" style="font-size:30px">menu</i></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-item nav-link<?php if($page=='home'){echo ' navactive';}?>" 
              href="index.php"><i class="material-icons" style="font-size:12px">brightness_2</i> Home </a>
              <a class="nav-item nav-link <?php if($page=='features'){echo ' navactive';}?>" href="features.php"> <i class="material-icons" style="font-size:12px">camera</i> News & Features</a>
              <a class="nav-item nav-link <?php if($page=='portfolio'){echo ' navactive';}?>" href="portfolio.php"><i class="material-icons" style="font-size:12px">camera</i>  Portfolio</a>
              <a class="nav-item nav-link<?php if($page=='gallery'){echo ' navactive';}?>" 
              href="gallery.php"><i class="material-icons" style="font-size:12px">camera</i> Gallery</a>
              <a class="nav-item nav-link" href="#"><i class="material-icons" style="font-size:12px">camera</i> Slide show</a>
            </div>
          </div>
        </nav>
                 <!-- end naviagation ===========================================================-->
     </div>
    </header>