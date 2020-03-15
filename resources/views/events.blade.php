@extends('layouts.main')
  @section('name')
    <div class="container" style="margin-top:100px">
      <div class="row">
        <div class="col-lg-6  col-md-6 col-sm-12">
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
          <div class="col-lg-6 col-md-6 col-sm-12 " style="background-color:#131B61;">
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
      <div class="container mt-5">
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
          <h4>Brief Description</h4>
          <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum praesentium natus voluptate mollitia 
            architecto reiciendis amet modi quibusdam quis alias non recusandae cum consectetur labore officiis 
            doloremque, doloribus quas qui!</p>
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
  @endsection
