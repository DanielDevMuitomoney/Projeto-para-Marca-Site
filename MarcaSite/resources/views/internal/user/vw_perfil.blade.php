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
    @extends('layout.layout_user')
    @section('content')
<h1>Bem vindo ao seu perfil</h1>

<div class="container">
<div class="alert alert-warning" role="alert">
  <h4 class="alert-heading">Aviso</h4>
  <p>Estas informações serão utilizadas em suas incrições, por tanto é de extrema importância que os dados fornecidos estejam de acordo com a realidade</p>
  <hr>
  <p class="mb-0">Em caso de fraude informacional suas inscrição poderá ser suspensa, caso altere alguma informação após uma inscrição o sistema alterará  as informações em todas as demais incrições</p>
</div>
<form  name="registerform">
        @csrf
        <input class="form-control" type="text" placeholder="Nome Completo" aria-label="default input example" name="name" disabled>
        <input class="form-control" type="text" placeholder="Email" aria-label="default input example" name="email" disabled>
        <input class="form-control" type="text" placeholder="CPF" aria-label="default input example" name="email" >
        <select class="form-select" aria-label="Default select example" name="select">
     <option selected value="1">Estado</option>
     <option value="2">Adiministrador</option>
    </select>

    <input class="form-control" type="tel" placeholder="Cidade" aria-label="default input example" name="city">

    <select class="form-select" aria-label="Default select example" name="select">
     <option selected value="1">Estudante</option>
     <option value="2">Profissional</option>
     <option value="2">Associado</option>
    </select>
    <button type="submit" class="btn btn-success">Atualizar</button>


    </form>
</div>
    @endsection
</body>
</html>