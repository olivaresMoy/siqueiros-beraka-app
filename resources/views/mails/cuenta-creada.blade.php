<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aviso de cuenta creada</title>
</head>
<body>
    La cuenta ha sido creada:
    <hr>
    <b>Usuario:</b> {{ $msg['name'] }}<br>
    <b>Email:</b> {{ $msg['email'] }}<br>
    <hr>
</body>
</html>