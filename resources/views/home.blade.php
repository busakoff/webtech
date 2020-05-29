@extends('layouts.app')

@section('content')
<section class="intro-section spad">
  <div class="container">
    <div class="row justify-content-center">
        <div>


              <div class="section-title">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <h2>{{ Auth::user()->name }} </h2>
                <h2>You are logged in!</h2>
              </div>


            </div>

    </div>
</div>
<div class="container">

</div>
</section>
@endsection
