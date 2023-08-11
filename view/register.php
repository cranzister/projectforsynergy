
<html lang="en">
  <head>
  <title>Регистрация на сайте</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>
   <div class="container my-3"></div>
   <form action="check.php" method="post">
   <body class= "bg-dark text-white">

   <h1 class="text-center">Регистрация на сайте</h1>

<div class="col-cm-6"></div>

    <div class="mb-3"><input placeholder="Имя" name="name" type="text" class="form-control" required></div>

    <div class="mb-3"><input placeholder="Пароль" name="password" type="password" class="form-control" required></div>

    <div class="mb-3"><input placeholder="Подтверждение пароля" name="password-confirm" type="password" class="form-control" required></div>

    <div class="mb-3"><input type="e-mail" name="email" class="form-control" placeholder="Почта" required></div>
   
    <div class="mb-3">
              <button type="submit" class="btn btn-outline-primary">Зарегистрироваться</button>
           </div>
    
</form>
  </body>
</html>