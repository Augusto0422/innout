<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/comum.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/icofont.min.css">
    <title>In and Out</title>
</head>
<body>
    <form class="form-login" action="#" method="post">
        <div class="login-card card">
            <div class="card-header">
                <i class="icofont-travelling mr-2"></i>
                <span class="font-weight-light">In</span>
                <span class="font-weight-bold mx-1">And</span>
                <span class="font-weight-light">Out</span>
                <i class="icofont-runner-alt-1 ml-2"></i>
            </div>
            <div class="card-body">
                <?=include(TEMPLATE_PATH . '/messages.php')?>
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Informe seu e-mail" autofocus value="<?= $email ?>">
                </div>
                <div class="form-group">
                    <label for="password">Senha</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Informe sua senha" >
                </div>
                <div class="card-footer">
                    <button class="btn btn-lg btn-primary">Entrar</button>
                </div>
            </div>
        </div>
    </form>
</body>
</html>