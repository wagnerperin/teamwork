<?php

    require_once __DIR__."/../config/Banco.php"; 
    require_once __DIR__."/Courses.php"; 

    class CoursesDAO {
        private static $instance;

        public static function getInstance() {
            if(self::$instance === null) {
                self::$instance = new self();
            }
            return self::$instance;
        }

        public function save(Courses $courses) {

            $stmt = Banco::getInstance()->prepare("INSERT INTO Courses(title, subtitle, description, image, createdAt,creatorId, categoryId) VALUES (:title, :subtitle, :description, :image, :createdAt, :creatorId, :categoryId)");
            $stmt->bindParam("title", $courses->title);
            $stmt->bindParam("subtitle", $courses->subtitle);
            $stmt->bindParam("description", $courses->description);
            $stmt->bindParam("image", $courses->image);
            $stmt->bindParam("createdAt", $courses->createdAt);
            $stmt->bindParam("creatorId", $courses->creatorId);
            $stmt->bindParam("categoryId", $courses->categoryId);

            $stmt->execute();
        }
        
        public function find(int $id){

            $stm= Banco::getInstance()->query("
                SELECT * FROM Courses 
                LEFT JOIN Users ON Users.userId=Courses.creatorId 
                WHERE courseId=\"$id\"", PDO::FETCH_OBJ
            );
            
            $stm->execute();

            return $stm->fetch();    
        }

        public function findCoursesWithFilters(string $courseName = "", int $categoryId = -1, int $limit = 4) {
            $whereFiltroCourse = "";
            
            if($courseName != ""){
                $whereFiltroCourse = "AND (Courses.title like '%$courseName%' or Courses.subtitle like '%$courseName%')";
            }

            if($categoryId > 0){
                $whereFiltroCourse = $whereFiltroCourse . "AND (Courses.categoryId =$categoryId)";
            }


            $SQL =  "SELECT * FROM Courses 
            LEFT JOIN Users ON Users.userId = Courses.creatorId 
            WHERE true 
            {$whereFiltroCourse}
            ORDER BY Courses.courseId DESC 
            LIMIT {$limit}" ;

            $stm = Banco::getInstance()->query($SQL);
            
            return $stm->fetchAll(PDO::FETCH_OBJ);
        }

    }

?>