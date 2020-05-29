@extends('layouts.app')

@section('content')
<section class="contact-section">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 p-0">
        <!-- Map -->
        <div class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1453.2956470228894!2d76.90126565802439!3d43.2390279947844!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDPCsDE0JzIwLjUiTiA3NsKwNTQnMDguNSJF!5e0!3m2!1sru!2skz!4v1576337331280!5m2!1sru!2skz" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe></div>

      </div>
      <div class="col-lg-6 p-0">
        <div class="contact-warp">
          <div class="section-title mb-0">
            <h2>About Us</h2>
          </div>
          <p>We are a special dance studio with its unique atmosphere, where learning to dance is easy! Whether it’s sports ballroom dancing, Latin American dances, modern dances or other directions, whatever you choose - with us you will quickly master any direction! We adhere to the highest standards of quality training, and are the first to bring to Kazakhstan a wonderful and incredibly effective dance teaching methodology.</p>
          <ul>
            <li>st. Abay, 80</li>
            <li>+7 (747) 590 07 09</li>
            <li>dance.studio@gmail.com</li>
          </ul>
          <form action="{{route('contact-form')}}" method="post">
            @csrf
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" name="name" placeholder="Enter Name" id="name" class="form-control">
            </div>

            <div class="form-group">
              <label for="email">E-mail</label>
              <input type="text" name="email" placeholder="Enter email" id="email" class="form-control">
            </div>

            <div class="form-group">
              <label for="number">Number</label>
              <input type="text" name="number" placeholder="Enter number" id="number" class="form-control">
            </div>

            <div class="form-group">
              <label for="message">Message</label>
              <textarea name="message" placeholder="Enter message" id="message" class="form-control"></textarea>
            </div>

            <button type="submit" class="site-btn">Send message</button>
          </form>


          <!--<form class="contact-from" action="{{route('contact-form')}}" method="post">
            @csrf
            <div class="row">
              <div class="col-md-6">
                <input type="text" placeholder="Your name" id="name">
              </div>
              <div class="col-md-6">
                <input type="text" placeholder="Your e-mail" id="email">
              </div>
              <div class="col-md-12">
                <input type="text" placeholder="Number" id="number">
                <textarea placeholder="Message" id="message"></textarea>
                <button type="submit" class="site-btn">Send message</button>
              </div>
            </div>
          </form>-->
        </div>
      </div>
    </div>
  </div>
@endsection
