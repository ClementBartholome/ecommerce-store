<?php 

class Database {
        
        private $pdo;
        
        public function __construct() {
            $this->pdo = new PDO('mysql:host=localhost;dbname=shopie_db', 'root', 'T6yeefjbw!');
        }
        
        public function getPdo() {
            return $this->pdo;
        }
}