<?php
    require_once("../config/Banco.php"); 
    require_once("Courses.php"); 

    class CoursesDAO {
        private static $instance;

        public static function getInstance() {
            if(self::$instance === null) {
                self::$instance = new self();
            }
            return self::$instance;
        }

        public function save(Courses $courses) {

            $stmt = Banco::getInstance()->prepare("INSERT INTO Courses(title, subtitle, description, image, createdAt,creatorId) VALUES (:title, :subtitle, :description, :image, :createdAt, :creatorId)");
            $stmt->bindParam("title", $courses->title);
            $stmt->bindParam("subtitle", $courses->subtitle);
            $stmt->bindParam("description", $courses->description);
            $stmt->bindParam("image", $courses->image);
            $stmt->bindParam("createdAt", $courses->createdAt);
            $stmt->bindParam("creatorId", $courses->creatorId);

            $stmt->execute();
        }
        
    }

?>