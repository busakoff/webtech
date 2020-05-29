@extends('layouts.app')

@section('content')
  <h1>Edit User</h1>

  <form action="{{route('contact-update-submit', $data->id)}}" method="post">
    @csrf

    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" name="name" value="{{$data->name}}" placeholder="Enter Name" id="name" class="form-control">
    </div>

    <div class="form-group">
      <label for="email">E-mail</label>
      <input type="text" name="email" value="{{$data->email}}" placeholder="Enter email" id="email" class="form-control">
    </div>

    <div class="form-group">
      <label for="number">Number</label>
      <input type="text" name="number" value="{{$data->number}}" placeholder="Enter number" id="number" class="form-control">
    </div>

    <div class="form-group">
      <label for="message">Message</label>
      <textarea type="text" name="message" id="message" value="{{$data->message}}" class="form-control" placeholder="Enter password"></textarea>
    </div>

    <button type="submit" class="btn btn-success">Update</button>
  </form>
@endsection
