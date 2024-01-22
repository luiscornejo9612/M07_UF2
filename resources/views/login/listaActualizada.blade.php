<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Benvinguts ets professor</h1>

<h3> Llista de professors </h3>
<table>
    <tr>
        <th>Nom</th>
        <th>Cognom</th>
        <th>Email</th>
        <th>Id</th>
    </tr>
    @foreach($professors as $profesor)
        <tr>
            <td>{{ $profesor->nom }}</td>
            <td>{{ $profesor->cognom }}</td>
            <td>{{ $profesor->email }}</td>
            <td>{{ $profesor->id }}</td>
            <td>
                <a href="{{ url("/edit/" . $profesor->id) }}">Editar</a>
                <a href="{{ url("/delete/" . $profesor->id) }}">Eliminar</a>
            </td>            
        </tr>
    @endforeach
</table>
<br>
<a href="/sigin"> Volver </a>
</body>
</html>