<?php
include "../inc/header.php";
include "../inc/menu.php";
?>

<div class="bg-light">

    <section class="container">
      <div class="pt-3">
        <h3><b class="text-secondary">Cadastro de Usuário</b></h3>
        <hr>
      </div>

      <div>
        <form class="g-3 needs-validation pt-3" novalidate>
          <div class="col-md-4">
            <label for="validationCustom01" class="form-label">Nome</label>
            <input type="text" class="form-control" id="validationCustom01" placeholder="Seu Nome" required>
            <div class="valid-feedback">
              Tudo ok
            </div>
          </div>
          <div class="col-md-4 pt-3">
            <label for="validationCustom02" class="form-label">E-mail</label>
            <input type="email" class="form-control" id="validationCustom02" placeholder="Seu email"  required>
            <div class="valid-feedback">
              Tudo ok
            </div>
          </div>
          <div class="col-md-4 pt-3">
            <label for="validationCustomUsername" class="form-label">CPF</label>
            <div class="input-group has-validation">
              <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
              <div class="invalid-feedback">
                Por favor coloque seu CPF.
              </div>
            </div>
          </div>
          <div class="col-md-6 pt-3">
            <label for="validationCustom03" class="form-label">Senha</label>
            <input type="password" class="form-control" id="validationCustom03" required>
            <div class="invalid-feedback">
              Por favor corrija sua senha.
            </div>
          </div>
          
          <div class="col-md-6 pt-3">
            <label for="validationCustom03" class="form-label">Repetir senha</label>
            <input type="password" class="form-control" id="validationCustom03" required>
            <div class="invalid-feedback">
              Por favor corrija sua senha.
            </div>
          </div>

          <div class="col-12 pt-3">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
              <label class="form-check-label" for="invalidCheck">
                Concordo com todos os termos de conficialidade.
              </label>
              <div class="invalid-feedback">
                Confira seus dados.
              </div>
            </div>
          </div>
          <div class="col-12 pt-3">
            <button class="btn btn-primary" type="submit">Enviar Cadastro</button>
          </div>
        </form>

      </div>
    
    
    
    
    </section>

</div>

<?php
include "../inc/footer.php";
?>