<!DOCTYPE html>
<html>
<head>
    <title>Editar Producto</title>
</head>
<body>
    <h1>Editar Producto</h1>
    <form method="post" action="?action=update&id=<?= $product['id'] ?>">
        <label>Nombre:</label><br>
        <input type="text" name="nombre" value="<?= $product['nombre'] ?>" required><br><br>

         <label>Marca:</label><br>
        <select name="marca_id" required>
            <option value="">-- Seleccione una marca --</option>
            <?php foreach ($marcas as $marca): ?>
                <option value="<?= $marca['id'] ?>"
                    <?= ($marca['id'] == $product['marca_id']) ? 'selected' : '' ?>>
                    <?= htmlspecialchars($marca['nombre']) ?>
                </option>
            <?php endforeach; ?>
        </select><br><br>

        <label>Precio:</label><br>
        <input type="number" step="0.01" name="precio" value="<?= htmlspecialchars($product['precio']) ?>" required><br><br>

        <label>Precio:</label><br>
        <input type="number" step="0.01" name="precio" value="<?= $product['precio'] ?>" required><br><br>
        <button type="submit">Actualizar</button>
        <a href="index.php">Cancelar</a>
    </form>
</body>
</html>
