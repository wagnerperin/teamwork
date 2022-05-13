<?php
  require_once("../inc/header.php");
  require_once("../inc/menu.php");
  require_once("../models/EnrollmentDAO.php");
  require_once("../models/UserDAO.php");

  ini_set('display_errors', 1);
  error_reporting(E_ALL);

  $enrollments = EnrollmentDAO::getInstance()->getCoursesFromStudent($_SESSION['userId']);

  $my_courses = EnrollmentDAO::getInstance()->getCoursesFromCreator($_SESSION['userId']);
?>

<div class="container">
    <div class="row">
      <h3 class="pt-5"><b class="text-secondary">Cursos matriculados: </b></h3>
      <hr>

      <?php 
        foreach($enrollments as $course) {
      ?>
      <div class="col-3">
        <div class="card ml-2" style="width: 15rem;height: 264px; ">
          <a href="views/course.php?courseId=<?php echo $course->courseId; ?>">
            <img style="max-width: 100%" src="<?php echo $course->image; ?>" alt="...">
          </a>
          <div class="card-body">
            <b  class="card-text"><?php echo $course->title; ?></b><br>
            <span styles="font-size:13px" class="text-black-50">
              <?php 
                $creator = UserDAO::getInstance()->findById($course->creatorId);
                echo $creator->name;
              ?></span><br>
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
        foreach($my_courses as $course) {
      ?>
      <div class="col-3">
        <div class="card ml-2" style="width: 15rem;height: 264px; ">
          <a href="views/course.php?courseId=<?php echo $course->courseId; ?>">
            <img style="max-width: 100%" src="<?php echo $course->image; ?>" alt="...">
          </a>
          <div class="card-body">
            <b  class="card-text"><?php echo $course->title; ?></b><br>
            <span styles="font-size:13px" class="text-black-50"><?php echo $_SESSION['name'];?></span><br>
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