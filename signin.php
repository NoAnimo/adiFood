<?php
    require_once('conn.php');
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="icon" href="../../../../favicon.ico">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/animate.css">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="../../../../dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">

    <script type="text/javascript" src="script/jquery.js"></script>
    <script type="text/javascript" src="script/signin.js"></script>

    <title>Sign in adiFood</title>
  </head>

  <div class="animated zoomIn">
      <body class="text-center">
          <!-- <form class="form-signin"> -->
              <img class="mb-4 espacio-arriba" src="imagenes/arbol.png" alt="" width="112" height="102">
              <h1 class="h3 mb-3 font-weight-normal ">Inicia Sesión</h1>
              <label for="inputEmail" class="sr-only " class="chico">Email address</label>
              <input type="email" class="form-control" placeholder="Email address" id="correo" required autofocus>
              <label for="inputPassword" class="sr-only">Password</label>
              <input type="password" class="form-control" placeholder="Password" id="contra" required>
              <div class="checkbox mb-3">
                  <label>
                      <input type="checkbox" value="remember-me"> Recordar
                  </label>
              </div>
              <button class="btn btn-lg btn-primary btn-block" id="login">Log in</button>
              <div class="err" id="mensaje_error"></div>
              <p>Aún no tienes una cuenta?</p>
              <nav>
                  <a href="registro.html">Regístrate!</a>
                  <a href="index.html">Inicio</a>
              </nav>
              <p class="mt-5 mb-3 text-muted">&copy; 2018</p>
          <!-- </form> -->
      </body>
  </div>

</html>
