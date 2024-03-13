<?php
    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'banco';

    $conexao = new mysqli ($dbHost,$dbUsername,$dbPassword,$dbName);
    
   if($conexao->connect_errno){
        echo "Erro no servidor";
    
    }else{
        echo "Conexão efetuada com sucesso";
    }



?>         