<?php
    ini_set('display_errors', 0);
    error_reporting(E_ERROR);
    include "../inc/header.php";
    include "../inc/menu.php";

    require("../inc/checkLogedIn.php");
?>

<div class="bg-light">

    <section class="container mt-3">
        <div class="pt-3">
            <h3><b class="text-secondary">Crie seu Curso:</b></h3>
            <hr>
        </div>
        <div>
            <form class="g-3 needs-validation pt-3" novalidate method="POST" action="../controllers/saveCourses.php" enctype="multipart/form-data">
                <div class="col-md-4">
                    <label for="validationCustom01" class="form-label">Título</label>
                    <input type="text" class="form-control" name="title" id="validationCustom01" placeholder="Titulo do curso" required>
                </div>
                <div class="col-md-4 pt-3">
                    <label for="validationCustom02" class="form-label">Sub-Titulo</label>
                    <input type="email" class="form-control" name="subtitle" id="validationCustom02" placeholder="Sub-titulo do curso"  required>
                </div>
                <div class="col-md-4 pt-3">
                    <label for="validationCustom02" class="form-label">Imagem</label>
                    <input type="email" class="form-control" name="image" id="validationCustom02" placeholder="Insira a url da sua imagem"  required>
                </div>
                <!--<div class="col-md-4 pt-3">
                    <div class="input-group has-validation ">
                      <input type="file" class="form-control" placeholder="insira a url da sua imagem" name="image" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                    </div>
                </div>-->
                <div class="col-md-6 pt-3 ">
                    <label for="floatingTextarea">Descrição</label>
                    <fildset class="form-floating">
                        <textarea class="form-control" style="width: 432px;" name="description" id="floatingTextarea"></textarea>
                    </fildset>
                <div class="col-12 pt-3">
                    <button class="btn btn-primary" type="submit">Criar</button>
                </div>
            </form>
        </div>
    
    
    
    
    </section>

</div>

<?php
include "../inc/footer.php";
?>