<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Cadastro de Cursos</title>
</head>
<body style="background-color: gray">
    @extends('layout.layout_adm')
    @section('content')
    <a href="{{route('action.logout')}}">Logout</a>
    <h1>Cadastro de Cursos</h1>
    <div class="container">

    <form name="registerCurse">
        @csrf
        <input class="form-control" type="text" placeholder="Titulo" aria-label="default input example" name="titulo">
      
        <div class="form-floating">
  <textarea class="form-control" placeholder="Leave a comment here" name="desc"></textarea>
  <label for="floatingTextarea">Descrição</label>
</div>

<input class="form-control" type="number" placeholder="Valor" aria-label="default input example" name="valor">
<label for="">Data de início</label>
<input class="form-control" type="date" placeholder="Data de início" aria-label="default input example" name="dt_inicio">
<label for="">Data de término</label>
<input class="form-control" type="date" placeholder="Data de término" aria-label="default input example" name="dt_fim">
<input class="form-control" type="number" placeholder="Quantidade max. de inscrições" aria-label="default input example" name="qtd_max">

<input type="file" class="form-control" id="inputGroupFile02">


    <button type="submit" class="btn btn-success">Cadastrar</button>


    </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>


    
    <script>
    $(function(){
        //pega html obj
        $('form[name="registerCurse"]').submit(function(){
            //previne que a página de refresh;
            event.preventDefault();
            //ajax do jquery
            $.ajax(
                {
                    url:"{{route('action.create_curse')}}",
                    type:"post",
                    data: $(this).serialize(),
                    dataType:'json',
                    success: function(data) 
                    {
                        if(data.success===true)
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