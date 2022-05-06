<?php
    ini_set('display_errors', 0);
    error_reporting(E_ERROR);

    require_once("../models/Courses.php");
    require_once("../models/CoursesDAO.php");


    CoursesDAO::getInstance()->save(new Courses($_POST['title'], $_POST['subtitle'], $_POST['description'], $_POST['image'], date('Y-m-d'), 2));

    header("Location: ../index.php");

?>