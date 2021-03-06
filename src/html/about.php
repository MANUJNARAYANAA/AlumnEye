<?php

require('../PHP/connectFordB.php');
if(!isset($_SESSION['username'])){
  header('Location: http://localhost/INTP_project/Alumneye/src/html/index.html'); 
} 

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" type="text/css" href="../css/about.css">
    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!--Font Awesome CDN-->
    <script src="https://kit.fontawesome.com/78a1f04c92.js" crossorigin="anonymous"></script>
    <!--AOS CSS-->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!--Leaflet-->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
    integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
    crossorigin=""/>
    <!--Leaflet Script-->
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
    integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
    crossorigin=""></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
        <a class="navbar-brand" href="./homePage.html" style="font-size: xx-large;">AlumnEye</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="./homePage.html"><i class="fas fa-home"></i> Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="./about.html"><i class="fas fa-info-circle"></i> About</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="./contact.html"><i class="fas fa-address-book"></i> Contact Us</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#"><i class="fas fa-user-friends"></i> My Network</a>
            </li>
            <li class="nav-item dropdown active">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-user-circle"></i> Profile
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="./profile.html">View Profile</a>
                  <a class="dropdown-item" href="#">Settings</a>
                  <a class="dropdown-item" href="./index.html">Sign Out</a>
                </div>
              </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-primary my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
          </form>
        </div>
    </nav>
<!--The Following tag is use to add Image -->
    <div class="img-college">

           
   
 </div>

    <!--PCE Jumbotron-->
    <div class="jumbotron" style="background-color: #E4EDF6;">
      <h1 class="h1 font-weight-bold text-center mb-3">Pillai College of Engineering</h1>
      <p class="lead">The idea behind AlumnEye is to bridge the gap between the Alumni and the students currently pursuing their degree in 
        Pillai College of Engineering. <br>
        This AlumnEye them on one platform where they can share their ideas and explore the current technologies in industries, which in 
        turn makes the student industry ready. <br><br>
        This web app allows students to interact with their alumni. 
        The user is allowed to sign up to a free account to proceed with the service after which they can set up their profile by providing 
        their personal information. <br>
        Once this above mentioned procedure is completed, the user will be able to post their questions and also view and interact with the 
        questions posted by other users. <br>
      </p>
      <hr class="my-4">
      <p>For other exciting announcements, check our college site.</p>
      <a class="btn btn-primary btn-lg" href="#" role="button">PCE</a>

    </div>
    <div class="img-college-2">

           
   
    </div>


 <br><br>

    


    <!--Cards with AOS Effect-->
    <div class="container">
      <!--Card Deck-->
      <div class="card-deck">
        <div class="card mb-3" data-aos="flip-up" data-aos-duration="500"  data-aos-easing="ease-in-out" data-aos-anchor-placement="center-center">
          <div class="card-body">
            <h5 class="card-title font-weight-bold text-center">Event-1</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
          </div>
        </div>
        <div class="card mb-3" data-aos="flip-up" data-aos-duration="500"  data-aos-easing="ease-in-out" data-aos-anchor-placement="center-center">
          <div class="card-body">
            <h5 class="card-title font-weight-bold text-center">Event-2</h5>
            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
          </div>
        </div>
        <div class="card mb-3" data-aos="flip-up" data-aos-duration="500"  data-aos-easing="ease-in-out" data-aos-anchor-placement="center-center">
          <div class="card-body">
            <h5 class="card-title font-weight-bold text-center">Event-3</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
          </div>
        </div>
      </div>

      <div class="card-deck">
        <div class="card mb-3" data-aos="flip-up" data-aos-duration="500"  data-aos-easing="ease-in-out" data-aos-anchor-placement="center-center">
          <div class="card-body">
            <h5 class="card-title font-weight-bold text-center">Event-4</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
          </div>
        </div>
        <div class="card mb-3" data-aos="flip-up" data-aos-duration="500"  data-aos-easing="ease-in-out" data-aos-anchor-placement="center-center">
          <div class="card-body">
            <h5 class="card-title font-weight-bold text-center">Event-5</h5>
            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
          </div>
        </div>
        <div class="card mb-3" data-aos="flip-up" data-aos-duration="500"  data-aos-easing="ease-in-out" data-aos-anchor-placement="center-center">
          <div class="card-body">
            <h5 class="card-title font-weight-bold text-center">Event-6</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
          </div>
        </div>
      </div>
    </div>
    





    <!--Embedding Maps-->
    <div class="container">
      <div>
        <h3 class="h1 font-weight-bold text-center my-3">Locate us here!</h3>
      </div>
      <div class=" mb-5 mt-auto " id = "map" style = "width:100%; height: 50%"></div>
    </div>
    
    <!-- video  -->
    <div class="container">
      <div class="row justify-content-center mb-3">
        <div class="col-md-6">
          <video id = "abtVid" style="width: 100%; height: auto; ">
            <source src="../video/Importance of Alumni Engagement.mp4" type="video/mp4">
          </video>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-md-6">
          <button id = "myBtn" class="btn btn-primary" onclick="vidFunction()">Play Video</button>
          <button id="myBtn1" class="btn btn-primary" onclick="screenFunction()">Full Screen</button>
        </div>
      </div>
    </div>
      


    <!--Bootstrap Script-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <!--AOS Script-->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <!--User defined script-->
    <script src="../js/about.js"></script>
    
</body>
</html>