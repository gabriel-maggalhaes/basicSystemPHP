<?php
    $hostname="localhost";
    $dbname="testephp";
    $user="root";
    $senha="";

    $conexao = new mysqli($hostname, $user, $senha, $dbname);
    if($conexao->connect_errno){
        echo "Falha na conexão. ".$conexao->connect_errno;
    }
?>