<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Estilo de la tabla */
        table {
            border-collapse: collapse;
            width: 100%;
        }

        /* Estilo de las celdas de la tabla */
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        /* Estilo de las filas impares (opcional) */
        tr:nth-child(odd) {
            background-color: #f2f2f2;
        }

        /* Estilo de los enlaces dentro de las celdas */
        td a {
            text-decoration: none;
            padding: 5px 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            margin-right: 5px;
            color: #333;
        }
    </style>
</head>
<body>
<h1>Benvinguts ets professor</h1>
    <h3> Llista de alumnes </h3>
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
                    <a href="{{ url("/edit/" . $alumno->id) }}">Editar</a>
                    <a href="{{ url("/delete/" . $alumno->id) }}">Eliminar</a>
                </td> 
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>