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

        public function findSpecificCategories($stmt) {

            $stmt = Banco::getInstance()->query("
                SELECT * FROM Categories 
                WHERE parentCategoryId IN 
                    (SELECT categoryId FROM Categories 
                    WHERE parentCategoryId = 1);
            ");
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }

        public function findAllCategoriesMain() {
            $stmt = Banco::getInstance()->query("
                SELECT * FROM Categories 
                WHERE parentCategoryId = 1;
            ");
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }

        public function findAllCategoriesByParentCategoryId($parentCategoryId) {
            $stmt = Banco::getInstance()->query("
                SELECT * FROM Categories 
                WHERE parentCategoryId = \"$parentCategoryId\";
            ");
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }
        
    }