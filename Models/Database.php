<?php 
    class Database {
        static private $instance = null; // Variable "instance"  contenant l'instance de la bdd (par défaut "null")

        protected $pdo = null; // Variable contenant la bdd avec son instance (par défaut "null")

        public function __construct() {
            if (!self::$instance) { // Si aucune instance est créée
                self::$instance = new PDO('mysql:dbname=eval-poo;host=localhost;charset=utf8', 'root', 'root', [ // Connexion à la base de données
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
                ]); 
            }

            $this->pdo = self::$instance;
        }
    }
?>