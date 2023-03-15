<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="loginPassword.php" method="post" enctype="multipart/form-data">
    <p>Имя пользователя: <input type="text" name="login"></p>
    <p1>Почта: <input type="text" name="email"></p1>
    <p>Пароль: <input type="password" name="password"></p>
    <p>Подтверждение пароля: <input type="password" name="doublePassword"></p>
    <p>Загрузите фотографию: <input type="file" name="photo"></p>
    <input type="submit" value="Зарегистрироваться" name="submit">
</form>
</body>
</html>
