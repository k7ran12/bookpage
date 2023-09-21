<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Contacto interesado</h1>
        <table class="table">
            <tr>
                <td>Nombre:</td>
                <td>{{ $nombre }}</td>
            </tr>
            <tr>
                <td>Mensaje:</td>
                <td>{{ $mensaje }}</td>
            </tr>
        </table>
    </div>
</body>
</html>