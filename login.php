<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="styles/normalize.css">
  <script type="text/javascript" src="bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js-jquery/jquery-3.3.1.min.js"></script>
  <link rel="stylesheet" href="styles/permisos/style.css">
  <link rel="stylesheet" href="fontawesome/css/all.min.css">
  <title>Document</title>

</head>
<body>

<section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="img/LOGO.png" class="img-fluid"
          alt="Sample image">
          
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form>
          <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
            <p class="lead fw-normal mb-0 me-3">Inicia sesión con</p>
            <button type="button" class="btn-facebook btn btn-floating mx-1">
              <i class="fab fa-facebook-f"></i>
            </button>

            <button type="button" class="btn-twitter btn btn-floating mx-1">
              <i class="fab fa-twitter"></i>
            </button>

            <button type="button" class="btn-linkedin btn btn-floating mx-1">
              <i class="fab fa-linkedin-in"></i>
            </button>
            <button type="button" class="btn-google btn btn-floating mx-1">
              <i class="fab fa-google"></i>
              
            </button>
          </div>

          <div class="divider d-flex align-items-center my-4">
            <p class="text-center fw-bold mx-3 mb-0">O</p>
          </div>

          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="email" id="form3Example3" class="form-control form-control-lg"
              placeholder="Ingrese su correo electrónico" />
            <label class="form-label" for="form3Example3">Correo electrónico</label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
            <input type="password" id="form3Example4" class="form-control form-control-lg"
              placeholder="Ingrese su contraseña" />
            <label class="form-label" for="form3Example4">Contraseña</label>
          </div>

          <div class="d-flex justify-content-between align-items-center">
            <!-- Checkbox -->
            <div class="form-check mb-0">
              <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
              <label class="form-check-label" for="form2Example3">
                Recordar cuenta
              </label>
            </div>
            <a href="#!" class="text-body">¿Se te olvidó tu contraseña?</a>
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="button" class="login btn btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Iniciar sesión</button>
            <p class="small fw-bold mt-2 pt-1 mb-0">¿Aún no tienes cuenta? <a href="#!"
                class="link-danger">Regístrate</a></p>
          </div>

        </form>
      </div>
    </div>
  </div>
  
      <footer class="footer d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5">
        <!-- Copyright -->
        <div class="copy mb-3 mb-md-0">
          Copyright © 2021-2022. Todos los derechos reservados.
        </div>
        <!-- Copyright -->
    
        <!-- Right -->
        <div>
          <a href="#" class=" me-4">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="#" class=" me-4">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="#" class="me-4">
            <i class="fab fa-linkedin-in"></i>
          </a>
          <a href="#" class="me-4">
            <i class="fab fa-google"></i>
          </a>
        </div>
        <!-- Right -->
      </footer>
  
</section>


</body>
</html>