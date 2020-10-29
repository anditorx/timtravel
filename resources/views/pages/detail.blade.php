@extends('layouts.app')

@section('title','Detail Travel')

@section('content')
  <!-- section details header -->
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
                <li class="breadcrumb-item active">
                  Details
                </li>
              </ol>
            </nav>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8 pl-lg-0">
            <div class="card card-details">
              <h1>Masjid Baiturrahman</h1>
              <p>Aceh, Indonesia</p>
              <div class="gallery">
                <div class="xzoom-container">
                  <img src="frontend/images/baiturrahman-1.png" alt="detials 1" class="xzoom" id="xzoom-default" xoriginal="frontend/images/baiturrahman-1.png">
                </div>
                <div class="xzoom-thumbs">
                  <a href="frontend/images/baiturrahman-1.png">
                    <img src="frontend/images/baiturrahman-1.png" class="xzoom-gallery" width="128" xpreview="frontend/images/baiturrahman-1.png">
                  </a>
                  <a href="frontend/images/baiturrahman-2.png">
                    <img src="frontend/images/baiturrahman-2.png" class="xzoom-gallery" width="128" xpreview="frontend/images/baiturrahman-2.png">
                  </a>
                  <a href="frontend/images/baiturrahman-3.png">
                    <img src="frontend/images/baiturrahman-3.png" class="xzoom-gallery" width="128" xpreview="frontend/images/baiturrahman-3.png">
                  </a>
                </div>
              </div>
              <h2>About</h2>
              <p>Baiturrahman Grand Mosque is a Mosque located in the center of Banda Aceh city, Aceh Province, Indonesia . The Baiturrahman Grand Mosque is a symbol of religion, culture, spirit, strength, struggle and nationalism of the Acehnese people. </p>
              <p>
                The mosque is a landmark of Banda Aceh and has survived the 2004 Indian Ocean tsunami.
              </p>
              <div class="features row">
                <div class="col-md-4">
                  <img src="frontend/images//ic_features.png" alt="icon features" class="features-img">
                  <div class="description">
                    <h3>Featured Event</h3>
                    <p>Takbiran</p>
                  </div>
                </div>
                <div class="col-md-4 border-left">
                  <img src="frontend/images//ic_language.png" alt="icon features" class="features-img">
                  <div class="description">
                    <h3>Language</h3>
                    <p>Bahasa Indonesia</p>
                  </div>
                </div>
                <div class="col-md-4 border-left">
                  <img src="frontend/images//ic_food.png" alt="icon features" class="features-img">
                  <div class="description">
                    <h3>Foods</h3>
                    <p>Mie Aceh, Kopi Aceh</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card card-details card-right">
              <h2>Members are going</h2>
              <div class="members my-2">
                <img src="frontend/images/testi1.png" alt="members" class="member-image mr-1">
                <img src="frontend/images/testi2.png" alt="members" class="member-image mr-1">
                <img src="frontend/images/testi3.png" alt="members" class="member-image mr-1">
              </div>
              <hr>
              <h2>Trip Information</h2>
              <table class="trip-informations">
                <tr>
                  <th width="50%">Date of departure</th>
                  <td width="50%" class="text-right">22 Aug, 2020</td>
                </tr>
                <tr>
                  <th width="50%">Duration</th>
                  <td width="50%" class="text-right">4D 3N</td>
                </tr>
                <tr>
                  <th width="50%">Type</th>
                  <td width="50%" class="text-right">Open Trip</td>
                </tr>
                <tr>
                  <th width="50%">Price</th>
                  <td width="50%" class="text-right">$80,00/person</td>
                </tr>
              </table>
            </div>
            <div class="join-container">
              <a href="{{url('/checkout')}}" class="btn btn-block btn-join-now mt-3 py-2">Join Now</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection

@push('prepend-style')
  <link rel="stylesheet" href="{{url('frontend/libraries/xzoom/xzoom.css')}}">
@endpush

@push('addon-script')
<script src="{{url('frontend/libraries/xzoom/xzoom.min.js')}}"></script>
<script>
  $(document).ready(function(){
    $('.xzoom, .xzoom-gallery').xzoom({
      zoomWidth: 500,
      title: false,
      tint: '#333',
      xoffset: 15,
    });
  });
</script>
@endpush