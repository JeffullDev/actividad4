<h1>Editar Marca</h1>
<form method="post" action="index.php?entidad=marca&action=update&id=<?= $marca['id'] ?>">
    <label>Nombre:</label>
    <input type="text" name="nombre" value="<?= $marca['nombre'] ?>" required>

    <button type="submit">Actualizar</button>
    <a href="index.php?entidad=marca" class="btn">Cancelar</a>
</form>
