@extends('layouts.checkout')

@section('title','Checkout | TIMTRAVEL')

@section('content')
<main>
  <section class="section-details-header"></section>
  <section class="section-details-content">
    <div class="container">
      <div class="row">
        <div class="col p-0">
          <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                Paket Travel
              </li>
              <li class="breadcrumb-item">
                Details
              </li>
              <li class="breadcrumb-item active">
                Checkout
              </li>
            </ol>
          </nav>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8 pl-lg-0">
          <div class="card card-details">
            <h1>Who is going?</h1>
            <p>Trip to Masjid Baiturrahman, Aceh, Indonesia</p>
            <div class="attendee">
              <table class="table table-responsive-sm text-center">
                <thead>
                  <tr>
                    <td>Picture</td>
                    <td>Name</td>
                    <td>Nationality</td>
                    <td>Visa</td>
                    <td>Passport</td>
                    <td></td>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><img src="{{url('frontend/images/testi2.png')}}" height="50px"></td>
                    <td class="align-middle">Putri Andini</td>
                    <td class="align-middle">ID</td>
                    <td class="align-middle">N/A</td>
                    <td class="align-middle">Active</td>
                    <td class="align-middle">
                      <a href="#">
                        <img src="{{url('frontend/images/ic_delete.png')}}" height="15px">
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td><img src="{{url('frontend/images/testi3.png')}}" height="50px"></td>
                    <td class="align-middle">Jennifer Leonardo</td>
                    <td class="align-middle">MY</td>
                    <td class="align-middle">30 Days</td>
                    <td class="align-middle">Active</td>
                    <td class="align-middle">
                      <a href="#">
                        <img src="{{url('frontend/images/ic_delete.png')}}" height="15px">
                      </a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="member mt-3">
              <h2>Add Member</h2>
              <form action="#" class="form-inline">
                <label for="inputUsername" class="sr-only">
                  Name
                </label>
                <input type="text" class="form-control mb-2 mr-sm-2" id="inputUsername" name="inputUsername" placeholder="Username">
                <label for="inputVisa" class="sr-only">
                  Visa
                </label>
                <select name="inputVisa" id="inputVisa" class="custom-select mb-2 mr-sm-2">
                  <option value="VISA" selected>VISA</option>
                  <option value="VISA">30 Days</option>
                  <option value="VISA">N/A</option>
                </select>                 
                <label for="doePassport" class="sr-only">
                  DOE Passport
                </label>
                <div class="input-group mb-2 mr-sm-2">
                  <input type="text" class="form-control datepicker" id="doePassport" placeholder="DOE Passport">
                </div>

                <button type="submit" class="btn btn-add-now mb-2 px-4">Add Now</button>

              </form>
              <h6 class="mt-2 mb-0">Note</h6>
              <p class="disclaimer mb-0">
                You are only able to invite member that has registered in TimTravel.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card card-details card-right">
            <h2>Checkout Information</h2>
            <table class="trip-informations">
              <tr>
                <th width="50%">Members</th>
                <td width="50%" class="text-right">2 Persons</td>
              </tr>
              <tr>
                <th width="50%">Additional VISA</th>
                <td width="50%" class="text-right">$190,00</td>
              </tr>
              <tr>
                <th width="50%">Trip Price</th>
                <td width="50%" class="text-right">$80,00/person</td>
              </tr>
              <tr>
                <th width="50%">Sub Total</th>
                <td width="50%" class="text-right">$280</td>
              </tr>
              <tr>
                <th width="50%">Total (+unique code)</th>
                <td width="50%" class="text-right text-total">
                  <span class="text-blue">$280,</span>
                  <span class="text-orange">33</span>
                </td>
              </tr>
            </table>
            <hr>
            <h2 class="payment-instruction">Payment Instruction</h2>
            <p>Please complete your payment before to continue the wonderful trip</p>
            <div class="bank">
              <div class="bank-item pb-3">
                <img src="{{url('frontend/images/ic_creditCard.png')}}" class="bank-image">
                <div class="description">
                  <h3>PT TIMTRAVEL UNIVERSE</h3>
                  <p>08587757746<br/>Bank Central Asia</p>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="bank-item pb-3">
                <img src="{{url('frontend/images/ic_creditCard.png')}}" class="bank-image">
                <div class="description">
                  <h3>PT TIMTRAVEL UNIVERSE</h3>
                  <p>08587766686<br/>Bank HSBC</p>
                </div>
                <div class="clearfix"></div>
              </div>
            </div>
          </div>
          <div class="join-container">
            <a href="{{url('/checkout/success')}}" class="btn btn-block btn-join-now mt-3 py-2">I have made payment</a>
          </div>
          <div class="text-center mt-3">
            <a href="{{url('/detail')}}" class="text-muted">
              Cancel Booking
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
@endsection

@push('prepend-style')
<link rel="stylesheet" href="{{url('frontend/libraries/gijgo/css/gijgo.min.css')}}">
@endpush

@push('addon-script')
<script src="{{url('frontend/libraries/gijgo/js/gijgo.min.js')}}"></script>
<script>
  $('.datepicker').datepicker({
    uiLibrary: 'bootstrap4',
    icons: {
      rightIcon: '<img src="{{url('frontend/images/ic_calendar.png')}}" height="18px"/>'
    }
  })
</script>
@endpush