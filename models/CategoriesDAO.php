<?php

    require_once __DIR__."/../config/Banco.php"; 

    class CategoriesDAO {
        private static $instance;

        public static function getInstance() {
            if(self::$instance === null) {
                self::$instance = new self();
            }
            return self::$instance;
        }

        public function findAll($stmt) {

            $stmt = Banco::getInstance()->query("SELECT name, categoryId FROM Categories");
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }
        
    }