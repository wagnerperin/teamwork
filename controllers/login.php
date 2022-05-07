<?php

    require_once("../models/User.php");
    require_once("../models/UserDAO.php");
    
    $user = UserDAO::getInstance()->findByMail($_POST['email']);
    

    session_start();

    if($user->senha == ($_POST['senha'])){
        $_SESSION['login'] = true;
        $_SESSION['userId'] = $user->userId;
        $_SESSION["email"] = $user->email;
        $_SESSION["userType"] = $user->userType;
        $_SESSION["name"] = $user->name;
        header('Location: ../index.php');
    }
?>