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
        
    }