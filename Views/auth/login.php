<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo BASE_URL.'vendor/twbs/bootstrap/dist/css/bootstrap.min.css'?>">
    <link rel="stylesheet" href="<?php echo BASE_URL.'assets/css/auth/login.css'?>">
    <title>Login - Conta Azul</title>
</head>
<body>
    <div class="loginArea">
        <h3 class="loginArea-title">Login</h3>
        <form method="POST">
            <input type="text" id="email" name="email" placeholder="Digite seu e-mail" class="form-control">
            <input type="password" id="password" name="password" placeholder="Digite sua senha" class="form-control">

            <input type="submit" value="Entrar" class="btn btn-primary">
            <?php if (!empty($error)): ?>
                <div class="alert alert-warning">
                    <?php echo $error; ?>
                </div>
            <?php endif; ?>
        </form>
    </div>
</body>
</html>