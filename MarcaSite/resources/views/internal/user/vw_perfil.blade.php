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

<div class="alert alert-primary d-none" id="alert" role="alert">
  A simple primary alert—check it out!
</div>


<div class="alert alert-warning" role="alert">
  <h4 class="alert-heading">Aviso</h4>
  <p>Estas informações serão utilizadas em suas incrições, por tanto é de extrema importância que os dados fornecidos estejam de acordo com a realidade</p>
  <hr>
  <p class="mb-0">Em caso de fraude informacional suas inscrição poderá ser suspensa, caso altere alguma informação após uma inscrição o sistema alterará  as informações em todas as demais incrições</p>
</div>
<form  name="profile_form">
        @csrf
        <input class="form-control" type="text" placeholder="Nome Completo" aria-label="default input example" name="name" value="{{$infos->name}}" disabled>
        <input class="form-control" type="text" placeholder="Email" aria-label="default input example" name="email" disabled value="{{$infos->email}}">
        <input class="form-control" value="234.234.232-09" type="text" placeholder="CPF" aria-label="default input example" name="cpf" >
        <select class="form-select" aria-label="Default select example" name="funcao">
     <option selected value="Estudante">Estudante</option>
     <option value="Associado">Associado</option>
     <option value="Profissional">Profissional</option>
    </select>

    <input class="form-control" type="text" placeholder="Cidade" aria-label="default input example" name="cidade">

    <select class="form-select" aria-label="Default select example" name="estado">
     <option selected value="AC">AC</option>
     <option value="AL">AL</option>
     <option value="AP">AP</option>
     <option value="AM">AM</option>
     <option value="BA">BA</option>
     <option value="CE">CE</option>
     <option value="ES">ES</option>
     <option value="GO">GO</option>
     <option value="MA">MA</option>
     <option value="MT">MT</option>
     <option value="MS">MS</option>
     <option value="MG">MG</option>
     <option value="PA">PA</option>
     <option value="PB">PB</option>
     <option value="PR">PR</option>
     <option value="PE">PE</option>
     <option value="PI">PI</option>
     <option value="RJ">RJ</option>
     <option value="RN">RN</option>
     <option value="RS">RS</option>
     <option value="RO">RO</option>
     <option value="RR">RR</option>
     <option value="SC">SC</option>
     <option value="SP">SP</option>
     <option value="SE">SE</option>
     <option value="TO">TO</option>
     <option value="DF">DF</option>

    </select>
    <button type="submit" class="btn btn-success">Atualizar</button>


    </form>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script>
    $(function(){
        //pega html obj
        $('form[name="profile_form"]').submit(function(){
            //previne que a página de refresh;
            event.preventDefault();
            //ajax do jquery
            $.ajax(
                {
                    url:"{{route('user.up.perfil')}}",
                    type:"post",
                    data: $(this).serialize(),
                    dataType:'json',
                    success: function(data) 
                    {
                        if(data.success===true)
                        {
                            $('#alert').removeClass('d-none');
                            $('#alert').html(data.message);

                        }
                        else
                        {
                            $('#alert').removeClass('d-none');
                            $('#alert').html(data.messagpp);
                        }
                    }
                });
        });
    });
</script>
    @endsection
</body>
</html>