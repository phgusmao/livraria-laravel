<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
        margin: 0;
        padding: 0;
            font-family: sans-serif;
        }

        a {text-decoration: none;}

        .container {
        margin: auto;
        width: 1000px;
        }

        ul {
        padding-left: 0;
            margin-top: 0;
            margin-bottom: 0;
        list-style: none;
        }

        nav {
        background: #0ca0d6;
        font-size: 0;
        position: relative;
            
        }

        nav > ul > li {
        display: inline-block;
            font-size: 14px;
            padding: 0 15px;
            position: relative;
        }

        nav > ul > li > a {
        color: #fff;
            display: block;
            padding: 20px 0;
            border-bottom: 3px solid transparent;
            transition: all .3s ease;
        }
        nav > ul > li:hover > a {
        color: #444; 
            border-bottom: 3px solid #444;
        }

        .mega-menu {
        background: #eee;
            visibility: hidden;
            opacity: 0;
            transition: visibility 0s, opacity 0.5s linear;
            position: absolute;
            left: 0;
            width: 100%;
            padding-bottom: 20px;
        }
        .mega-menu h3 {color: #444;}

        .mega-menu .container {
            display: flex;
        }
        .mega-menu .item {
        flex-grow: 1;
            margin: 0 10px;
        }
        .mega-menu .item img {
            width: 100%;
        }
        .mega-menu a {
        border-bottom: 1px solid #ddd;
            color: #4ea3d8;
            display: block;
            padding: 10px 0;
        }
        .mega-menu a:hover {color: #2d6a91;}


        .dropdown {position: static;}

        .dropdown:hover .mega-menu {
            visibility: visible;
            opacity: 1;
        }
    </style>
</head>
<body>
    <nav>
        <ul class="container">
          <li><a href='#'>Home</a></li>
          <li class="dropdown"><a href="#">Livros</a>
            <div class='mega-menu'>
                <div class="container">
                    <div class="item">
                        <h3>Mais procurados</h3>
                        <ul>
                            <li><a href="">Fantasia</a></li>
                            <li><a href="">Romance</a></li>
                            <li><a href="">Drama</a></li>
                            <li><a href="">Terror</a></li>
                            <li><a href="">Suspense</a></li>
                        </ul>
                    </div>
                    <div class="item">
                        <h3>Lançamentos</h3>
                        <ul>
                            <li><a href="">Fantasia</a></li>
                            <li><a href="">Romance</a></li>
                            <li><a href="">Drama</a></li>
                            <li><a href="">Terror</a></li>
                            <li><a href="">Suspense</a></li>
                        </ul>
                    </div>
                    <div class="item">
                        <h3>Clássicos</h3>
                        <ul>
                            <li><a href="">Fantasia</a></li>
                            <li><a href="">Romance</a></li>
                            <li><a href="">Drama</a></li>
                            <li><a href="">Terror</a></li>
                            <li><a href="">Suspense</a></li>
                        </ul>
                    </div>
                </div>
            </div>
          </li>
          <li class="dropdown"><a href="#">Gêneros</a>
            <div class='mega-menu'>
                <div class="container">
                    <div class="item">
                        <ul>
                            <li><a href="">Fantasia</a></li>
                            <li><a href="">Romance</a></li>
                            <li><a href="">Drama</a></li>
                            <li><a href="">Terror</a></li>
                            <li><a href="">Suspense</a></li>
                        </ul>
                    </div>
                </div>
            </div>
          </li>
            
</body>
</html>