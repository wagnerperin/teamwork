<?php session_start(); ?>
<nav class="navbar-expand-sm bg-dark navbar-dark">
  <?php if($_SESSION['logedIn'] == true) { ?>
    <nav class="navbar navbar-dark bg-dark">
      <div class="container-fluid">
        <div class="d-flex flex-row ">
            <a class="navbar-brand" href="/teamwork">MS-Cursos</a>
            <a class="navbar-brand text-white" href="/teamwork/views/newCourse.php">Criar Cursos</a>
        </div>
        <div class="d-flex">
            <a style="margin-left: 17px;" class="navbar-brand text-white" href="/teamwork/views/panel.php"> <?php echo $_SESSION["name"]; ?> </a>

            <form class="d-flex" action="/teamwork/index.php">
                <input class="form-control me-2" type="search" placeholder="Course" aria-label="Search" name="courseName">
                <button class="btn btn-primary" type="submit">Search</button>
            </form>        
        </div>
      </div>
    </nav>
 <?php }else{ ?>


              <nav class="navbar navbar-dark bg-dark">
                <div class="container-fluid">
                  <div class="d-flex flex-row ">
                    <a class="navbar-brand" href="/teamwork">MS-Cursos</a>
                    <a class="navbar-brand text-white" href="/teamwork/views/login.php">Login</a>
                    <a class="navbar-brand text-white" href="/teamwork/views/newUser.php">Cadastro</a>
                  </div>
                  <div class="d-flex">
                    <form class="d-flex" action="/teamwork/index.php">
                      <input class="form-control me-2" type="search" placeholder="Course" aria-label="Search" name="courseName">
                      <button class="btn btn-primary" type="submit">Search</button>
                    </form>        
                  </div>
                </div>
              </nav>


  <?php } ?>
  
</nav>





