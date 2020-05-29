@extends('layouts.app')

@section('content')
<h1>All Users</h1>
@foreach($user as $a)
  <div class="alert alert-info">
    <h4>{{$a->name}}</h4>
    <p>{{$a->email}}</p>
    <p>{{$a->number}}</p>
    <p><small>{{$a->created_at}}</small></p>
    <a href="{{route('contact-data-one', $a->id)}}"><button class="btn btn-warning">Details</button></a>
  </div>
@endforeach
@endsection
