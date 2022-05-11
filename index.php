<?php
  ini_set('display_errors', 0);
  error_reporting(E_ERROR);
  require_once __DIR__."/inc/header.php";
  require_once __DIR__."/inc/menu.php";
  require_once __DIR__."/models/CoursesDAO.php";

  $courses = CoursesDAO::getInstance()->findIndex();
?>  

<div class="container mt-5">
  <div class="row">
    <div class="col-3">
      <p>
        <a style="text-decoration: none;" class="text-secondary" data-bs-toggle="collapse" href="#collapseExample0" role="button" aria-expanded="false" aria-controls="collapseExample">
          <h4>Desenvolvimento</h4>
        </a>
      </p>
      <div class="collapse" id="collapseExample0">
        <div class="card card-body">
          <p>
            <a class="text-secondary " data-bs-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample1">
              Linguagem de programação
            </a>
          </p>
          <div class="collapse" id="collapseExample1">
            <div class="card card-body">
              <a class="link-dark" href="#">Python</a> 
              <a class="link-dark" href="#">Java </a>
              <a class="link-dark" href="#">C#</a>
              <a class="link-dark" href="#">React</a>
              <a class="link-dark" href="#">C++</a>
              <a class="link-dark" href="#">JavaScript</a>
              <a class="link-dark" href="#">Go (linguagem de programação)</a>
              <a class="link-dark" href="#">C (linguagem de programação)</a>
            </div>
          </div>
          <p>
            <a class="text-secondary " data-bs-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample">
              Desenvolvimento de games
            </a>
          </p>
          <div class="collapse" id="collapseExample2">
            <div class="card card-body">
              <a class="link-dark" href="#">Unity</a> 
              <a class="link-dark" href="#">Unreal Engine</a>
              <a class="link-dark" href="#">Fundamentos do Desenvolvimento de games</a>
              <a class="link-dark" href="#">C#</a>
              <a class="link-dark" href="#">Desenvolvimento de games 3D</a>
              <a class="link-dark" href="#">C++</a>
              <a class="link-dark" href="#">Desenvolvimento de games 2D</a>
              <a class="link-dark" href="#">Blueprints da Unreal Engine</a>
              <a class="link-dark" href="#">Realidade Virtual</a>
            </div>
          </div>
          <p>
            <a class="text-secondary " data-bs-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample">
              Teste de software
            </a>
          </p>
          <div class="collapse" id="collapseExample3">
            <div class="card card-body">
              <a class="link-dark" href="#">Selenium WebDriver</a> 
              <a class="link-dark" href="#">Testes de automação</a>
              <a class="link-dark" href="#">Java</a>
              <a class="link-dark" href="#">Selenium Testing Framework</a>
              <a class="link-dark" href="#">Teste de API</a>
              <a class="link-dark" href="#">Postman</a>
              <a class="link-dark" href="#">Avaliação de qualidade</a>
              <a class="link-dark" href="#">Cypress.io</a>
            </div>
          </div>
        </div>
      </div>
      <p>
        <a style="text-decoration: none;" class="text-secondary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
          <h4 class="mt-3">Design‌</h4>
        </a>
      </p>
      <div class="collapse" id="collapseExample">
        <div class="card card-body">
            <p>
            <a class="text-secondary " data-bs-toggle="collapse" href="#collapseExample4" role="button" aria-expanded="false" aria-controls="collapseExample">
              Web design
            </a>
          </p>
          <div class="collapse" id="collapseExample4">
            <div class="card card-body">
              <a class="link-dark" href="#">WordPress</a> 
              <a class="link-dark" href="#">Design de aplicativos móveis</a>
              <a class="link-dark" href="#">CSS</a>
              <a class="link-dark" href="#">HTML</a>
              <a class="link-dark" href="#">Interface de usuário</a>
              <a class="link-dark" href="#">Photoshop</a>
              <a class="link-dark" href="#">HTML5</a>
              <a class="link-dark" href="#">Adobe XD</a>
            </div>
          </div>
          <p>
            <a class="text-secondary " data-bs-toggle="collapse" href="#collapseExample5" role="button" aria-expanded="false" aria-controls="collapseExample">
              Design interior
            </a>
          </p>
          <div class="collapse" id="collapseExample5">
            <div class="card card-body">
              <a class="link-dark" href="#">SketchUP</a> 
              <a class="link-dark" href="#">Teoria das cores</a>
              <a class="link-dark" href="#">Design de iluminação</a>
              <a class="link-dark" href="#">AVAC (aquecimento, ventilação e ar condicionado)</a>
              <a class="link-dark" href="#">Engenharia Elétrica</a>
              <a class="link-dark" href="#">Feng Shui</a>
              <a class="link-dark" href="#">Preparação de casa</a>
              <a class="link-dark" href="#">Eletricidade</a>
            </div>
          </div>
          <p>
            <a class="text-secondary " data-bs-toggle="collapse" href="#collapseExample6" role="button" aria-expanded="false" aria-controls="collapseExample">
              Design de games
            </a>
          </p>
          <div class="collapse" id="collapseExample6">
            <div class="card card-body">
              <a class="link-dark" href="#">Unreal Engine</a> 
              <a class="link-dark" href="#">Pixel Art</a>
              <a class="link-dark" href="#">Unity</a>
              <a class="link-dark" href="#">VFX Visual Elfects</a>
              <a class="link-dark" href="#">Blender</a>
              <a class="link-dark" href="#">Pintura digital</a>
              <a class="link-dark" href="#">Fundamentos do Desenvolvimentode games</a>
              <a class="link-dark" href="#">Level design</a>
              <a class="link-dark" href="#">Spring Framework</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-9">
      <div class="row">
        <?php 
          foreach($courses as $course) {
        ?>
        <div class="col-3">
          <div class="card ml-2" style="width: 15rem;height: 264px; ">
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