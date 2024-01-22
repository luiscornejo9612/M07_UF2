<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Benvinguts ets professor</h1>
    <h2>El teu emial és {{$email}}</h2>
    <h3> Llista de alumnes </h3>
    <table>
        <thead>
            <th>Nombre</th>
            <th>Email</th>
            <th>Id</th>
        </thead>
        <tbody>
            @foreach($alumnes as $alumno)
            <tr>
                <td>{{ $alumno->nom }}</td>
                <td>{{ $alumno->email }}</td>
                <td>{{ $alumno->id }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="/sigin"> volver </a>
</body>

</html>