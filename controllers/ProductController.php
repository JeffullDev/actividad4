<?php
require_once __DIR__ . '/../models/ProductModel.php';
require_once __DIR__ . '/../models/MarcaModel.php'; // Añade esta línea

class ProductController {
    private $model;
    private $marcaModel; // Añade esta propiedad

    public function __construct() {
        $this->model = new ProductModel();
        $this->marcaModel = new MarcaModel(); // Inicializa el modelo de marcas
    }

    public function index() {
        $products = $this->model->getAll();
        $view = __DIR__ . '/../views/product/index.php';
        include __DIR__ . '/../views/layout/layout.php';
    }

    public function create() {
        $marcas = $this->marcaModel->getAll(); // Obtiene todas las marcas
        $view = __DIR__ . '/../views/product/create.php';
        include __DIR__ . '/../views/layout/layout.php';
    }

    public function store($data) {
        // Cambia $data['marca'] por $data['marca_id']
        $this->model->create($data['nombre'], $data['marca_id'], $data['precio']);
        header('Location: index.php');
    }

    public function edit($id) {
        $product = $this->model->getById($id);
        $marcas = $this->marcaModel->getAll(); // Añade esta línea
        $view = __DIR__ . '/../views/product/edit.php';
        include __DIR__ . '/../views/layout/layout.php';
    }

    public function update($id, $data) {
        // Cambia $data['marca'] por $data['marca_id']
        $this->model->update($id, $data['nombre'], $data['marca_id'], $data['precio']);
        header('Location: index.php');
    }

    public function delete($id) {
        $this->model->delete($id);
        header('Location: index.php');
    }
}