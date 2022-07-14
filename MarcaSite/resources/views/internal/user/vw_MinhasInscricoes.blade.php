<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Minhas Incrições</title>
</head>
<body>
    @extends('layout.layout_user')

    @section('content')
    <div class="container">
    <h1 style="text-align: center;">Cursos onde sou inscrito</h1>
        @foreach($registers as $r)
        <div class="card-group">
            <div class="card" style="margin: 1%;border: solid 1px;">
                <img src="" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">{{$r->titulo}}</h5>
                <p class="card-text">{{$r->Descricão}}</p>
                <a href="/curso/{{$r->fk_curso}}"><button type="button" class="btn btn-primary">Acessar</button></a>

                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                
                </div>
            </div>
        @endforeach
        </div>

    </div>
    @endsection
</body>
</html>