<?php session_start(); ?>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <?php if($_SESSION['logedIn'] == true) { ?>
    <div class="container-fluid justify-content-end">
      <div class="row ">
        <div class="col-12 ">

          <ul class="navbar-nav" class="">
            <li class="nav-item ">
              <a class="nav-link active" href="/teamwork/views/newCourse.php">Criar Curso</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/teamwork/views/login.php">Painel</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/teamwork/views/newUser.php"> <?php echo $_SESSION["name"]; ?> Seja bem vindo </a>
            </li>
          </ul>

        </div>
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





