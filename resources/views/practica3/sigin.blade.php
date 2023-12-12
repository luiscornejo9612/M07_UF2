<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1> Iniciar session</h1>
    <form action="/login" method="post">
        <div>
            <label for="email"> Email </label>
            <input type="email" name="email">
        </div>
        <div>
            <label for="password"> Contraseña </label>
            <input type="password" name="password">
        </div>
        <div>
            <input type="checkbox" id="remember" name="remember" value="remember">
            <label for="remember"> Remember</label>
        </div>
        <input type="submit" value="Enviar ">
    </form>
    <a href="/sigup"> Crear Usuario</a>

</body>
</html>