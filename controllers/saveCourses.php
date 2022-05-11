<?php
    require_once("../models/Courses.php");
    require_once("../models/CoursesDAO.php");

    CoursesDAO::getInstance()->save(new Courses($_POST['title'], $_POST['subtitle'], $_POST['description'], $_POST['image'], date('Y-m-d'), 9));

    header("Location: ../index.php");
?>