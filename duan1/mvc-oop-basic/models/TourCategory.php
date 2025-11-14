<?php
class TourCategory extends Model {

    protected $table = "tour_categories";

    public function __construct(){
        parent::__construct(); // <--- Đảm bảo đã gọi constructor của Model
    }

    public function all() {
        return $this->conn->query("SELECT * FROM $this->table")->fetchAll();
    }

    public function find($id) {
        $stmt = $this->conn->prepare("SELECT * FROM $this->table WHERE category_id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    public function store($data) {
        $stmt = $this->conn->prepare("INSERT INTO $this->table (category_name, description) VALUES (?, ?)");
        return $stmt->execute([$data['category_name'], $data['description']]);
    }

    public function updateRow($id, $data) {
        $stmt = $this->conn->prepare("UPDATE $this->table SET category_name=?, description=? WHERE category_id=?");
        return $stmt->execute([$data['category_name'], $data['description'], $id]);
    }

    public function deleteRow($id) {
        $stmt = $this->conn->prepare("DELETE FROM $this->table WHERE category_id=?");
        return $stmt->execute([$id]);
    }
}
