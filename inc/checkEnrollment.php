<?php

    require_once "../models/EnrollmentDAO.php";
    
    $results = EnrollmentDAO::getInstance()->checkEnrollment($_GET['courseId'], $_SESSION['userId']);

    if(!$results){
        //redirect do aluno para a pagina de venda do curso... 
    }

    //header("Location: ../index.php");

?>