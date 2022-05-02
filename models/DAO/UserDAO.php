<?php
    require_once("../config/Banco.php");

    class UserDAO {
        private static $instance;

        public static function getInstance() {
            if(self::$instance === null) {
                self::$instance = new self();
            }
            return self::$instance;
        }

        public function save(User $user) {
            $stmt = Banco::getInstance()->prepare("INSERT INTO users(name, email, cpf, password, userType,	createdAt) VALUES (:name, :email, :cpf, :password, :userType, :createdAt)");
            $stmt->bindParam("name", $user->name);
            $stmt->bindParam("email", $user->email);
            $stmt->bindParam("cpf", $user->cpf);
            $stmt->bindParam("password", $user->password);
            $stmt->bindParam("userTyper", $user->userTyper);
            $stmt->bindParam("createdAt", $user->createdAt);

            $stmt->execute();
        }
        
    }

?>