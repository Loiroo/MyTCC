<html>
 <head>
  <title>Site TCC</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="imagens/foto1.png"
          class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form>


          <!-- Email input -->
          <div class="form-outline mb-4">
          <label class="form-label" for="form3Example3">E-mail</label>
            <input type="email" id="form3Example3" class="form-control form-control-lg"
              placeholder="Use um e-mail valido" />
            
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
          <label class="form-label" for="form3Example4">Senha</label>
            <input type="password" id="form3Example4" class="form-control form-control-lg"
              placeholder="Coloque sua senha" />
            
          </div>

          <div class="d-flex justify-content-between align-items-center">
            <!-- Checkbox -->
            <div class="form-check mb-0">
              <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
              <label class="form-check-label" for="form2Example3">
                Lembre-me
              </label>
            </div>
            <a href="#!" class="text-body">Esqueceu sua senha?</a>
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
            <a href="hall.php"><button type="button" class="btn btn-primary btn-lg" 
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button></a>
            <p class="small fw-bold mt-2 pt-1 mb-0">N??o tem uma conta? <a href="hall.php"
                class="link-danger">Registre-se</a></p>
          </div>

        </form>
      </div>
    </div>
  </div>

  <div class="uscs">
        <img src="imagens/uscs.png" width="320" height="205" 
          class="img-fluid" alt="Sample image">
      </div>


    <!-- Right -->
    <div>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-google"></i>
      </a>
      <a href="#!" class="text-white">
        <i class="fab fa-linkedin-in"></i>
      </a>
    </div>
    <!-- Right -->
  </div>
</section>

 </body>
</html>