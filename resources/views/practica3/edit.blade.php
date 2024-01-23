<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
</head>
<body>
    <h1>Editar Usuario</h1>
    <form method="POST" action="/updateAlumnes/{{$alumno->id}}" >
    @method('put')
    @csrf

        <br>
        <label for = "nom">nom </label>
        <input type="text" name="nom" value="{{$alumno->nom}}">
        <br>
        <label for = "cognom">cognom </label>
        <input type="text" name="cognom" value="{{$alumno->cognom}}">
        <br>
        <label for = "email">email </label>
        <input type="email" name="email" value="{{$alumno->email}}">
        <br>
        <label for = "password">password </label>
        <input type="password" name="password" value="{{$alumno->password}}">        
        <br>
        <label for="rol"> Rol </label>
        <select name="rol" >
            <option value="Professor">Professor</option>
            <option value="Alumne">Alumne</option>
            <option value="admin">Admin</option>
        </select>
        <br>   
        <br>    
        <input type="submit" value="Enviar">   
    </form> 
</body>
</html>