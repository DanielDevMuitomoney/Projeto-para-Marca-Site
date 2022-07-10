<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Cursos</title>
</head>
<body>

@extends('layout.layout_user')
@section('content')
<div class="alert alert-warning" role="alert">
  É necessário completar suas informações para a inscrição em cursos <a href="#" class="alert-link">Clique aqui para completar seu cadastro</a>. Agradeçemos pela atenção
</div>

<a href="{{route('action.logout')}}">Logout</a>
<div class="container"></div>
<div class="card-group">
@foreach($cursos as $c)

  <div class="card" style="margin: 1%;border: solid 1px;">
    <img src="{{$c->img_path}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$c->titulo}}</h5>
      <p class="card-text">{{$c->Descricão}}</p>
      <a href="/cursos/{{$c->id}}"><button type="button" class="btn btn-primary">Acessar</button></a>

      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>



@endforeach

@endsection

</body>
</html>