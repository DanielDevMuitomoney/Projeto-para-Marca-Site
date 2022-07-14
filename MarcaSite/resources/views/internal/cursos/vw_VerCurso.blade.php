<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Document</title>
</head>
<body style="background-color:gray;">
    @extends('layout.layout_user')

    @section('content')
<div class="container">
<div class="alert alert-danger d-none" role="alert" id="alert">
  A simple danger alert—check it out!
</div>

<div class="card" style="width: 100%;">

<form name="inscrever">
    @csrf
    <input type="hidden" name="curso" value="{{$curso->id}}">
  <img src="" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$curso->titulo}}</h5>
    <p class="card-text">{{$curso->Descricão}}.</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Data de início:{{$curso->dt_inicio}}</li>
    <li class="list-group-item">Data de témino:{{$curso->dt_final}}</li>
    <li class="list-group-item">Criado em {{$curso->created_at}}</li>
  </ul>
  <div class="card-body">
  <button type="submit"class="btn btn-success">Se inscrever</button>
  </form>
 
  </div>
</div>

</div>    

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script>
    $(function(){
        //pega html obj
        $('form[name="inscrever"]').submit(function(){
            //previne que a página de refresh;
            event.preventDefault();
            //ajax do jquery
            $.ajax(
                {
                    url:"{{route('action.registrar.inscricao')}}",
                    type:"post",
                    data: $(this).serialize(),
                    dataType:'json',
                    success: function(data) 
                    {
                        if(data.success===true)
                        {
                            $('#alert').removeClass('alert-danger');
                            $('#alert').removeClass('d-none');
                            $('#alert').addClass('alert-success');
                            $('#alert').html('Sua inscrição foi realizada com sucesso');
                            
                        }
                        else
                        {
                            $('#alert').removeClass('d-none');
                            $('#alert').html(data.error)
                        }
                    }
                });
        });
    });
</script>
    @endsection('content')
</body>
</html>