<?php
    require_once("../models/Courses.php");
    require_once("../models/CoursesDAO.php");
    session_start();

    CoursesDAO::getInstance()->save(new Courses($_POST['title'], $_POST['subtitle'], $_POST['description'], $_POST['image'], date('Y-m-d'), $_SESSION['userId']));

    header("Location: ../index.php");
?>