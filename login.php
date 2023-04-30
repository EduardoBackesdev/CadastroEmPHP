<?php

$pdo = new PDO('mysql:host=localhost;dbname=login_usuarios', 'root', '');

if(isset($_POST['acao'])){
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $verifica = $pdo->prepare("SELECT * FROM `usuarios_cadastrados` WHERE nome = ? AND senha = ?");
    $verifica->execute(array($nome,$senha));

    if($verifica->rowCount()== 1){
        $verifica->fetch();
        header("location: home.php");
    }
    else{?>
    <script>alert('Login incorreto, ou não existe')</script>
    <?php
    }    
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>

<body>
    <h2>Faça seu Login</h2>
    <div class="cadastro-form">
    <form action="" method="post">
        <input type="text" name="nome" placeholder="Nome de Usuario" required>
        <input type="password" name="senha" placeholder="Senha" required>
        <input id="button" type="submit" value="Entrar" name="acao">
    </form>
    </div>
    
</body>

</html>