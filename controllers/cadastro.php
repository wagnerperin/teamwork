<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
    
    require_once("../models/User.php");
    require_once("../models/UserDAO.php");
    
    UserDAO::getInstance()->save(new User($_POST['name'], $_POST['email'], $_POST['cpf'], $_POST['password'], 0));

    header("Location: ../index.php");

?>