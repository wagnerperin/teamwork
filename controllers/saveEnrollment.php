<?php  

    require_once("../models/Enrollment.php");
    require_once("../models/EnrollmentDAO.php");

    require("../inc/checkLogedIn.php");

    EnrollmentDAO::getInstance()->save(new Enrollment($_SESSION['userId'], $_GET['courseId']));

    header("Location: ../index.php"); 
    
    

?>