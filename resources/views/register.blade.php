@extends('index')
@section('content')
@if(Session::has('danger'))
<div class="alert alert-danger">
  {{Session::get('danger')}}
</div>
@endif

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>

  <div class="card" style="width:50%;margin-left:20%; margin-top:5%;">
  <div class="card-body">
  <form action="{{ route('create') }}" method="post">
    @csrf
  <div class="row mb-3" style="margin-top: 5%;margin-left: 10%;">
    <label for="inputEmail3" class="col-sm-2 col-form-label">name</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="inputEmail3" name="name">
    </div>
  </div>
  <div class="row mb-3" style="margin-top: 5%;margin-left: 10%;">
    <label for="inputEmail3" class="col-sm-2 col-form-label">email</label>
    <div class="col-sm-8">
      <input type="email" class="form-control" id="inputEmail3" name="email">
    </div>
  </div>
  <div class="row mb-3"style="margin-left:10%;marhin-top:10%;">
    <label for="inputEmail3" class="col-sm-2 col-form-label">place</label>
    <div class="col-sm-8">
  <select class="form-select" aria-label="Default select example" name="place"> 
  <option selected>choose your place</option>
  <option value="kozhicode">kozhicode</option>
  <option value="malappuram">malappuram</option>
  <option value="kannur">kannur</option>
</select>
    </div>
    </div>
    <div class="row mb-3" style="margin-top: 5%;margin-left: 10%;">
    <label for="inputEmail3" class="col-sm-2 col-form-label">mobile</label>
    <div class="col-sm-8">
      <input type="tell" class="form-control" id="inputEmail3" name="mobile">
    </div>
  </div>
    <div class="row mb-3"style="margin-left: 10%;">
    <label for="inputEmail3" class="col-sm-2 col-form-label">password</label>
    <div class="col-sm-8">
      <input type="password" class="form-control" id="inputEmail3" name="password">
    </div>
  </div>
  <button type="submit" class="btn btn-primary" style="margin-left: 40%;">Register</button>
</form>
  </div>
</div>
 @endsection
  </body>
</html>