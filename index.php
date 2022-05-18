<?php

  require_once __DIR__."/inc/header.php";
  require_once __DIR__."/inc/menu.php";
  require_once __DIR__."/models/CoursesDAO.php";
  require_once __DIR__."/models/CategoriesDAO.php";

  $courseName = $_GET['courseName'] ?? "";
  $categoryId = $_GET['categoryId'] ?? -1;
  $courses = CoursesDAO::getInstance()->findCoursesWithFilters($courseName, $categoryId, 8);
  $mainCategories =  CategoriesDAO::getInstance()->findAllCategoriesMain();
    
?>  

<div class="container mt-5">
  <div class="row">
    <div class="col-3">
      <p>
        <a style="text-decoration: none;" class="text-black" data-bs-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample">
          <h4>Categorias</h4>
        </a>
      </p>
      <div class="collapse" id="collapseExample1">
        <div>
          <p>
            <a class="text-secondary " data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseExample1">
             <?php 
              foreach($mainCategories as $mainCategory) {
             ?>

             <p>
              <a style="text-decoration: none;" class="text-secondary" data-bs-toggle="collapse" href="#<?php echo "collapse".$mainCategory->name ?>" role="button" aria-expanded="false" aria-controls="<?php echo "collapse".$mainCategory->name ?>">
               <h5 class="mx-3 my-4"><?php echo $mainCategory->name ?></h5>
              </a>
             </p>

             <div class="collapse" id="<?php echo "collapse". $mainCategory->name ?>">
              <div class="card card-body">
                
              <?php 
               $secundariesCategories =  CategoriesDAO::getInstance()->findAllCategoriesByParentCategoryId($mainCategory->categoryId);
               
               foreach($secundariesCategories as $secundaryCategory) {
              ?>
                  <a class="nav-link text-secondary" href="index.php?categoryId=<?php echo $secundaryCategory->categoryId; ?>">
                    <?php echo $secundaryCategory->name ?>
                  </a>
              <?php
                }
              ?>
              </div>
             </div>
             <?php
             }
             ?>
            </a>
          </p>
        </div>
      </div>

    </div>
    <div class="col-9">
      <div class="row">
        <?php 
          foreach($courses as $course) {
        ?>
        <div class="col-3">
          <div class="card ml-4" style="width: 14rem; height: 264px; ">
            <a href="views/course.php?courseId=<?php echo $course->courseId; ?>">
              <img style="max-width: 100%" src="<?php echo $course->image; ?>" alt="...">
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
  require_once("inc/footer.php");
?>