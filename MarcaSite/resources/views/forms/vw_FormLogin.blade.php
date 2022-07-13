<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/login.css">
    <title>Document</title>
</head>
<body>
@extends('layout.layout')

@section('content')
<h1>Logar</h1>

<div class="container">
<div class="alert alert-danger d-none" role="alert" id="alert">
  This is a danger alert—check it out!
</div>
    <form name="loginform">
        @csrf
        <input class="form-control" type="text" placeholder="Email" aria-label="default input example" name="email">
      
    <input class="form-control" type="text" placeholder="Senha"  name="password">
    <select class="form-select" aria-label="Default select example" name="select">
     <option selected value="Comum">Usuário comum</option>
     <option value="Adm">Adiministrador</option>
     </select>
    <button type="submit" class="btn btn-success">logar</button>


    </form>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script>
    $(function(){
        //pega html obj
        $('form[name="loginform"]').submit(function(){
            //previne que a página de refresh;
            event.preventDefault();
            //ajax do jquery
            $.ajax(
                {
                    url:"{{route('action.login')}}",
                    type:"post",
                    data: $(this).serialize(),
                    dataType:'json',
                    success: function(data) 
                    {
                        if(data.success===true && data.menssage=='ADM')
                        {
                            window.location.href="/adm";
                        }
                        else if(data.success===true && data.menssage=='Comum')
                        {
                            window.location.href="/cursos";
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
@endsection

</body>
</html>