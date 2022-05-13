<?php
  require_once("../inc/header.php");
  require_once("../inc/menu.php");
  require_once("../models/EnrollmentDAO.php");

  ini_set('display_errors', 1);
  error_reporting(E_ALL);

  $result = EnrollmentDAO::getInstance()->getCoursesFromUser($_SESSION['userId']);

  $result2 = EnrollmentDAO::getInstance()->getUserFromCourses($_SESSION['creatorId']);
  var_dump($result2);
?>

<div class="container">
    <div class="row">
      <h3 class="pt-5"><b class="text-secondary">Cursos matriculados: </b></h3>
      <hr>

      <?php 
        foreach($result as $enrollment) {
      ?>
      <div class="col-3">
        <div class="card ml-2" style="width: 15rem;height: 264px; ">
          <a href="views/course.php?courseId=<?php echo $enrollment->courseId; ?>">
            <img style="max-width: 100%" src="<?php echo $enrollment->image; ?>" alt="...">
          </a>
          <div class="card-body">
            <b  class="card-text"><?php echo $enrollment->title; ?></b><br>
            <span styles="font-size:13px" class="text-black-50"><?php echo $enrollment->name; ?></span><br>
            <b>R$ 179,90</b>
          </div>
        </div>
      </div>
      <?php
        }
      ?>
    </div>
    <div class="row">
      <h3 class="pt-5"><b class="text-secondary">Meus cursos: </b></h3>
      <hr>

      <?php 
        foreach($result2 as $enrollments) {
      ?>
      <div class="col-3">
        <div class="card ml-2" style="width: 15rem;height: 264px; ">
          <a href="views/course.php?courseId=<?php echo $enrollments->courseId; ?>">
            <img style="max-width: 100%" src="<?php echo $enrollments->image; ?>" alt="...">
          </a>
          <div class="card-body">
            <b  class="card-text"><?php echo $enrollments->title; ?></b><br>
            <!--<span styles="font-size:13px" class="text-black-50"><?php echo $enrollments->name; ?></span><br>-->
            <b>R$ 179,90</b>
          </div>
        </div>
      </div>
      <?php
        }
      ?>
    </div>
  </div>

<?php
  require_once("../inc/footer.php");
?>