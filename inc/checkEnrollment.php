<?php

    require_once __DIR__."/models/EnrollmentDAO.php";
    
    $results = EnrollmentDAO::getInstance()->checkEnrollment($_GET['courseId'], $_SESSION['userId']);

    header("Location: ../index.php");

?>