<?php
    include "src/api/conexao.php";
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/css/reset.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="layout.css">
    <link rel="shortcut icon" href="src/img/favicon-32x32.png" type="image/x-icon">
    <script src="https://code.jquery.com/jquery-3.7.0.js"integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>

    <title>Perfil</title>
</head>

<body>
    <header>
        <div class="logo">
            <a href="#" id="btnLogo">
                <img src="src/img/logo.png" alt="Logo da Alge">
            </a>
        </div>

        <nav>
            <div class="search">
                <input type="text" class="srcIn">
                <i class="fa-solid fa-magnifying-glass srcIcon"></i>
            </div>

            <?php 
                if (isset($_SESSION["email"]) && isset($_SESSION["senha"])){
                    echo "
                        <div class='logado'>
                            <div class='menu'>
                                <div class='dropdown'>
                                    <img src='src/img/user_icon.png' alt='ícone de usuário' class='userIcon'>
                                    <button onclick='showDropdown()' class='dropBtn' id='btnDU'>
                                        <p>".$_SESSION["nome"]."</p>
                                        <i class='fa-solid fa-chevron-down'></i>
                                    </button>
                                    <div class='dropdown-container' id='myDropdown' contentEditable onblur='fechar()'>
                                        <a href='#' id='btnPerfil'>Perfil</a>
                                       
                                    </div>
                                </div>
                            </div>
                            <a href='src/api/deslogar.php' id='btnSair'>Sair</a>
                            <div class='iconsMenu'>
                                <div class='i'>
                                    <i class='fa-regular fa-bell'></i>
                                </div>
                                <div class='i'>
                                    <i id='btnIconCarrinho' class='fa-solid fa-cart-shopping'></i>
                                </div>
                            </div>
                        </div>
                        <script> console.log('Login foi feito com sucesso') </script>";
                } else { 
            ?>
            <div class='deslogado'>
                <div class='btns'>
                    <a href='src/page/login.html' id='btnEntrar'>Entrar</a>
                    <a href='src/page/singin.html' id='btnCriarConta'>Criar sua conta</a>
                </div>
                <div class='down'>
                    <ul>
                        <li><a href='#' id='btnSobre'>Sobre nós</a></li>
                        <li><a href='#' id='btnCarrinho'>Meu Carrinho <i class='fa-solid fa-cart-shopping'></i> </a>
                        </li>
                    </ul>
                </div>
            </div>
            <script> console.log('Login não foi realizado') </script>
            <?php 
                }
            ?>
        </nav>
    </header>
    <?php
        if (isset($_SESSION["nome"]) && isset($_SESSION["email"])){

    ?>
        <div class="dd sidebar" id="sidebar" tabindex="0">
            <div class="menu-item" id="menu">
                <div class="divIcon"><i class="fa-solid fa-bars"></i></div>
                <p>Minha Conta</p>
            </div>
            <div class="item" id="userProfile">
                <div class="divIcon"><i class="fa-regular fa-user"></i></div>
                <p>Meu Perfil</p>
            </div>
            <div class="item" id="request">
                <div class="divIcon"><i class="fa-solid fa-truck-fast"></i></div>
                <p>Pedidos</p>
            </div>
            <div class="item" id="favorite">
                <div class="divIcon"><i class="fa-regular fa-star"></i></div>
                <p>Favoritos</p>
            </div>
        </div>
    <?php
        }
    ?>

    <div class="conteudo">
        <iframe src="src/page/showcase.php" frameborder="0" id="tela"></iframe>
    </div>

    <script src="https://kit.fontawesome.com/8ec8caa784.js" crossorigin="anonymous"></script>
    <script src="layout.js"></script>
    
    
</body>

</html>