<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Benvinguts ets professor</h1>
    <h3> Llista de alumnes </h3>
    <table>
        <thead>
            <th>Nombre</th>
            <th>Cognom</th>
            <th>Email</th>
            <th>Id</th>
        </thead>
        <tbody>
            @foreach($alumnes as $alumno)
            <tr>
                <td>{{ $alumno->nom }}</td>
                <td>{{ $alumno->cognom }}</td>
                <td>{{ $alumno->email }}</td>
                <td>{{ $alumno->id }}</td>
                <td>
                    <a href="{{ url('/editAlumnes/'. $alumno->id) }}">Editar</a>
                </td>
                <td>
                    <form action=" {{ ('/deleteAlumnes/' . $alumno->id)}}" method="post">
                        @method("delete")
                        @csrf
                        <input type="submit" value="Eliminar">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <br>
    <br>
    <a href="/añadirUserAlumne">añadir Usuario</a>
    <br>
    <br>
    <a href="/sigin"> volver </a>
</body>

</html>