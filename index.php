<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Chivo+Mono:ital,wght@1,200&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Chivo+Mono:ital,wght@1,200&family=Passions+Conflict&display=swap" rel="stylesheet">
    <title>Travel Around</title>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="#"><h1>AS</h1>Tour and Travel</a>

  <!-- Links -->
  <ul class="navbar-nav ml-auto">
    <li class="nav-item">
      <a class="nav-link" href="index.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="about.php">About Us</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Contact Us</a>
    </li>


    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Places
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Swizerland</a>
        <a class="dropdown-item" href="#">Maldives</a>
        <a class="dropdown-item" href="#">Paris</a>
      </div>
    </li>
  </ul>
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <form class="form-inline" action="/action_page.php">
    <input class="form-control mr-sm-2" type="text" placeholder="Search">
    <button class="btn btn-success" type="submit">Search</button>
  </form></nav>
</nav>
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/la.webp" alt="Los Angeles">
    </div>
    <div class="carousel-item">
      <img src="images/cg.jpg" alt="Chicago">
    </div>
    <div class="carousel-item">
      <img src="images/ny.jpg" alt="New York">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>
<section class="my-5">
    <div class="py-5">
        <h2 class="text-center">About Us</h2>
    </div>
    <div class="container-fluid">
        <div class="row">
            
        <div class="col-lg-6 col-md-6 col-12"> 
                <img src="images/my.jpg" class="img-fluid aboutimg" >
            </div>
            <div class="col-lg-6 col-md-6 col-12"> 
                <h2 class="display-4">Welcome to AS Tour and Travel</h2>
                <p class="py-3">
                    <h4>Heyaaaa!!!Peoples</h4> We are bringing to you the most awaited opportunity to travel to different places with ease.
                    When we paln a trip we come across different difficulties such as hotel arrangement, cost estimation, different places to consider and many more.
                    <br>So here we are to solve all your problems at one place just selct the place and get all the related information so as to make your trip memorable :)
                </p>
                <a href="about.php" class="btn btn-success">Dive In</a>
            </div>
        </div>
    </div>
</section>
<section class="my-5">
    <div class="py-5">
        <h2 class="text-center">Hot Search</h2>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12"> 
                <div class="card">
                    <img class="card-img-top" src="images/sz.jpg" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">Switzerland</h4>
                        <p class="card-text">A super loved holiday destination in winters ;)</p>
                        <a href="#" class="btn btn-primary">Check Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12"> 
                <div class="card">
                    <img class="card-img-top" src="images/md.jpg" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">Maldives</h4>
                        <p class="card-text">A great holiday destination in summers ;)</p>
                        <a href="#" class="btn btn-primary">Check Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12"> 
                <div class="card">
                    <img class="card-img-top " src="images/Pa.jpg" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">Paris</h4>
                        <p class="card-text">A beautiful holiday destination (Also known as the city of love ;) )</p>
                        <a href="#" class="btn btn-primary">Check Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="my-5">
    <div class="py-5">
        <h2 class="text-center">Gallery</h2>
    </div>
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-4 col-md-4 col-12">
        <img src="images/A.jpg" class="img-fluid pb-4">
    </div>
    <div class="col-lg-4 col-md-4 col-12">
        <img src="images/B.jpg" class="img-fluid pb-4">
    </div>
    <div class="col-lg-4 col-md-4 col-12">
        <img src="images/C.webp" class="img-fluid pb-4">
    </div>
    <div class="col-lg-4 col-md-4 col-12">
        <img src="images/D.jpg" class="img-fluid pb-4">
    </div>
    <div class="col-lg-4 col-md-4 col-12">
        <img src="images/E.jpg" class="img-fluid pb-4">
    </div>
    <div class="col-lg-4 col-md-4 col-12">
        <img src="images/F.webp" class="img-fluid pb-4">
    </div>
  </div>
</div>

</section>
<section class="my-5">
    <div class="py-5">
        <h2 class="text-center">Contact US</h2>
    </div>
    <div class="w-50 m-auto">
      <form action="userinfo.php" method="post">
        <div class="form-group">
          <label>Username</label>
          <input type="text" nmae="user" autocomplete="off" class="form-control" >       
        </div>
        <div class="form-group">
          <label>Email Id</label>
          <input type="text" nmae="email" autocomplete="off" class="form-control">        
        </div>
        <div class="form-group">
          <label>Mobile No.</label>
          <input type="text" nmae="mobile" autocomplete="off" class="form-control">        
        </div>
        <div class="form-group">
          <label>Specifications</label>
          <textarea class="form-control">
          </textarea>
        </div>
        
        <button type="submit" class="btn btn-success">Submit</button>
      </form>
    </div>

</scetion>
<footer>
  <p class="py-3 bg-dark text-white text-center">AS travels</p>
</footer>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>