<div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Book for the event</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
      <form class="form" action="{{ route('book')}}" method="POST">
        <div class="md-form mb-5">
          <i class="fas fa-user prefix grey-text"></i>
          <input type="number" min="1" id="orangeForm-name" name="no_attending" class="form-control validate">
          <label data-error="wrong" data-success="right" for="orangeForm-name">Number of people</label>
        </div>
        <div class="md-form mb-5">
          <i class="fas fa-dollar-sign prefix grey-text"></i>
          <input type="type" id="orangeForm-email" name="price"  class="form-control validate" disabled>
          <label data-error="wrong" data-success="right" for="orangeForm-email">Prices</label>
        </div>

        {{-- <div class="md-form mb-4">
            <div class=" col-md-12 col-lg-12 text-center ">
                <button type="button" class="btn btn-outline-default waves-effect"><i class="fab fa-paypal pr-2" aria-hidden="true"></i>Pay Via PayPal</button>
            </div>
        </div> --}}
        <div class="md-form mb-4">
            <div class=" col-md-12 col-lg-12 text-center ">
              <input type="checkbox" id="orangeForm-email" name="on_arrival" value="arrival" class="form-control validate" >
              <label data-error="wrong" data-success="right" for="orangeForm-email"><i class="fas fa-plane-arrival pr-2" aria-hidden="true"></i>Pay  On Arrival</label>
                {{-- <button type="button" class="btn btn-outline-default waves-effect"><i class="fas fa-plane-arrival pr-2" aria-hidden="true"></i>Pay  On Arrival</button> --}}
            </div>
        </div>
      </form>
      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-deep-orange">Complete booking</button>
      </div>
    </div>
  </div>
</div>

