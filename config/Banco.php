<?php

    class Banco {
        private static $instance;

        public static function getInstance(){
            if(self::$instance === null) {
                self::$instance = new PDO("mysql:host=localhost;dbname=teamwork", "root", "mscode@2022");
            }
            return self::$instance;
        }
    }



?>