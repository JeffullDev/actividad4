<?php
require_once '../controllers/ProductController.php';
require_once '../controllers/MarcaController.php';

$entidad = $_GET['entidad'] ?? 'product';
$action = $_GET['action'] ?? 'index';

switch ($entidad) {
    case 'product':
        $controller = new ProductController();
        break;
    case 'marca':
        $controller = new MarcaController();
        break;
    default:
        die('Entidad no válida');
}

if (!method_exists($controller, $action)) {
    die("Acción '$action' no encontrada en el controlador");
}

// Si es POST (formulario)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $controller->$action($_POST);
} else {
    $id = $_GET['id'] ?? null;
    if ($id !== null) {
        $controller->$action($id);
    } else {
        $controller->$action();
    }
}
