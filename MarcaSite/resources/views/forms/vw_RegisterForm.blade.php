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
@extends('layout.layout')

@section('content')


<h1>Cadastro de úsuarios</h1>

<div class="container">
<div id="alert" class="alert alert-danger d-none" role="alert">
  A simple danger alert—check it out!
</div>

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


<script>
    $(function(){
        //pega html obj
        $('form[name="registerform"]').submit(function(){
            //previne que a página de refresh;
            event.preventDefault();
            //ajax do jquery
            $.ajax(
                {
                    url:"{{route('action.register')}}",
                    type:"post",
                    data: $(this).serialize(),
                    dataType:'json',
                    success: function(data) 
                    {
                        if(data.sucess===true)
                        {
                            $('#alert').removeClass('alert-danger');
                            $('#alert').removeClass('d-none');
                            $('#alert').addClass('alert-success');
                            $('#alert').html("Seja Bem-Vindo faça login clicando aqui: <a style='color:blue' href='{{route('form.login')}}'>LOGAR</a>")
                        }
                        else
                        {
                            $('#alert').removeClass('d-none');
                            $('#alert').html(data.error);
                        }
                    }
                });
        });
    });
</script>
@endsection
</body>
</html>