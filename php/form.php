<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (isset($_GET['nombre']) && !empty($_GET['nombre']) && isset($_GET['email']) && !empty($_GET['email'])) {
        $nombre = $_GET['nombre'];
        $correo = $_GET['email'];

        echo "Registro exitoso";
    } else {
        echo "Registro incompleto";
    }
    ?>
</body>

</html>