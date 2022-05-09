<?php
  ini_set('display_errors', 1);
  error_reporting(E_ALL);
  require_once("../inc/header.php");
  require_once("../inc/menu.php");

?>

 <div class="container-fluid">
  <div class="container">
   <div class="row">
    <div class="col-lg-12">
     <h3 class="pt-3"><b class="text-secondary"> Login </b></h3>
     <hr>

      <form class="g-3 needs-validation pt-3" novalidate action="../controllers/login.php">
       <div class="col-md-6 pt-3">
        <label for="" class="form-label"> E-mail </label>
        <input type="email" class="form-control" id="" placeholder="Seu email"  required>
        <div class="valid-feedback"> Tudo ok </div>
       </div>

       <div class="col-md-6 pt-3">
        <label for="" class="form-label"> Senha </label>
        <input type="password" class="form-control" id="" required>
        <div class="invalid-feedback"> Por favor corrija sua senha. </div>

       </div>

       <div class="col-12 pt-3">
        <div class="form-check">
         <input class="form-check-input" type="checkbox" value="" id="" required>
         <label class="form-check-label" for=""> Lembre-me </label>
         <div class="invalid-feedback"> Confira seus dados. </div>
        </div>
       </div>

       <div class="col-12 pt-3">
        <button class="btn btn-primary" type="submit"> Logar </button>
       </div>
      </form>
     
    </div>
   </div>   
  </div>   
 </div>

<?php

  require_once("../inc/footer.php");

?>