<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    @extends('layout.layout_adm')
    @section('content')
    <h1>Tabela do Curso {{$curso->titulo}}</h1>
    <div class="container" style="margin-top:2vh">
    <table class="table table-dark table-striped">
    <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>
      <th scope="col">CPF</th>
      <th scope="col">Data da Inscrição</th>
      <th scope="col">Status</th>
      <th scope="col">Editar</th>
      <th scope="col">Exclusão</th>
    </tr>
  </thead>
  <tbody>
    @foreach($tb as $t)
    <tr>

      <td>{{$t->name}}</td>
      <td>{{$t->email}}</td>
      <td>000.000</td>
      <td>{{$t->dt_register}}</td>

      <td>{{$t->status}}</td>
      <td><a href=""><button type="button" class="btn btn-primary">Editar</button></a>
      <td><a href=""><button type="button" class="btn btn-danger">Excluir</button></a>
</td>
    </tr>
    @endforeach
  </tbody>

    </table>
    </div>
    @endsection
</body>
</html>