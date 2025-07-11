<?php
require_once 'BaseModel.php';

class ProductModel extends BaseModel {

    public function getAll() {
        $stmt = $this->db->query("
            SELECT p.*, m.nombre as marca_nombre 
            FROM products p
            LEFT JOIN marca m ON p.marca_id = m.id
        ");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id) {
        $stmt = $this->db->prepare("
            SELECT p.*, m.nombre as marca_nombre 
            FROM products p
            LEFT JOIN marca m ON p.marca_id = m.id
            WHERE p.id = ?
        ");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($nombre, $marca_id, $precio) {
        $stmt = $this->db->prepare("INSERT INTO products (nombre, marca_id, precio) VALUES (?, ?, ?)");
        return $stmt->execute([$nombre, $marca_id, $precio]);
    }

    public function update($id, $nombre, $marca_id, $precio) {
        $stmt = $this->db->prepare("UPDATE products SET nombre = ?, marca_id = ?, precio = ? WHERE id = ?");
        return $stmt->execute([$nombre, $marca_id, $precio, $id]);
    }

    public function delete($id) {
        $stmt = $this->db->prepare("DELETE FROM products WHERE id = ?");
        return $stmt->execute([$id]);
    }
}