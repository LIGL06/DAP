<?php
  session_start();
  if (isset($_SESSION['username'])) {
    header('location: site.php');
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
    <!-- <link rel="stylesheet" href="css/animate.css"> -->
    <link rel="stylesheet" href="css/master.css">
    <title>Actividad 10</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col s8 m8 l8 offset-s2 offset-m2 offset-l2">
          <div class="card white margin-top">
              <img src="images/book.png" class="imagen"/>
            <div class="card-content">
              <span class="card-title red-text">Sistema bibliotecario</span>
              <p>Aplicación que permite a un usuario organizar la información de una biblioteca.</p>
            </div>
            <div class="card-action">
              <a href="login.php" class="left white-text red btn waves-effect">Iniciar Sesión</a>
              <a href="signup.php" class="right white-text red btn waves-effect">Registrase</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
  </body>
</html>
