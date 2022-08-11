<?php
include "conexao.php";
    if(empty($_POST['usuario']) || empty($_POST['senha'])){
       header('Location: '.'loginInvalido.php');
       $conexao.die();
    }else if(isset($_POST['usuario']) && isset($_POST['senha'])){
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];
        $sql_consulta = "SELECT * FROM dados WHERE usuario='$usuario';";
        $select = mysqli_query($conexao, $sql_consulta);
        $arrayUser = mysqli_fetch_array($select);
        $usuarioArray = $arrayUser['usuario'];

        $sql_senha = "SELECT * FROM dados WHERE senha='$senha';";
        $selectSenha = mysqli_query($conexao, $sql_senha);
        $arraySenha = mysqli_fetch_array($selectSenha);
        $senhaArray = $arraySenha['senha'];


        if($usuario == $usuarioArray && $senha == $senhaArray){
            header('Location: '.'usuarioConectado.php');
            $conexao.die();
        } else {
            header('Location: '.'loginInvalido.php');
            $conexao.die();
        }
    }
    mysqli_close($conexao);
?>