<?php  

    require_once("../models/Enrollment.php");
    require_once("../models/EnrollmentDAO.php");
    
    EnrollmentDAO::getInstance()->save(new Enrollment($_POST['userId'], $_POST['courseId']));

    header("Location: ../index.php");

?>