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
  <script type="text/javascript" src="js/previewAvatar.js"></script>
  <link rel="stylesheet" href="styles/permisos/style.css">
  <link rel="stylesheet" href="fontawesome/css/all.min.css">
  <title>Registrar</title>

</head>
<body>

<section class="vh-100 gradient-custom">
  <div class="container py-3 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Formulario de registro</h3>
            <form>
              <div 
              style="display: grid;align-content: center;justify-content: center; margin-bottom:25px;"
              id="avatar">
                <div id="preview"></div>
                <label style="text-align: center;" for="">Ingrese su avatar</label>
                <input type="file" name="img-rector" id="img-rector" accept=".jpg, .png, .jpeg">
              </div>
              <div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" id="firstName" class="form-control form-control-lg" required/>
                    <label class="form-label" for="firstName">Nombres</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" id="lastName" class="form-control form-control-lg" required/>
                    <label class="form-label" for="lastName">Apellidos</label>
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 d-flex align-items-center">

                  <div class="form-outline datepicker w-100">
                    <input
                      type="text"
                      class="form-control form-control-lg"
                      id="birthdayDate"
                      required
                    />
                    <label for="birthdayDate" class="form-label">Cumpleaños</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <h6 class="mb-2 pb-1">Género: </h6>

                  <div class="form-check form-check-inline">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="inlineRadioOptions"
                      id="femaleGender"
                      value="option1"
                      checked
                      required
                    />
                    <label class="form-check-label" for="femaleGender">Femenino</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="inlineRadioOptions"
                      id="maleGender"
                      value="option2"
                      required
                    />
                    <label class="form-check-label" for="maleGender">Masculino</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="inlineRadioOptions"
                      id="otherGender"
                      value="option3"
                      required
                    />
                    <label class="form-check-label" for="otherGender">Otro</label>
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="email" id="emailAddress" class="form-control form-control-lg" required/>
                    <label class="form-label" for="emailAddress">Correo</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="tel" id="phoneNumber" class="form-control form-control-lg" required/>
                    <label class="form-label" for="phoneNumber">Número de teléfono</label>
                  </div>

                </div>
              </div>
              <div class="d-flex align-items-center">
                <label class="control control--checkbox mb-0"><span class="caption">Crear una cuenta significa que está de acuerdo con nuestra <a href="#">Términos y condiciones</a> y nuestra <a href="#">Política de privacidad</a>.</span>
                  <input type="checkbox" checked="checked">
                  <div class="control__indicator"></div>
                </label>
              </div>
              <div class="mt-4 pt-2">
                <input class="btn btn-primary btn-lg" type="submit" value="Registrarse" />
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>