<!--   <?php
    require_once 'controllers/UsuarioController.php';
    $usuario = new UsuarioController();
    $usuario->login();

    if (isset($_POST['acceso'])) {
        $datos = array(
            'apodo'    => $_POST['apodo'],
            'password' => md5($_POST['password'])
        );
        $usuario->accesoUsuario($datos);
    }
?> -->

<!doctype html>
<html lang="es">
  <head>
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css">

    <title>Login | Admin</title>

  </head>
  <body>

    <div class="container-fluid register-login">
        <div class="row wrapper">
            <div class="col-lg padding-none bg-image-container">
                <div class="container__image">
                    <div class="image--points"></div>
                </div>
            </div>
            <div class="col-lg form-center d-flex justify-content-center align-items-center">
                <div class="container-form">
                    <h1 class="register-login-h1">Acceso</h1>
                    <p class="register-login-p">¡Bienvenido!, por favor ingresa tus credenciales</p>
                    <!-- Action la página a la cuál irá la información del formulario -->
                    <!-- Method indica cómo enviaremos la información por el método HTTP -->
                    <!-- enctype multipart/form-data permite agregar archivos -->
                    <form action="login.php" method="POST" name="loginForm" id="loginForm">
                        <div class="form-group">
                            <input type="text" id="apodo" name="apodo" class="form-control" required>
                            <label for="apodo" class="form-label">Usuario</label>
                        </div>
                        <div class="form-group margin--bottom">
                            <input type="password" id="password" name="password" class="form-control" required>
                            <label for="password" class="form-label">Contraseña</label>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="d-flex align-items-center">
                                <input class="form-check-input checked--form--input" type="checkbox" id="remember" value="">
                                <label class="form-check-label order-2" for="remember">Recuérdame</label>
                                <label class="label--ckecked order-1" for="remember"></label>
                            </div>
                            <a href="#" class="forgot__password--link">¿Olvidó su contraseña?</a>
                        </div>
                        <div class="d-flex justify-content-lg-between">
                            <button type="submit" class="btn btn-login align-self-center" name="acceso" id="acceso">Entrar</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
      
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>