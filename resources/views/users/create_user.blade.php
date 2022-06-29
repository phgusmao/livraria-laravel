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
    <title>Cadastrar novo funcionário</title>
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
      <div class="col-md-6 col-sm-12">
            <div class="login-form">
      <form action="{{route('create_user')}}" method="post">
        @csrf

        <div class="form-group"><label for="email">E-mail</label><input type="text" name="email" id="email"></div>
        <div class="form-group"><label for="senha">Senha</label><input type="text" name="senha" id="senha"></div>
        <div class="form-group"><label for="user_name">Nome</label><input type="text" name="user_name" id="user_name"></div>
        <button class="btn btn-black" type="submit">Salvar</button>
    </form>
      </div>
      </div>
      </div>
</div>



</body>
</html>
