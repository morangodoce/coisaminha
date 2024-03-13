<?php
    session_start();
    
    //verifica se a sessao ests iniciada ou nao
    if((!isset($_SESSION['email'])== true) and (!isset($_SESSION['senha']) == true)){

        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');

    
    }else{

        $logado = $_SESSION['email'];
    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .navbar {
            overflow: hidden;
            background-color: #333;
        }

        .navbar a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
        }

        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }

        .navbar a.active {
            background-color: #04AA6D;
            color: white;
        }

        .contact {
            background-color: #fff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            margin: 20px auto;
            text-align: center;
        }
    </style>

</head>
<body>
    <div class="navbar">
        <a class="active" href="home.php">pagina inicial</a>
        <a href="#news">Minha Conta</a>
        <a href="#contact">Atendimento</a>
        <a href="#float:right" href= "sair.php">sair</a>
    </div>

    <div style="padding: 20px"> </div>
    
    <div classe="contact">

    <div class="contact">
        <?php
            echo "<h2>seja bem vindo ao Sistema <br> $logado </h2>"
        ?>
    </div>




</body>
</html>