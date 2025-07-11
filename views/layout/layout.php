<?php
    // Detectar base URL automáticamente
    $baseUrl = dirname($_SERVER['SCRIPT_NAME']); // Devuelve /actividad-4/public
    $baseUrl = rtrim($baseUrl, '/');
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Aplicación CRUD</title>
    <link rel="stylesheet" href="../public/css/style.css">
</head>
<body>
    <nav>
    <a href="/actividad-4/public/index.php?entidad=product&action=index">Productos</a>
    <a href="/actividad-4/public/index.php?entidad=marca&action=index">Marcas</a>
    </nav>




    <div class="container">
        <?php include($view); ?>
    </div>
</body>
</html>
