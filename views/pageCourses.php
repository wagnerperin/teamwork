<?php
  ini_set('display_errors', 1);
  error_reporting(E_ALL);

  require_once("../inc/header.php");
  require_once("../inc/menu.php");
  require_once("../models/CoursesDAO.php");
  $curso = CoursesDAO::getInstance()->find($_GET['courseId']);

?>
<div class="container mt-5">
  <div class="row">
    <div class="col-5">
     <img src="<?php echo $curso->image; ?>" style="width: 100%;"> 
    </div>
    <div class="col-7">
     <h2 class="pt-3"><b class="text-secondary"> <?php echo $curso->title; ?> </b></h2>
     <h5 class="mt-3"><?php echo $curso->subtitle; ?></h5>
     <p class="mt-3"> <?php echo $curso->name;?> </p>
     <input type="submit" class="btn btn-primary mt-3 px-5 py-2" placeholder="Inscreva-se" />
    </div>
  </div>
  <div class="row mt-5">
   <div class="col-12">
    <p>
      <?php echo $curso->description; ?>
    </p>   
   </div>   
  </div>
  </div>
</div>

<?php
  require_once("../inc/footer.php");
?>