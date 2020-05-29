@extends('layouts.app')

@section('content')

<section class="intro-section spad">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="section-title">
          <h2>Admin Panel</h2>
        </div>
      </div>
      <div class="col-lg-6">
        <p>Here you can check registered users check message and check records</p>
        <a href="contact/all" class="site-btn">Registered users</a>
        <hr>
        <a href="{{route('contact-data')}}" class="site-btn">Check messages</a>
        <hr>
        <a href="contact.html" class="site-btn">Check records</a>
      </div>
    </div>
  </div>
</section>

@endsection
