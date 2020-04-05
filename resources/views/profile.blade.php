@extends('layouts.main')
@section('body')
<div class="container mtop">
    <div class="row">
        <div class="col-sm-4">            <!-- Card -->
<div class="card">

    <!-- Card image -->
<img class="card-img-top rounded-lg " src="{{asset('styling/img/47.jpg')}}" alt="Card image cap">  
    <!-- Card content -->
    <div class="card-body">  
      <!-- Title -->
      <h4 class="card-title"><a>{{ $user->name}}</a></h4>
      <!-- Text -->
    <p class="card-text">{{ $user->email}}</p>
    <p class="card-text">0790964507</p>  
    </div>
  
  </div>
  <!-- Card -->
        </div>
        <div class="col-sm-8">
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="booked-tab" data-toggle="tab" href="#booked" role="tab" aria-controls="booked"
                aria-selected="true">Booked events</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="intersted-tab" data-toggle="tab" href="#intersted" role="tab" aria-controls="intersted"
                aria-selected="false">events with interests</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="testiomonial-tab" data-toggle="tab" href="#testiomonial" role="tab" aria-controls="testiomonial"
                aria-selected="false">Add testiomonial</a>
            </li>
          </ul>
          <div class="tab-content card" id="myTabContent">
            <div class="tab-pane fade show active card-text" id="booked" role="tabpanel" aria-labelledby="booked-tab">
              {{-- accordion start --}}
              <div class="accordion" id="accordionExample">
                <div class="card z-depth-0 bordered">
                  <div class="card-header blue-gradient" id="headingOne">
                    <h5 class="mb-0">
                      <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne"
                        aria-expanded="true" aria-controls="collapseOne">
                        Collapsible Group Item #1
                      </button>
                    </h5>
                  </div>
                  <div id="collapseOne" class="collapse show  purple-gradient" aria-labelledby="headingOne"
                    data-parent="#accordionExample">
                    <div class="card-body text-center">
                      <!--Table-->
                        <table id="tablePreview" class="table">
                          <!--Table head-->
                            <thead>
                              <tr>
                                <th>Expected Visitors</th>
                                <th>Price </th>
                                <th>Date</th>
                                <th>Edit</th>
                                <th>Recommend</th>
                                <th>Remove</th>
                            
                              </tr>
                            </thead>
                            <!--Table head-->
                            <!--Table body-->
                            <tbody>
                              <tr>
                                <td>Expected </td>
                                <td>Price</td>
                                <td>Date</td>
                                <td><button class="btn peach-gradient">Edit</button></td>
                                <td><button class="btn blue-gradient">Recomend</button></td>
                                <td><button class="btn btn-danger">Cancel</button></td>                                
                              </tr>                            
                            </tbody>
                            <!--Table body-->
                          </table>
                          <!--Table-->
                    </div>
                  </div>
                </div>
              </div>
              {{-- accordion end --}}
            </div>
            <div class="tab-pane fade" id="intersted" role="tabpanel" aria-labelledby="intersted-tab">
              <div class="accordion" id="accordionExample">
                <div class="card z-depth-0 bordered">
                  <div class="card-header blue-gradient" id="headingOne">
                    <h5 class="mb-0">
                      <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne"
                        aria-expanded="true" aria-controls="collapseOne">
                        Collapsible Group Item #1
                      </button>
                    </h5>
                  </div>
                  <div id="collapseOne" class="collapse show  purple-gradient" aria-labelledby="headingOne"
                    data-parent="#accordionExample">
                    <div class="card-body text-center">
                      <button class="btn peach-gradient">Book Now</button>
                      {{-- <button class="btn purple-gradient">Purple</button>  --}}
                      <button class="btn blue-gradient">Recomend</button>
                      {{-- <button class="btn aqua-gradient">Aqua</button> --}}
                    </div>
                  </div>
                </div>
              </div>

              </div>
            <div class="tab-pane fade blue-gradient " id="testiomonial" role="tabpanel" aria-labelledby="testiomonial-tab">
                            <!-- Default form contact -->
              <form class="text-center border border-light p-5" action="#!">

                <p class="h4 mb-4">Add testimonial</p>


                <!-- Message -->
                <div class="form-group">
                    <textarea class="form-control rounded-0 indigo accent-4" id=" " rows="3" placeholder="Message"></textarea>
                </div>

                <!-- Send button -->
                <button class="btn btn-info btn-block" type="submit">Send</button>

              </form>
              <!-- Default form contact -->
            </div>
          </div>
        </div>
      </div>
</div>
@endsection