<!DOCTYPE html>
<html>
<head>
    <title>Productos</title>
</head>
<body>
    <h1>Lista de Productos</h1>
    <a href="?action=create" class="btn">Crear nuevo producto</a>
    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Marca</th>
            <th>Precio</th>
            <th>Acciones</th>
        </tr>
        <?php foreach ($products as $p): ?>
        <tr>
            <td><?= $p['id'] ?></td>
            <td><?= $p['nombre'] ?></td>
            <td><?= $p['marca_id'] ?></td>
            <td>$<?= number_format($p['precio'], 2) ?></td>
            <td>
                <a href="?action=edit&id=<?= $p['id'] ?>">Editar</a> |
                <a href="?action=delete&id=<?= $p['id'] ?>" onclick="return confirm('¿Eliminar?')">Eliminar</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
