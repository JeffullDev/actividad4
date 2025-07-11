<h1>Lista de Marcas</h1>
<a href="index.php?entidad=marca&action=create" class="btn">Nueva Marca</a>
<table>
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Acciones</th>
    </tr>
    <?php foreach ($marca as $m): ?>
    <tr>
        <td><?= $m['id'] ?></td>
        <td><?= $m['nombre'] ?></td>
        <td class="acciones">
            <a href="index.php?entidad=marca&action=edit&id=<?= $m['id'] ?>">Editar</a>
            |
            <a href="index.php?entidad=marca&action=delete&id=<?= $m['id'] ?>" onclick="return confirm('¿Eliminar esta marca?')">Eliminar</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
