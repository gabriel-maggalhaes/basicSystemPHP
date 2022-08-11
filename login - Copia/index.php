<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="">
        <form action="login.php" method="POST">
            <label for="">Usuário</label>
            <input type="text" name="usuario">
            <br>
            <label for="">Senha</label>
            <input type="password" name="senha">
            <button type="submit" name="entrar">Entrar</button>
        </form>
        <p>Não tem login? <a href="cadastro.php">Cadastrar</a></p>
    </div>
    
</body>
</html>
<?php
    include "conexao.php";
?>