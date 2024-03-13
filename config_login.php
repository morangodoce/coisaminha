<?php
print_r($_REQUEST);
if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
{
    //ACESSAR O SISTEMA
    include_once('config.php');
    $email=$_POST['email'];
    $senha=$_POST['senha'];

  /*  print_r('Email: '. $_emai);
    print_r('<br>');
    print_r('Senha: '. $_emai);*/

    $sql= "SELECT * FROM coisatriste WHERE email= '$email' and senha= '$senha'";
        $result= $conexao-> query($sql);
        print_r($result);

}else{
    //não precisa 
    header('Lacation: login.php')
}
?>
