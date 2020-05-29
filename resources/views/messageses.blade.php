@extends('layouts.app')

@section('content')
<h1>All Messages</h1>
@foreach($data as $el)
  <div class="alert alert-info">
    <h4>{{$el->name}}</h4>
    <p>{{$el->email}}</p>
    <p>{{$el->number}}</p>
    <p><small>{{$el->created_at}}</small></p>
    <a href="{{route('contact-data-one', $el->id)}}"><button class="btn btn-warning">Details</button></a>
  </div>
@endforeach
@endsection
