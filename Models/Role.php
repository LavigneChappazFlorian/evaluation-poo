<?php 
    require_once 'Models/Database.php';

    class Role extends Database {

        public function getRoles() {
            $stmt = $this->pdo->query('SELECT * FROM `roles`');
            return $stmt->fetchAll();
        }
    }
?>