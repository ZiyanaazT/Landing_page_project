<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">
   
</head>
<body>
  <!------nav---->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Shifa-Naaz</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#our_services">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contact_us">Contact</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<!------nav-end--->

<!------carousel---->
<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/2.jpg" alt="" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Los Angeles</h3>
        <p>We had such a great time in LA!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/1.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Chicago</h3>
        <p>Thank you, Chicago!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/9.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>New York</h3>
        <p>We love the Big Apple!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<!------carousel-end--->


<!----about---->
<section class="my-5">
    <div class="py-5">
        <h2 class="text-center">About Us</h2>
    </div>
    <div class="container-fluid">
         <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
                <img src="images/4.jpg" class="img-fluid aboutimg"/>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <h2 class="display-4">I am Shifa Naaz</h2>
                <p class="py-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur voluptatibus soluta cum aut? Possimus adipisci id corrupti reprehenderit! Dolorum beatae incidunt commodi sequi eveniet, dolore vitae facere molestiae quae sit?</p>
                <a href="about.php" class="btn btn-success">check here</a>
            </div>
         </div>
    </div>
</section>

<section class="my-3" id="our_services">
    <div class="py-5">
        <h3 class="text-center">Our Services</h3>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
            <div class="card">
  <img class="card-img-top" src="images/5.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Beaytiful nature</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>
</div>

<div class="col-lg-4 col-md-4 col-12">
  <div class="card">
  <img class="card-img-top" src="images/6.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Beaytiful nature</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>
</div>

<div class="col-lg-4 col-md-4 col-12">
            <div class="card">
  <img class="card-img-top" src="images/7.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Beaytiful nature</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>
</div>
</div>
</div>
</section>
<!----about-end--->

<!---our-gallery--->
<section class="my-5">
    <div class="py-5">
        <h2 class="text-center">Our Gallery</h2>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
          <img src="images/5.jpg" class="img-fluid pb-4">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="images/2.jpg" class="img-fluid pb-4">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="images/3.jpg" class="img-fluid pb-4">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="images/7.jpg" class="img-fluid pb-4">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="images/5.jpg" class="img-fluid pb-4">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="images/6.jpg" class="img-fluid pb-4">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="images/9.jpg" class="img-fluid pb-4">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="images/7.jpg" class="img-fluid pb-4">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="images/9.jpg" class="img-fluid pb-4">
        </div>

      </div>
    </div>
</section>
<!---our-gallery-end-->

<!--contact--->
<section class="my-5" id="contact_us">
    <div class="py-5">
        <h2 class="text-center">Contact Us</h2>
    </div>
    <div class="w-50 m-auto">
    <form action="userinfo.php" method="post">
    <div class="form-group">
      <label>Username</label>
      <input type="text" name="user" autocomplete="off" class="form-control">  
     </div>
     <div class="form-group">
      <label>Email Id</label>
      <input type="text" name="email" autocomplete="off" class="form-control">  
     </div>
     <div class="form-group">
      <label>Mobile</label>
      <input type="text" name="mobile" autocomplete="off" class="form-control">  
     </div>
     <div class="form-group">
      <label>Comment</label>
       <textarea class="form-control" name="comments"></textarea> 
     </div>
     <button type="submit" class="btn btn-success">Submit</button> 
    </form>
    </div>    
</section>
<!--contact--end--->

<!--footer--->
<footer>
  <p class="p-3 bg-dark text-white text-center">shifa@gmail.com</p>
</footer>
<!--footer-end--->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script> 
</body>
</html>