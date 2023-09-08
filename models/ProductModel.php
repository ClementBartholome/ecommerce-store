<?php 

class ProductModel {
    
        private $pdo;
    
        public function __construct() {
            $this->pdo = (new Database())->getPdo();
        }
    
        public function getAll() {
            $sql = "SELECT * FROM products";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        }

        public function addProduct($name, $details, $price, $image_1, $image_2, $image_3) {
            $sql = "INSERT INTO products (name, details, price, image_1, image_2, image_3) VALUES (?, ?, ?, ?, ?, ?)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([$name, $details, $price, $image_1, $image_2, $image_3]);
        }
}