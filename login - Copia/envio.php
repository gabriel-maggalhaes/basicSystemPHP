<?php
    include("conexao.php");
        if(empty($_POST['usuario']) || empty($_POST['senha'])){
            header('Location: '.'loginInvalido.php');
            $conexao.die();
        } else if(isset($_POST['usuario']) && isset($_POST['senha'])){
            $usuario = $_POST['usuario'];
            $senha = $_POST['senha'];
            $sql_verificacao = "INSERT INTO dados VALUES ('$usuario','$senha');";

            if(mysqli_query($conexao, $sql_verificacao)){
                header('Location: '.'usuarioCadastrado.php');
                $conexao.die();
            }else{
                echo "Erro";
            }
        }
    mysqli_close($conexao);

?>