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
        
        public function getCoursesFromStudent(int $userId){

            $stmt = Banco::getInstance()->prepare("
                SELECT c.courseId, c.title, c.image, c.creatorId 
                FROM Users as u, Courses as c, Enrollment as e 
                WHERE e.userId = u.userId and e.courseId = c.courseId and u.userId = :userId
            ");
            
            $stmt->bindParam("userId", $userId);
            
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);

        }  

        public function checkEnrollment(int $courseId, int $userId) {
            $stmt = Banco::getInstance()->prepare("
                SELECT * FROM Enrollment WHERE courseId=:courseId AND userId=:userId
            ");
            $stmt->bindParam("courseId", $courseId);
            $stmt->bindParam("userId", $userId);

            $stmt->execute();

            return $stmt->fetchAll();
        }
        
        public function getCoursesFromCreator(int $creatorId){

            $stmt= Banco::getInstance()->prepare("
                SELECT * FROM Courses WHERE creatorId=:creatorId;            
            ");

            $stmt->bindParam("creatorId", $creatorId);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_OBJ); 
        }

        
    }