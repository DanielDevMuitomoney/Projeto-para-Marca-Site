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
<form  name="registerform">
        @csrf
        <input class="form-control" type="text" placeholder="Nome Completo" aria-label="default input example" name="name">
        <input class="form-control" type="text" placeholder="Email" aria-label="default input example" name="email">
        <select class="form-select" aria-label="Default select example" name="select">
     <option selected value="1">Usuário comum</option>
     <option value="2">Adiministrador</option>
    </select>
    <input class="form-control" type="text" placeholder="Senha" name="password1" >
    <input class="form-control" type="text" placeholder="Confirmação de Senha" name="password2" >
    <button type="submit" class="btn btn-success">Cadastrar</button>


    </form>
</div>
    @endsection
</body>
</html>