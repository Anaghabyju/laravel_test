

@if(Session::has('danger'))
<div class="alert alert-danger">
  {{Session::get('danger')}}
</div>
@endif<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>

  <div class="card" style="width:30%;margin-left:20%; margin-top:5%;" >
  <div class="card-body"style="text-align:center;">
  <b>name : {{ $data->name}}</b><br><br>
  <b>email : {{ $data->email}}</b><br><br>
  <b>place :{{ $data->place}}</b><br><br>
  <b>mobile :{{ $data->mobile}}</b><br><br>
  <a href="{{ route('edit',$data->id) }}" class="btn btn-success">edit</a>
  </div>
  </div>
  </body>
</html>