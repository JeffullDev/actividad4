<?php
require_once 'BaseModel.php';

class MarcaModel extends BaseModel {
    public function getAll() {
        return $this->db->query("SELECT * FROM marca")->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function getById($id) {
        $stmt = $this->db->prepare("SELECT * FROM marca WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($nombre) {
        $stmt = $this->db->prepare("INSERT INTO marca (nombre) VALUES (?)");
        return $stmt->execute([$nombre]);
    }

    public function update($id, $nombre) {
        $stmt = $this->db->prepare("UPDATE marca SET nombre = ? WHERE id = ?");
        return $stmt->execute([$nombre, $id]);
    }

    public function delete($id) {
        $stmt = $this->db->prepare("DELETE FROM marca WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
