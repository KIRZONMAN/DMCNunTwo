<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Personas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-light">

    <div class="container mt-5">
        <h1 class="text-center">Lista de Personas</h1>

        <table class="table table-dark table-bordered mt-4">
            <thead class="thead-light">
                <tr>
                    <th>Nombre</th>
                    <th>Edad</th>
                    <th>Rol</th>
                </tr>
            </thead>
            <tbody>
                @foreach($personas as $persona)
                    <tr>
                        <td>{{ $persona->nombre }}</td>
                        <td>{{ $persona->edad }}</td>
                        <td>{{ $persona->rol }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>
</html>
