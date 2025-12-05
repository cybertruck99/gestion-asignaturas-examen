<!DOCTYPE html>
<html>
<head>
    <title>Listado de Asignaturas</title>
</head>
<body>
    <h1>Asignaturas Registradas</h1>

    <form action="/asignaturas/crear" method="POST">
        @csrf
        <label>Nombre:</label>
        <input type="text" name="nombre" required><br>

        <label>Nivel:</label>
        <input type="text" name="nivel" required><br>

        <button type="submit">Guardar</button>
    </form>

    <hr>

    <h2>Lista Completa</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Nivel</th>
        </tr>

        @foreach($asignaturas as $asignatura)
        <tr>
            <td>{{ $asignatura->id }}</td>
            <td>{{ $asignatura->nombre }}</td>
            <td>{{ $asignatura->nivel }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
