<?php
session_start();
//print_r($_REQUEST);                 //confirmar se envia dados
if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
{
    //ACESSAR O SISTEMA
    include_once('config.php');
    $email=$_POST['email'];
    $senha=$_POST['senha'];

  /*  print_r('Email: '. $_emai);
    print_r('<br>');
    print_r('Senha: '. $_emai);*/

    $sql= "SELECT * FROM coisa_triste WHERE email= '$email' and senha= '$senha'";
       // print_r($result); 
       $result=$conexao-> query($sql);

       if(mysqli_num_rows($result)<1){
          unset($_SESSION['email']);
          unset($_SESSION['senha']);
          header('Location: login.php');
       }else{
    $_SESSION['email']=$email;
    $_SESSION['senha']=$senha;
    header('Location: sistema.php');
       }
    
  
    //não precisa   
    header('Location: login.php');
  
}else{
  heaer('Location: login.php');
}
?>
