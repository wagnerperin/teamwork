<?php

ini_set('display_errors', 1);
    error_reporting(E_ALL);
    require_once("../models/Courses.php");
    require_once("../models/CoursesDAO.php");

    var_dump($_POST);

    CoursesDAO::getInstance()->save(new Courses($_POST['title'], $_POST['subtitle'], $_POST['description'], $_POST['image'], date('Y-m-d'), 9, $_POST['categoryId']));

    header("Location: ../index.php");
?>