<?php 
  ini_set('display_errors', 1);
  error_reporting(E_ALL);
?>

<?php

    require_once("models/User.php");
    require_once("DAO/UserDAO.php");
    
    UserDAO::getInstance()->save(new User($_POST['name'], $_POST['email'], $_POST['cpf'], $_POST['password']));

    session_start();
    $_SESSION['new_user'] = $newUser->name;
    header("Location: index.php");
    
?>