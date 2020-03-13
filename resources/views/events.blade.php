<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>KTOURS</title>
  <!-- MDB icon -->
  <link rel="icon" href="" type="image/x-icon">
  <!-- Font Awesome -->
  {{-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css"> --}}
  <!-- offline fontawesome link -->
   <link rel="stylesheet" href="assets/fontawesome/css/all.css"> 
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="assets/css/mdb.min.css">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="assets/css/style.css">
  <style>
    .image{
      background-image: url('assets/img/8..jpg');
      background-size: 100% 100%;
    }
 
  </style>
  </head>
  <body>
    <!--Main Navigation-->
  <header>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark scrolling-navbar  fixed-top  p-4" style="background-color:#232F60;">
      <div class="container">
        <!-- Brand -->
        <a class="navbar-brand waves-effect" href="/" target="_blank">
          <strong class="white-text">KTOURS</strong>
        </a>

        <!-- Collapse -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

          <!-- Left -->
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link waves-effect" href="/events" >Events</a>
            </li>
            <li class="nav-item">
              <a class="nav-link waves-effect" href="/about">About us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link waves-effect" href="/hotels">Restaurants</a>
            </li>
            <li class="nav-item">
              <a class="nav-link waves-effect" href="/contact">Contact us</a>
            </li>
          </ul>

          <!-- Right -->
          <ul class="navbar-nav nav-flex-icons">
            <li class="nav-item">
              <a href="" class="nav-link waves-effect" target="_blank">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="nav-item">
              <a href="" class="nav-link waves-effect" target="_blank">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Navbar -->

  </header>
  <!--Main Navigation-->

  <div class="container" style="margin-top:100px">
    <div class="row ">
      <div class="col-lg-6 ">
      <!--Carousel Wrapper-->
    <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
    <!--Indicators-->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-2" data-slide-to="1"></li>
      <li data-target="#carousel-example-2" data-slide-to="2"></li>
    </ol>
    <!--/.Indicators-->
    <!--Slides-->
    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active">
        <div class="view">
          <img class="d-block w-100" src="assets/img/1.jpg"
            alt="First slide">
          <div class="mask rgba-black-light"></div>
        </div>
        <div class="carousel-caption">
          <h3 class="h3-responsive">Light mask</h3>
          <p>First text</p>
        </div>
      </div>
      <div class="carousel-item">
        <!--Mask color-->
        <div class="view">
          <img class="d-block w-100" src="assets/img/2.jpg"
            alt="Second slide">
          <div class="mask rgba-black-strong"></div>
        </div>
        <div class="carousel-caption">
          <h3 class="h3-responsive">Strong mask</h3>
          <p>Secondary text</p>
        </div>
      </div>
      <div class="carousel-item">
        <!--Mask color-->
        <div class="view">
          <img class="d-block w-100" src="assets/img/8..jpg"
            alt="Third slide">
          <div class="mask rgba-black-slight"></div>
        </div>
        <div class="carousel-caption">
          <h3 class="h3-responsive">Slight mask</h3>
          <p>Third text</p>
        </div>
      </div>
    </div>
    <!--/.Slides-->
    <!--Controls-->
    <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->
  </div>
  <!--/.Carousel Wrapper-->
      </div>
      <div class="col-lg-6 " style="background-color:#131B61;">
        <ul class="list-group " >
            <li class="list-group-item active  text-center" style="background-color:navy">
              <div class="md-v-line "></div><i class=""></i>Event Name
            </li>
            <li class="list-group-item">
              <div class="md-v-line"></div><i class="fas fa-calendar mr-5"></i><?=date('d/m/Y')?>
            </li>
            <li class="list-group-item">
              <div class="md-v-line"></div><i class="fas fa-location mr-5"></i>Venue Kisumu
            </li>
            <li class="list-group-item">
              <div class="md-v-line"></div><i class="far fa-gem mr-5"></i>Price :$200
            </li>
            <li class="list-group-item">
              <div class="md-v-line"></div><i class="fas fa-time mr-5"></i>Duration 24hrs
            </li>
          </ul>
      </div>
    </div>
  </div>
  <div class="container m-5">
     <h1>What the event contains.</h1>
     <div>
       <ul>
         <li>
           Add an activity here.
         </li>
         <li>
          Add an activity here.
        </li> 
        <li>
          Add an activity here.
        </li>
        <li>
          Add an activity here.
        </li>
       </ul>
     </div>
     <div class="text-center">
       <h4>Brief Descrption</h4>
       <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum praesentium natus voluptate mollitia architecto reiciendis amet modi quibusdam quis alias non recusandae cum consectetur labore officiis doloremque, doloribus quas qui!</p>
      </div>
  </div>
  <div class="container text-center">
    <div class="row">
        <div class=" col-md-12 col-lg-3 ">
            <button type="button" class="btn btn-outline-default waves-effect"><i class="fas fa-book pr-2" aria-hidden="true"></i>Book now</button>
        </div>
        <div class=" col-md-12 col-lg-3 ">
            <button type="button" class="btn btn-outline-default waves-effect"><i class="fas fa-star pr-2" aria-hidden="true"></i>Intersted</button>
        </div>
        <div class=" col-md-12 col-lg-3 ">
            <button type="button" class="btn btn-outline-default waves-effect"><i class="fas fa-share pr-2" aria-hidden="true"></i>Share</button>
        </div>
        <div class=" col-md-12 col-lg-3 ">
            <button type="button" class="btn btn-outline-default waves-effect"><i class="fas fa-star pr-2" aria-hidden="true"></i>Contact for more info</button>
        </div>
      </div>
  </div>
  
<!-- Footer -->
<footer class="page-footer font-small indigo">

  <!-- Footer Links -->
  <div class="container text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-4 mx-auto">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">pages</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!">contact</a>
          </li>
          <li>
            <a href="#!">home</a>
          </li>
          <li>
            <a href="#!">events</a>
          </li>
          <li>
            <a href="#!">about</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->
      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-4 mx-auto">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Social media</h5>

        <ul class="list-unstyled">
          <li class="">
            <a href="" class="nav-link waves-effect" target="_blank">
              <i class="fab fa-facebook-f"> Facebook</i>
            </a>
          </li>
          <li class="">
            <a href="" class="nav-link waves-effect" target="_blank">
              <i class="fab fa-twitter"> Twitter</i>
            </a>
          </li>
        </ul>
      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-4 mx-auto">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

        <form class="form " action="">
          <!-- Material input -->
        <div class="md-form">
          <i class="fas fa-email prefix"></i>
          <input type="email" id="inputValidationEx2" class="form-control validate">
          <label for="inputValidationEx2" data-error="wrong" data-success="right">Type your password</label>
        </div>
        <div class="text-center">
          <button type="submit" class="btn btn-outline-info btn-rounded waves-effect mx-auto"><i class="fas fa-envelope pr-2"
            aria-hidden="true"></i>Subscribe to our news letter</button> 
        </div>
          
        </form>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© <?=date('Y')." "  ?>Copyright:
    <a href=""> KTOURS</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->



  <!-- jQuery -->
  <script type="text/javascript" src="assets/js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="assets/js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="assets/js/mdb.min.js"></script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript"></script>

</body>
</html>
