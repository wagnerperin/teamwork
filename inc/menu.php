<?php session_start(); ?>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <?php if($_SESSION['logedIn'] == true) { ?>
    <nav class="navbar navbar-dark bg-dark">
      <div class="container-fluid">
        <div class="d-flex flex-row ">
            <a class="navbar-brand" href="/teamwork">MS-Cursos</a>
            <a class="navbar-brand text-white" href="/teamwork/views/newCourse.php">Criar Cursos</a>
        </div>
        <div class="d-flex">
            <a style="margin-left: 17px;" class="navbar-brand text-white" href="/teamwork/views/panel.php"> <?php echo $_SESSION["name"]; ?> </a>

            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Course" aria-label="Search" name="courseName">
                <button class="btn btn-primary" type="submit">Search</button>
            </form>        
        </div>
      </div>
    </nav>
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





