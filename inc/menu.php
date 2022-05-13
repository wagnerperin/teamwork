<?php session_start(); ?>
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <?php if($_SESSION['logedIn'] == true) { ?>
  <div class="container-fluid">
    <a class="navbar-brand" href="/teamwork/">MS-Cursos</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="/teamwork/views/newCourse.php">Criar Curso</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/teamwork/views/panel.php">Seus Cursos</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="text" placeholder="Search">
        <button class="btn btn-primary" type="button">Search</button>
      </form>
    </div>
  </div>

 <?php }else{ ?>

        <div class="container-fluid">
          <div class="row">
            <div class="col-12">

              <ul class="navbar-nav">
                  <li class="nav-item ">
                    <a class="nav-link active" href="/teamwork/index.php">Inicio</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/teamwork/views/login.php">Login</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/teamwork/views/newUser.php">Cadastro</a>
                  </li>
              </ul>

            </div>
          </div>
        </div>

  <?php } ?>
  
</nav>





