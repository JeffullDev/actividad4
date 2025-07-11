<?php
require_once __DIR__ . '/../models/MarcaModel.php';

class MarcaController {
    private $model;

    public function __construct() {
        $this->model = new MarcaModel();
    }

    public function index() {
        $marca = $this->model->getAll();
        $view = __DIR__ . '/../views/marca/index.php';
        include __DIR__ . '/../views/layout/layout.php';
    }

    public function create() {
        $view = __DIR__ . '/../views/marca/create.php';
        include __DIR__ . '/../views/layout/layout.php';
    }

    public function store($data) {
        $this->model->create($data['nombre']);
        header('Location: index.php?entidad=marca');
    }

    public function edit($id) {
        $marca = $this->model->getById($id);
        $view = __DIR__ . '/../views/marca/edit.php';
        include __DIR__ . '/../views/layout/layout.php';
    }

    public function update($id, $data) {
        $this->model->update($id, $data['nombre']);
        header('Location: index.php?entidad=marca');
    }

    public function delete($id) {
        $this->model->delete($id);
        header('Location: index.php?entidad=marca');
    }
}
