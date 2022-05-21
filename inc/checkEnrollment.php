<?php

    require_once("../inc/header.php");
    require_once("../inc/menu.php");
    require_once "../models/EnrollmentDAO.php";
    
    $results = EnrollmentDAO::getInstance()->checkEnrollment($_GET['courseId'], $_SESSION['userId']);

    if(!$results){
      header("Location: ../index.php");
    }

?>