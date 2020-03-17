@extends('layouts.main')
@section('body')
         <!--Section: Cards-->
         <section class="pt-5">
            <!-- Heading & Description -->
            <div class="wow fadeIn">
              <!--Section heading-->
              <h2 class="h1 text-center mb-5">Ktours</h2>
              <!--Section description-->
              <p class="text-center">The best touring agent and assistant maseno university </p>
              <p class="text-center mb-5 pb-5">Trusted by over
                <strong>500</strong> students and stuff in  the varsity </p>
            </div>
            <!-- Heading & Description -->
    
            <!--Grid row-->
            <div class="container">
            {{-- <div class="row wow fadeIn">
    
              <!--Grid column-->
              <div class="col-lg-5 col-xl-4 mb-4">
                <!--Featured image-->
                <div class="view overlay rounded z-depth-1-half">
                  <div class="view overlay">
                    <div class="embed-responsive embed-responsive-16by9">
                      <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/cXTThxoywNQ" allowfullscreen></iframe>
                    </div>
                  </div>
                </div>
              </div>
              <!--Grid column-->
    
              <!--Grid column-->
              <div class="col-lg-7 col-xl-7 ml-xl-4 mb-4">
                <h3 class="mb-3 font-weight-bold dark-grey-text">
                  <strong>MDB Quick Start</strong>
                </h3>
                <p class="grey-text">Get started with MDBootstrap, the world's most popular Material Design framework for
                  building responsive,
                  mobile-first sites.</p>
                <p>
                  <strong>5 minutes, a few clicks and... done. You will be surprised at how easy it is.</strong>
                </p>
                <a href="https://www.youtube.com/watch?v=cXTThxoywNQ" target="_blank" class="btn btn-primary btn-md">Start
                  tutorial
                  <i class="fas fa-play ml-2"></i>
                </a>
              </div>
              <!--Grid column-->
    
            </div> --}}
            <!--Grid row-->
    
            {{-- <hr class="mb-5"> --}}
    
            <!--Grid row-->
            {{-- <div class="row mt-3 wow fadeIn">
    
              <!--Grid column-->
              <div class="col-lg-5 col-xl-4 mb-4">
                <!--Featured image-->
                <div class="view overlay rounded z-depth-1">
                  <img src="https://mdbootstrap.com/wp-content/uploads/2017/11/brandflow-tutorial-fb.jpg" class="img-fluid"
                    alt="">
                  <a href="https://mdbootstrap.com/education/tech-marketing/automated-app-introduction/" target="_blank">
                    <div class="mask rgba-white-slight"></div>
                  </a>
                </div>
              </div>
              <!--Grid column-->
    
              <!--Grid column-->
              <div class="col-lg-7 col-xl-7 ml-xl-4 mb-4">
                <h3 class="mb-3 font-weight-bold dark-grey-text">
                  <strong>Bootstrap Automation</strong>
                </h3>
                <p class="grey-text">Learn how to create a smart website which learns your user and reacts properly to his
                  behavior.</p>
                <a href="https://mdbootstrap.com/education/tech-marketing/automated-app-introduction/" target="_blank"
                  class="btn btn-primary btn-md">Start tutorial
                  <i class="fas fa-play ml-2"></i>
                </a>
              </div>
              <!--Grid column-->
    
            </div> --}}
            <!--Grid row-->
    
            {{-- <hr class="mb-5"> --}}
    
            <!--Grid row-->
            <div class="row wow fadeIn">
    
              <!--Grid column-->
              @foreach ($events as $event)                  
              <div class="col-lg-5 col-xl-4 mb-4">
                <!--Featured image-->
                <div class="view overlay rounded z-depth-1">
                <img src="{{ asset('styling/img/2.jpg')}}" class="img-fluid" alt="">
                  <a href="" target="_blank">
                    <div class="mask rgba-white-slight"></div>
                  </a>
                </div>
              </div>
              <!--Grid column-->
    
              <!--Grid column-->
              <div class="col-lg-7 col-xl-7 ml-xl-4 mb-4">
                <h3 class="mb-3 font-weight-bold dark-grey-text">
                <strong>{{ $event->title}}</strong>
                </h3>
                <p class="grey-text">{{$event->description}}</p>
            <p><strong>{{ date ('D M, Y ' ,strtotime($event->event_date))}}</strong></p>

                <a href="{{ route('show',$event->id )}}" class="btn btn-primary btn-md">View Event
                  <i class="fas fa-play ml-2"></i>
                </a>
              </div>
            <hr class="mb-5">
              <!--Grid column-->
              @endforeach
              <div class= " container text-center">
             {{ $events->links() }}
            </div>
            </div>
            <!--Grid row-->    
            <!--Pagination-->
            {{-- <nav class="d-flex justify-content-center wow fadeIn">
              <ul class="pagination pg-blue">
    
                <!--Arrow left-->
                <li class="page-item disabled">
                  <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span>
                  </a>
                </li>
    
                <li class="page-item active">
                  <a class="page-link" href="#">1
                    <span class="sr-only">(current)</span>
                  </a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">3</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">4</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">5</a>
                </li>
    
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Next</span>
                  </a>
                </li>
              </ul>
            </nav> --}}
            <!--Pagination-->
             </div>
    
          </section>
          <!--Section: Cards-->
    

          @endsection