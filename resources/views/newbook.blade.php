@extends('layouts.main')
@section('body')
<div class="mtop container">
<form class="form" action="{{ route('book')}}" method="POST">
    @csrf
 <div class="modal-content">
   <div class="modal-header text-center">
   <h4 class="modal-title w-100 font-weight-bold">Book for {{$event->title}}</h4>
   </div>
   <div class="modal-body mx-3">
     <div class="md-form mb-5">
       <i class="fas fa-user prefix grey-text"></i>
       <input type="number" min="1" id="orangeForm-name" name="no_attending" class="form-control validate" required>
       <label data-error="wrong" data-success="right" for="orangeForm-name">Number of people</label>
     </div>
     <div class="md-form mb-5">
       <i class="fas fa-dollar-sign prefix grey-text"></i>
       <input type="text" id="orangeForm-email" name="price" value="{{$event->price}}" class="form-control validate" disabled>
       <label data-error="wrong" data-success="right" for="orangeForm-email">Prices</label>
     </div>
     <input type="text"  name="id" value="{{$event->id}}" class="form-control validate" style="display:none">
     <div class="custom-control custom-checkbox">
       <input type="checkbox" value="arrival" name="onarrival" class="custom-control-input" id="defaultChecked2" checked>
       <label class="custom-control-label" for="defaultChecked2"><i class="fas fa-plane-arrival pl-2" aria-hidden="true"></i>Pay  On Arrival</label>
     </div>
   </div>
   <div class="modal-footer d-flex justify-content-center">
     <button type="submit" class="btn btn-deep-orange" >Complete Booking</button>
   </div>
 </div>
</form>
</div>

@endsection