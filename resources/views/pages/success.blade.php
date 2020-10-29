@extends('layouts.success')
@section('title','Success | TIMTRAVEL')

@section('content')
<main>
  <div class="section-success d-flex align-items-center">
    <div class="col text-center">
      <img src="{{url('frontend/images/letter-box.png')}}" height="100px">
      <h1>Yeay! Success</h1>
      <p>We have sent you an email for trip instruction <br>please read it as well</p>
      <a href="{{url('/')}}" class="btn btn-home-page mt-3 px-5">Home</a>
    </div>
  </div>
</main>
@endsection