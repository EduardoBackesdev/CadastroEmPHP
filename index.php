<?php
$pdo = new PDO('mysql:host=localhost;dbname=login_usuarios', 'root', '');

if(isset($_POST['acao'])){
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];



$sql = $pdo->prepare(' INSERT INTO `usuarios_cadastrados` VALUES (null, ?, ?)');

$sql->execute(array($nome,$senha));
?>
<script>alert('parabéns voce foi cadastrado com sucesso')</script>
<?php
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cadastro</title>
</head>

<body>
    <h2>Seu Cadastro</h2>
    <div class="cadastro-form">
    <form action="" method="post">
        <input type="text" name="nome" placeholder="Nome de Usuario" required>
        <input type="password" name="senha" placeholder="Senha" required>
        <input id="button" type="submit" value="Cadastrar" name="acao">
        <a href="login.php">Ja tem conta? Entre aqui</a>
    </form>
    </div>
</body>

</html>