<!DOCTYPE html>
<html>

<head>
    <title>Sacerdote</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>

<body>
    <h1>Datos del Sacerdote</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Título</th>
            <th>Fecha de Nacimiento</th>
        </tr>
        <tr>
            <td>{{ $sacerdote->id_sacerdote }}</td>
            <td>{{ $sacerdote->nombre_sacerdote }}</td>
            <td>{{ $sacerdote->apellidos_sacerdote }}</td>
            <td>{{ $sacerdote->titulo }}</td>
            <td>{{ $sacerdote->fecha_nacimiento }}</td>
        </tr>
    </table>
</body>

</html>