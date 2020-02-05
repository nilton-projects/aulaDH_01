<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
<?php
    session_start();
    if (isset($_SESSION['erro'])) {
        echo '<span style="color:red">' . $_SESSION['erro'] . '</span>';
        unset($_SESSION['erro']);
    }
    ?>
    <form action="login.php" method="POST">
        <div>
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email">
        </div>
        <div>
            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha">
        </div>
        <button>Login</button>
    </form>


</body>
</html>