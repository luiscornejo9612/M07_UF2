<!-- En tu archivo de vista (por ejemplo, usuarios/editar.blade.php o editar.html) -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
</head>
<body>

    <h1>Editar Usuario</h1>
    <form action="/actualizar" method="post">
        <label for = "id">id </label>
        <input type="text" name="id">
        <br>
        <label for = "nom">nom </label>
        <input type="text" name="nom">
        <br>
        <label for = "cognom">cognom </label>
        <input type="text" name="cognom">
        <br>
        <label for = "email">email </label>
        <input type="email" name="email">
        <br>
        <label for = "password">password </label>
        <input type="password" name="password">        
        <br>
        <button type="submit">Actualizar Usuario</button>
    </form>

</body>
</html>
