<?php 
    require_once 'Models/Database.php';

    class User extends Database {

        public function getUsers() {
            $stmt = $this->pdo->query('SELECT * FROM `users`');
            return $stmt->fetchAll();
        }

        public function createUser($email, $firstname, $lastname, $password, $id_roles) {           
            
            $sql = 'INSERT INTO `users` (`email`, `firstname`, `lastname`, `password`, `id_roles`) VALUES (:email, :firstname, :lastname, :password, :id_roles)';
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(':email', $email, PDO::PARAM_STR);
            $stmt->bindValue(':firstname', $firstname, PDO::PARAM_STR);
            $stmt->bindValue(':lastname', $lastname, PDO::PARAM_STR);
            $stmt->bindValue(':password', $password, PDO::PARAM_STR);
            $stmt->bindValue(':id_roles', $id_roles, PDO::PARAM_STR);
                
            return $stmt->execute();
        }
    }
?>