<?php include('validate_session.php'); ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
     <!-- <link rel="stylesheet" href="css/animate.css"> -->
     <link rel="stylesheet" href="css/master.css">
     <title>Actividad 10</title>
   </head>
   <body>
     <ul id="dropdown1" class="dropdown-content">
      <li><a href="#!">PERFIL</a></li>
      <li class="divider"></li>
      <li><a href="logout.php">LOGOUT</a></li>
    </ul>
    <nav class="session-nav">
      <div class="nav-wrapper red">
        <a href="#!" class="brand-logo"><img src="images/book.png" class="image-nav"/></a>
        <ul class="right hide-on-med-and-down">
          <li><a href="books.php">Inventario</a></li>
          <li><a href="#!">Arrendamientos</a></li>
          <!-- Dropdown Trigger -->
          <li><a class="dropdown-button" href="#!" data-activates="dropdown1"><?php echo $_SESSION['username'] ?><i class="material-icons right">arrow_drop_down</i></a></li>
        </ul>
      </div>
    </nav>
     <div class="container">
       <div class="row">
         <div class="col s8 m8 l8 offset-s2 offset-m2 offset-l2">
           <div class="card white margin-top">
             <div class="card-content">
               <span class="card-title red-text">Bienvenido <b class="session-nav"><?php echo $_SESSION['username'] ?></b></span>
               <p>Porfavor selecciona una opción del sistema Bibliotecario</p>
             </div>
             <div class="card-action">
               <a href="create.php" class="left white-text red btn waves-effect">Ingresar libro</a>
               <a href="assign.php" class="right white-text red btn waves-effect">Arrendar libro</a>
             </div>
           </div>
         </div>
       </div>
     </div>

     <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
     <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
   </body>
 </html>
