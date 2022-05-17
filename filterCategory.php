<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

  require_once __DIR__."/inc/header.php";
  require_once __DIR__."/inc/menu.php";
  require_once __DIR__."/models/CoursesDAO.php";

  $courseName = $_GET['courseName'] ?? "";
  $courses = CoursesDAO::getInstance()->findFilterCoursesCategory($_GET['categoryId']);

?>

<div class="container mt-5">
  <div class="row">
    <div class="col-3">

    </div>
    <div class="col-9">
      <div class="row">
        <?php 
          foreach($courses as $course) {
        ?>
        <div class="col-3">
          <div class="card ml-4" style="width: 14rem; height: 264px; ">
            <a>
              <img style="max-width: 100%" src="<?php echo $course->image; ?>">
            </a>
            <div class="card-body">
              <b  class="card-text"><?php echo $course->title; ?></b><br>
              <span styles="font-size:13px" class="text-black-50"><?php echo $course->name; ?></span><br>
              <b>R$ 179,90</b>
            </div>
          </div>
        </div>
        <?php
          }
        ?>
      </div>
    </div>

  </div>
</div>

<?php
  require_once __DIR__."/inc/footer.php";
?>