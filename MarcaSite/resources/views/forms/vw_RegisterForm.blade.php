<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/register.css">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Marca Site</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('form.cadastro')}}">Cadastro</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('form.login')}}">Login</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<h1>Cadastro de úsuarios</h1>

<div class="container">
    <form action="" method="post">
        <input class="form-control" type="text" placeholder="Nome Completo" aria-label="default input example">
        <input class="form-control" type="text" placeholder="Email" aria-label="default input example">
        <select class="form-select" aria-label="Default select example">
     <option selected>Selecione o tipo de úsuario</option>
     <option value="1">Aluno</option>
     <option value="2">Adiministrador</option>
    </select>
    <input class="form-control" type="text" placeholder="Senha" >
    <input class="form-control" type="text" placeholder="Confirmação de Senha" >
    <button type="button" class="btn btn-success">Cadastrar</button>


    </form>
</div>



</body>
</html>