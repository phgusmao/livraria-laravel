<style>
        body {
    font-family: "Lato", sans-serif;
}



.main-head{
    height: 150px;
    background: #FFF;

}

.sidenav {
    height: 100%;
    background-color: #000;
    overflow-x: hidden;
    padding-top: 20px;
}


.main {
    padding: 0px 10px;
}

@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
}

@media screen and (max-width: 450px) {
    .login-form{
        margin-top: 10%;
    }

    .register-form{
        margin-top: 10%;
    }
}

@media screen and (min-width: 768px){
    .main{
        margin-left: 40%;
    }

    .sidenav{
        width: 40%;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
    }

    .login-form{
        margin-top: 80%;
    }

    .register-form{
        margin-top: 20%;
    }
}


.login-main-text{
    margin-top: 20%;
    padding: 60px;
    color: #fff;
}

.login-main-text h2{
    font-weight: 300;
}

.btn-black{
    background-color: #000 !important;
    color: #fff;
}

</style>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar livro</title>
    <style>
        label {
            float:left;
            display:block;
            width: 90px;
        }
    </style>
</head>
<body>

<div class="sidenav">
         <div class="login-main-text">
            <h2>BookStore<br> Página de login</h2>
            <p>Faça login ou cadastre-se na nossa plataforma.</p>
         </div>
      </div>
      <div class="main">
      <form action="{{route('refresh_book', ['id' => $book->id])}}" method="post">
     @csrf

        <div class="form-group"><label for="isbn">ISBN</label><input type="text" name="isbn" id="isbn" value="{{$book->isbn}}"></div>
        <div class="form-group"><label for="autor">Autor</label><input type="text" name="autor" id="autor" value="{{$book->autor}}"></div>
        <div class="form-group"><label for="preco">Preço</label><input type="text" name="preco" id="preco" value="{{$book->preco}}"></div>
        <div class="form-group"><label for="name">Nome</label><input type="text" name="name" id="name" value="{{$book->name}}"></div>
        <div class="form-group"><label for="description">Descrição</label><input type="text" name="description" id="description" value="{{$book->description}}"></div>
        <button class="btn btn-black" type="submit">Salvar</button>
        </form>
      </div>
</div>



</body>
</html>
