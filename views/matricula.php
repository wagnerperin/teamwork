<?php

    require_once("../config/Banco.php"); 
    session_start();

    if(!isset($_SESSION['login']) || !$_SESSION['login']) header("Location: login.php");

    class Matricula {
        private static $instance;

        public static function getInstance() {
            if(self::$instance === null) {
                self::$instance = new self();
            }
            return self::$instance;
        }

        public function save($matricula) {

            $stmt = Banco::getInstance()->prepare("INSERT INTO `Enrollment` (`enrollId`, `userId`, `courseId`, `eval`, `result`) VALUES (:enrollId, :userId, :courseId, NULL, '0')");
            $stmt->bindParam("enrollId", $matricula->enrollId);
            $stmt->bindParam("userId", $matricula->userId);
            $stmt->bindParam("courseId", $matricula->courseId);
            
            $stmt->execute();
        }
        
    }

    header("Location: ../index.php")

?>