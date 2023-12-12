<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1> Crea tu usuario </h1>
    <form action="/mostrarInfo" method="post">
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
        <label for="rol"> Rol </label>
        <select name="rol">
            <option value="Professor">Professor</option>
            <option value="Alumne">Alumne</option>
        </select>
        <br>
        <label for="actiu"> Activo </label>
        <input type="checkbox" name="actiu">
        <br>            
        <input type="submit" value="Enviar">   
    </form> 
    <a href="/sigin"> Iniciar sesión</a>
</body>
</html>