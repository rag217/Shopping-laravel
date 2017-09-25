
@extends('layouts.master')
@section('content')
<div class="row">
<div class="col-md-4 col-md-offset-4">
<h1>Sign Up</h1>
@if(count($errors) > 0 )
<div class="alert alert-danger"> 
@foreach($errors->all() as $error)
<p>{{$error}}</p>
@endforeach
</div>
@endif
<form action="{{route('user.signup')}}" method="post">
  <div class="form-group"> 
    <label for="email">Email address</label>
    <input type="text " class="form-control" id="email" name="email">
   
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  <div class="form-check">
    <label class="form-check-label">
      <input type="checkbox" class="form-check-input">
      Check me out
    </label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  {{csrf_field()}}
  
</form>
</div>
</div>
@endsection
