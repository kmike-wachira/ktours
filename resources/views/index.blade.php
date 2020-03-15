@extends('layouts.main')
    @section('body')        
  <div class="container-fluid " style="margin-top:100px">
    <div class="row" >
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
                <img class="d-block w-100" src="styling/img/1.jpg"
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
                <img class="d-block w-100" src="styling/img/2.jpg"
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
                <img class="d-block w-100" src="styling/img/8..jpg"
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
      <div class="col-lg-6 col-md-6 col-sm-12" style="background-color:#131B61;color:white">
        <div class="text-center">
          <h3>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit.leniti praesentium et 
            architecto, veritatis facere accusantium. Ad accusantium, reiciendis magni nihil
            harum voluptate molestiae, a perferendis voluptatibus iusto dolores?
          </h3>
        </div>
   
      </div>
    </div>
  </div>

  <div class="container-fluid text-center p-3">
    <div class="m-auto white-text p-4" style="width:80%;background-color:#401A94"> <h1><i> Upcoming events </i></h1> </div>
  </div>
  <div class="container-fluid">
     <div class="row ">
      <div class="col-lg-4 col-md-12 col-sm-12 mt-2 ">
        <div class="m-auto text-center card" style="background-color:lightgrey">
         <h4> <u>1 day tour to kit mikayi</u> </h4>
          <p>An upcoming event to the famous kit mikayi(Crying stone) in Western Province Kenya to happen.The event will happen on 28 <sup>th</sup> March 2018  kit mikayi(Crying stone) in Western Province Kenya</p>
          <button class="btn white-text mx-auto mb-4" style="background-color:#2A079F;border-radius:20px;width:200px">Read More</button>
          <div class="m-3 p-1" style="transform:rotate(-40deg);width:60px;border-radius:5px;background-color:#27A2A2">New</div>
        </div>         
      </div>
      <div class="col-lg-4 col-md-12 col-sm-12 mt-2">
        <div class="m-auto text-center card" style="background-color:lightgrey">
         <h4> <u>1 day tour to kit mikayi</u> </h4>
          <p>An upcoming event to the famous kit mikayi(Crying stone) in Western Province Kenya to happen.The event will happen on 28 <sup>th</sup> March 2018  kit mikayi(Crying stone) in Western Province Kenya</p>
          <button class="btn white-text mx-auto mb-4" style="background-color:#2A079F;border-radius:20px;width:200px">Read More</button>
          <div class="m-3 p-1" style="transform:rotate(-40deg);width:60px;border-radius:5px;background-color:#27A2A2">New</div>
        </div>         
      </div>
      <div class="col-lg-4 col-md-12 col-sm-12 mt-2 ">
        <div class="m-auto text-center card" style="background-color:lightgrey">
         <h4> <u>1 day tour to kit mikayi</u> </h4>
          <p>An upcoming event to the famous kit mikayi(Crying stone) in Western Province Kenya to happen.The event will happen on 28 <sup>th</sup> March 2018  kit mikayi(Crying stone) in Western Province Kenya</p>
          <button class="btn white-text mx-auto mb-4" style="background-color:#2A079F;border-radius:20px;width:200px">Read More</button>
          <div class="m-3 p-1" style="transform:rotate(-40deg);width:60px;border-radius:5px;background-color:#27A2A2">New</div>
        </div>         
      </div>
       
     </div>
  </div>
  <div class="container-fluid text-center my-5">
    <div class="m-auto white-text p-4" style="width:80%;background-color:#401A94"> <h1><i> What do our clients have to say? </i></h1> </div>
  </div>
  <div class="container-fluid mt-5">
    <div class="row m-2">
     <div class="col-lg-4 col-md-12 col-sm-12 mb-5">
       <div class="m-auto text-center card" style="width:100%;background-color:lightgrey">
        <div>
          <img class="mx-auto" src="styling/img/8..jpg" alt="" width="150" height="150" style="border-radius:50%;margin-top:-40px;"><br>
        </div>
        <h4> <u>1 day tour to kit mikayi</u> </h4>
         <p>An upcoming event to the famous kit mikayi(Crying stone) in Western Province Kenya to happen.The event will happen on 28 <sup>th</sup> March 2018  kit mikayi(Crying stone) in Western Province Kenya</p>
       </div>         
     </div>
     <div class="col-lg-4 col-md-12 col-sm-12 mb-5 ">
      <div class="m-auto text-center card" style="width:100%;background-color:lightgrey">
       <div>
         <img class="mx-auto" src="styling/img/8..jpg" alt="" width="150" height="150" style="border-radius:50%;margin-top:-40px;"><br>
       </div>
       <h4> <u>1 day tour to kit mikayi</u> </h4>
        <p>An upcoming event to the famous kit mikayi(Crying stone) in Western Province Kenya to happen.The event will happen on 28 <sup>th</sup> March 2018  kit mikayi(Crying stone) in Western Province Kenya</p>
      </div>         
    </div>
    <div class="col-lg-4 col-md-12 col-sm-12 mb-5">
      <div class="m-auto text-center card" style="width:100%;background-color:lightgrey">
       <div>
         <img class="mx-auto" src="styling/img/8..jpg" alt="" width="150" height="150" style="border-radius:50%;margin-top:-40px;"><br>
       </div>
       <h4> <u>1 day tour to kit mikayi</u> </h4>
        <p>An upcoming event to the famous kit mikayi(Crying stone) in Western Province Kenya to happen.The event will happen on 28 <sup>th</sup> March 2018  kit mikayi(Crying stone) in Western Province Kenya</p>
      </div>         
    </div> 
    </div>
 </div>
 <div class="container-fluid text-center my-5">
  <div class="m-auto white-text p-4" style="width:80%;background-color:#401A94"> <h1><i> What we offer </i></h1> </div>
