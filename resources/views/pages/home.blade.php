@extends('layouts.app')

@section('title')
    TIMTRAVEL
@endsection

@section('content')
  <!-- header or hero section -->
  <header class="text-center">
    <h1>Explore The Beautiful Word<br>As Easy One Click</h1>
    <p>
      You will see beautiful<br>moment you never see before
    </p>
    <a href="#" class="btn btn-get-started px-4 mt-4">Get Started</a>
  </header>
  <main>
    <!-- statistic -->
    <div class="container">
      <section class="section-stats row justify-content-center" id="stats">
        <div class="col-3 col-lg-2 stats-detail">
          <h2>20K</h2>
          <p>Members</p>
        </div>
        <div class="col-3 col-lg-2 stats-detail">
          <h2>12</h2>
          <p>Countries</p>
        </div>
        <div class="col-3 col-lg-2 stats-detail">
          <h2>2K</h2>
          <p>Hotels</p>
        </div>
        <div class="col-3 col-lg-2 stats-detail">
          <h2>48</h2>
          <p>Partners</p>
        </div>
      </section>
      <!-- section populer -->
    </div>
    <!-- section populer content -->
    <section class="section-populer" id="populer">
      <div class="container">
        <div class="row">
          <div class="col text-center section-populer-heading">
            <h2>Wisata Populer</h2>
            <p>Something that you never try<br>before in this world</p>
          </div>
        </div>
      </div>
    </section>
    <section class="section-populer-content" id="populer-content">
      <div class="container">
        <div class="section-populer-travel row justify-content-center">
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card-travel text-center d-flex flex-column" style="background-image: url(./frontend/images/Aceh.png);">
              <div class="travel-country">INDONESIA</div>
              <div class="travel-location">Nangroe Aceh Darusalam</div>
              <div class="travel-button mt-auto">
                <a href="{{url('/detail')}}" class="btn travel-button-details px-4">View Details</a>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card-travel text-center d-flex flex-column" style="background-image: url(./frontend/images/Bali.png);">
              <div class="travel-country">INDONESIA</div>
              <div class="travel-location">Bali</div>
              <div class="travel-button mt-auto">
                <a href="details.html" class="btn travel-button-details px-4">View Details</a>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card-travel text-center d-flex flex-column" style="background-image: url(./frontend/images/Lombok.png);">
              <div class="travel-country">INDONESIA</div>
              <div class="travel-location">Lombok</div>
              <div class="travel-button mt-auto">
                <a href="details.html" class="btn travel-button-details px-4">View Details</a>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card-travel text-center d-flex flex-column" style="background-image: url(./frontend/images/Pontianak.png);">
              <div class="travel-country">INDONESIA</div>
              <div class="travel-location">Pontianak</div>
              <div class="travel-button mt-auto">
                <a href="details.html" class="btn travel-button-details px-4">View Details</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- section network -->
    <section class="section-networks" id="networks">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h2>Our Networks</h2>
            <p>Companies are trusted us<br>more than just a trip</p>
          </div>
          <div class="col-md-8 text-center">
            <img src="./frontend/images/Partners.png" alt="Partners" class="img-partner">
          </div>
        </div>
      </div>
    </section>
    <!-- section testimoni -->
    <section class="section-testimonial-heading" id="testimonialHeading">
      <div class="container">
        <div class="row">
          <div class="col text-center">
            <h2>They Are Loving Us</h2>
            <p>Moments were giving them<br/>the best experience</p>
          </div>
        </div>
      </div>
    </section>
    <section class="section section-testimonial-content" id="testimonialContent">
      <div class="container">
        <div class="section-populer-travel row justify-content-center">
          <div class="col-sm-6 col-md-6 col-lg-4">
            <div class="card card-testimonial text-center">
              <div class="testimonial-content">
                <img src="frontend/images/testi1.png" alt="Testimoni user" class="mb-4 rounded-circle">
                <h3 class="mb-4">Paula Hergovizia</h3>
                <p class="testimonial">
                  "It was glorious and i could not stop to say Wowww for every single moment. Thank you!"
                </p>
              </div>
              <hr>
              <p class="trip-to mt-2">
                Trip to Bali
              </p>
            </div>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-4">
            <div class="card card-testimonial text-center">
              <div class="testimonial-content">
                <img src="frontend/images/testi2.png" alt="Testimoni user" class="mb-4 rounded-circle">
                <h3 class="mb-4">Putri Andini</h3>
                <p class="testimonial">
                  "Never could I have imagined the wonderful experiences that awaited me/us/before we began our trip."
                </p>
              </div>
              <hr>
              <p class="trip-to mt-2">
                Trip to Aceh
              </p>
            </div>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-4">
            <div class="card card-testimonial text-center">
              <div class="testimonial-content">
                <img src="frontend/images/testi3.png" alt="Testimoni user" class="mb-4 rounded-circle">
                <h3 class="mb-4">Jennifer Leonardo</h3>
                <p class="testimonial">
                  "I had an absolutely FABULOUS time in Lombok. Everything you arranged went smooth as silk. And Axara? Simply terrific. What a nice guy."
                </p>
              </div>
              <hr>
              <p class="trip-to mt-2">
                Trip to Lombok
              </p>
            </div>
          </div>

        </div>
        <div class="row">
          <div class="col-12 text-center">
            <a href="#" class="btn btn-need-help px-4 mt-4 mx-1">Need Help</a>
            <a href="#" class="btn btn-get-started px-4 mt-4 mx-1">Get Started</a>
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection