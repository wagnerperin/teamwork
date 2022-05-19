<?php

    require_once("../inc/header.php");
    require_once("../inc/menu.php");
    require_once "../models/EnrollmentDAO.php";
    
    $results = EnrollmentDAO::getInstance()->checkEnrollment($_GET['courseId'], $_SESSION['userId']);

    if(!$results){
        header("Location: ../views/panel.php");
    }

    header("Location: ../index.php");

?>

<?php
  require_once("../inc/footer.php");
?>