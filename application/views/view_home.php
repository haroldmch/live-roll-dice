<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Bienvenida!</title>
    <link href="<?=CSS?>estilo.css" rel="stylesheet" type="text/css">
</head>
<body>
    <h1>Hola!</h1>
    <form action="<?=BASE?>" method="post">
        <input type="text" name="nombre" required><br>
        <input type="submit" value="Iniciar">
    </form>
</body>
</html>