<!DOCTYPE html>
<html>
<head>
    <title>Авторизация на сайте</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body class="bg-dark text-white">
    <div class="container">
        <h1 class="text-center my-3">Авторизация на сайте</h1>
        <div class="col-sm-6 mx-auto">
            <form action="uspesnivxod/usoesnov.php" method="post">
                <div class="mb-3">
                    <input type="email" name="email" class="form-control" placeholder="Email">
                </div>
                <div class="mb-3">
                    <input type="password" name="pass" class="form-control" placeholder="Пароль">
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-outline-primary">Войти</button>
                   
                </div>
        </div>
    </div>
</body>
</html>