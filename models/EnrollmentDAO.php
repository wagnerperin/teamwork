<?php
    require_once("../config/Banco.php"); 
    require_once("EnrollmentDAO.php"); 

    class EnrollmentDAO {
        private static $instance;

        public static function getInstance() {
            if(self::$instance === null) {
                self::$instance = new self();
            }
            return self::$instance;
        }

        public function save(Enrollment $enrollment) {

            $stmt = Banco::getInstance()->prepare("
                INSERT INTO Enrollment (enrollId, userId, courseId, eval, result) 
                VALUES (:enrollId, :userId, :courseId, NULL, 0)
            ");
            $stmt->bindParam("enrollId", $enrollment->enrollId);
            $stmt->bindParam("userId", $enrollment->userId);
            $stmt->bindParam("courseId", $enrollment->courseId);
            
            $stmt->execute();
        }
        
        public function getCoursesFromUser(int $userId){

            $stmt = Banco::getInstance()->prepare("
                SELECT u.name, c.title, c.image 
                FROM Users as u, Courses as c, Enrollment as e 
                WHERE e.userId = u.userId and e.courseId = c.courseId and u.userId = :userId
            ");
            
            $stmt->bindParam("userId", $userId);
            
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);

        }  
        
        public function getUserFromCourses(){

            $stmt= Banco::getInstance()->prepare("
                SELECT * FROM Courses WHERE creatorId=11;            
            ");
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_OBJ); 
        }

        
    }