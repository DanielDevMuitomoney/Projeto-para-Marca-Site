<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Meus Cursos</title>
</head>
<body>
@extends('layout.layout_adm')
@section('content')
    <div class="container">
        <div class="card-group">

    @foreach($my_cursos as $mc)
    
    <div class="card">
    <img src="" class="card-img-top">
    <div class="card-body">
      <h5 class="card-title">{{$mc->titulo}}</h5>
      <p class="card-text">{{$mc->Descricão}}</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      <button type="button" class="btn btn-info">Editar</button>
      <button type="button" class="btn btn-primary">Ver</button>


    </div>
  </div>



    @endforeach
    </div>
    @endsection
</body>
</html>