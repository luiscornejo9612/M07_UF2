<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Benvinguts ets admin</h1>
    <h3> Llista de prpfessors </h3>
    <table>
        <thead>
            <th>Nombre</th>
            <th>Cognom</th>
            <th>Email</th>
            <th>Id</th>
        </thead>
        <tbody>
            @foreach($professors as $profesor)
            <tr>
                <td>{{ $profesor->nom }}</td>
                <td>{{ $profesor->cognom }}</td>
                <td>{{ $profesor->email }}</td>
                <td>{{ $profesor->id }}</td>
                <td>
                    <a href="{{ url('/editProfessor/'. $profesor->id) }}">Editar</a>
                </td>
                <td>
                    <form action=" {{ ('/deleteProfessor/' . $profesor->id)}}" method="post">
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
    <a href="/añadirUser">añadir Usuario</a>
    <br>
    <br>
    <a href="/sigin"> volver </a>
</body>

</html>