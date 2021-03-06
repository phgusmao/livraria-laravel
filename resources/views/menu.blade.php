<style>
    body {
    font-family: "Lato", sans-serif;
}



.main-head{
    height: 150px;
    background: #FFF;

}

.sidenav {
    height: 20%;
    background-color: #000;
    overflow-x: hidden;
    overflow-y: hidden;
    padding-top: 20px;
    color: #ffff;
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
        width: 100%;
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

ul li {
    display: inline-block;
    padding-right: 20px;
}

ul li a:hover{
    background-color: #ffff;
    color: #000;
}

ul {
    padding-left: 500px;
}

ul li a{
    color: #ffff;

}
</style>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<div class="sidenav">
         <div>
            <h2>BookStore</h2>
            <p>Bem-vindo a maior plataforma de locação de livro.</p>
         </div>
         <div>
            <ul>
                <li><a href="">Home</a></li>
                <li><a href="{{route('info_book')}}">Livros</a></li>
                <li><a href="">Gêneros</a></li>
                <li><a href="{{route('info_user')}}">Usuários</a></li>
                <li><a href="{{route('login')}}">Sair</a></li>
            </ul>
         </div>
      </div>
      <div class="main">
      </div>
