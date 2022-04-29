<?php

  require_once("../inc/header.php");
  require_once("../inc/menu.php");

?>

 <div class="container-fluid">
  <div class="container">
   <div class="row">
   <div class="col-lg-3"></div> 
    <div class="col-lg-6">
      <h1 class="mt-5 text-center"> Login </h1>

      <form action="back-end/controllers/createUser.php" method="POST" class="row g-2" enctype="multipart/form-data">

       <div class="col-md-12 input-group-sm font-size-register">
        <label for="email" class="form-label">E-mail</label>
        <input type="email" class="form-control form-control-md text-dark" id="email" name="email" required>
       </div><br>

       <div class="col-md-12 mt-3 input-group-sm font-size-register">
        <label for="password" class="form-label">Senha</label>
        <input type="password" class="form-control form-control-md text-dark password" id="password" name="password" required>
       </div>

       <div class="col-12 input-group-sm mt-4 d-flex justify-content-center">
        <input type="submit" class="btn btn-primary btn-block p-5 pt-2 pb-2 mb-3 font-size-register" value="LOGIN" style="border-radius: 10px;">
       </div>

     </form> 
     
    </div>
    <div class="col-lg-3"></div> 
   </div>   
  </div>   
 </div>

<?php

  require_once("../inc/footer.php");

?>