<!DOCTYPE html>
<html>
<head>
    <title>Crear Producto</title>
</head>
<body>
    <h1>Nuevo Producto</h1>
    <form method="post" action="?action=store">
        <label>Nombre:</label><br>
        <input type="text" name="nombre" required><br><br>

        <label>Marca:</label><br>
        <select name="marca_id" required>
            <option value="">-- Seleccione una marca --</option>
            <?php foreach ($marcas as $marca): ?>
                <option value="<?= $marca['id'] ?>">
                    <?= htmlspecialchars($marca['nombre']) ?>
                </option>
            <?php endforeach; ?>
        </select><br><br>

        <label>Precio:</label><br>
        <input type="number" step="0.01" name="precio" required><br><br>

        <button type="submit">Guardar</button>
        <a href="index.php" class="btn">Cancelar</a>
    </form>
</body>
</html>