</div>
<div class="container-fluid mb-5">
   <div class="row">
     <div class="col-lg-3 col-md-6 col-sm-12 mb-5 ">
      <div class="container1">
        <img src="styling/img/8..jpg" alt="Avatar" class="image1">
        <div class="text-block">
          <h4  class="text-uppercase ">Team building/hiking</h4>
        </div>
        <div class="overlay1">
          <div class="text1">
          <p>Join our hikes and team building activities to make lifetime memories</p> 
          <button class="btn btn-info">Join Activity</button>
          </div>
        </div>
      </div>
     </div>
     <div class="col-lg-3 col-md-6 col-sm-12 mb-5 ">
      <div class="container1">
        <img src="styling/img/8..jpg" alt="Avatar" class="image1">
        <div class="text-block">
          <h4 class="text-uppercase ">Travel with us. </h4>
        </div>
        <div class="overlay1">
          <div class="text1">Join our planned tours and fun activities for the best activities.Come share the moments.
          <button class="btn btn-info">Join now</button>
        </div>
        </div>
      </div>
     </div>
     <div class="col-lg-3 col-md-6 col-sm-12 mb-5 ">
      <div class="container1">
        <img src="styling/img/8..jpg" alt="Avatar" class="image1">
        <div class="text-block">
          <h4>CAR HIRE AND RENTAL</h4>
        </div>
        <div class="overlay1">
          <div class="text1"> <p>Hire at a very pocket friendly price and with the best offers.</p> 
            <button class="btn btn-info">Hire</button>
          </div>
        </div>
      </div>
     </div>
     <div class="col-lg-3 col-md-6 col-sm-12 mb-5 ">
      <div class="container1">
        <img src="styling/img/8..jpg" alt="Avatar" class="image1">
        <div class="text-block">
          <h4>HOTEL BOOKINGS</h4>
        </div>
        <div class="overlay1">
          <div class="text1">
            book  the best of the best hotels to spend time alone or with your friend
          <button class="btn btn-info">Book</button>
          </div>
        </div>
      </div>
     </div>
   </div>
</div>
@endsection
