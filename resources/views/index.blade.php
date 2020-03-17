@extends('layouts.main')
    @section('body')        
  <div class="container-fluid mtop">
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
      <div class="carousel-inner" role="listbox" >
        <div class="carousel-item active">
          <div class="view">
            <img class="d-block caro-image w-100" src="{{ asset('styling/img/1.jpg') }}"
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
            <img class="d-block caro-image w-100" src="{{ asset('styling/img/2.jpg') }}"
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
            <img class="d-block caro-image w-100" src="{{ asset('styling/img/8..jpg') }}"
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
  </div>

  <div class="container-fluid holder text-center">
    <div class="m-auto white-text holder-text "> <p><i> Upcoming events </i></p> </div>
  </div>
  <div class="container-fluid">
     <div class="row ">
       @foreach ($events as $event)
       <div class="col-lg-4 col-md-12 col-sm-12 mt-2 ">
        <div class="m-auto text-center card" style="background-color:lightgrey">
        <h4> <u>{{ $event->title}}</u> </h4>
          <p>{{ $event->description}}</p>
        <button class="btn white-text mx-auto" style="background-color:#2A079F;border-radius:20px;width:200px"><a class="text-white" href="{{ route('show',$event->id )}}"> View details</a></button>
          <div class="m-3 p-1" style="transform:rotate(-40deg);width:60px;border-radius:5px;background-color:#27A2A2">New</div>
        </div>         
      </div>  
       @endforeach
     </div>
  </div>
  <div class="container-fluid holder text-center">
    <div class="m-auto white-text holder-text "> <p><i> What our clients say? </i></p> </div>
  </div>
  <div class="container-fluid mt-5">
    <div class="row m-2">
      @foreach ($testimonials as $testimonial)
      <div class="col-lg-4 col-md-12 col-sm-12 mb-5">
        <div class="m-auto text-center card" style="width:100%;background-color:lightgrey">
         <div>
           <img class="mx-auto" src="{{ asset('styling/img/8..jpg') }}" alt="" width="150" height="150" style="border-radius:50%;margin-top:-40px;"><br>
         </div>
        <h4> {{ $testimonial->name }}</h4>
        <p>{{ $testimonial->testimonial }}</p>
        </div>         
      </div>
      @endforeach
    </div>
 </div>
 <div class="container-fluid holder text-center">
  <div class="m-auto white-text holder-text "> <p><strong>Our  Patners </strong></p> </div>
</div>
<div class="container-fluid mb-5">
   <div class="row">
     <div class="col-lg-3 col-md-6 col-sm-12 mb-5 ">
      <div class="container1">
        <img src="{{ asset('styling/img/8..jpg') }}" alt="Avatar" class="image1">
        <div class="text-block">
          <h4  class="text-uppercase ">JD DESIGNS</h4>
        </div>
        <div class="overlay1">
          <div class="text1">
          <p>The Biggest and upcoming Design company in videography and photography. </p> 
          <button class="btn btn-info"> <a class="text-white" href="tel:0790964507"> Contact</a> </button>
          </div>
        </div>
      </div>
     </div>
     <div class="col-lg-3 col-md-6 col-sm-12 mb-5 ">
      <div class="container1">
        <img src="{{ asset('styling/img/8..jpg') }}" alt="Avatar" class="image1">
        <div class="text-block">
          <h4 class="text-uppercase ">Whizzy Ent </h4>
        </div>
        <div class="overlay1">
          <div class="text1">An entertainment company witn the best and great DJ's and Awesome sound systems
          <button class="btn btn-info"> <a class="text-white" href="tel:0790964507"> Contact</a> </button>
        </div>
        </div>
      </div>
     </div>
     <div class="col-lg-3 col-md-6 col-sm-12 mb-5 ">
      <div class="container1">
        <img src="{{ asset('styling/img/8..jpg') }}" alt="Avatar" class="image1">
        <div class="text-block">
          <h4 class="text-uppercase ">Maja Empire</h4>
        </div>
        <div class="overlay1">
          <div class="text1"> <p>A car hire industry .Best SUV's and 4WD drives for your events </p> 
            <button class="btn btn-info"> <a class="text-white" href="tel:0790964507"> Contact</a> </button>
          </div>
        </div>
      </div>
     </div>
     <div class="col-lg-3 col-md-6 col-sm-12 mb-5 ">
      <div class="container1">
        <img src="{{ asset('styling/img/8..jpg') }}" alt="Avatar" class="image1">
        <div class="text-block">
          <h4 class="text-uppercase ">GEE EVENTS</h4>
        </div>
        <div class="overlay1">
          <div class="text1">An entertainment company with lot's of cool stuff from Music Tents etc..
            <button class="btn btn-info"> <a class="text-white" href="tel:0790964507"> Contact</a> </button>          
          </div>
        </div>
      </div>
     </div>
   </div>
</div>
@endsection
