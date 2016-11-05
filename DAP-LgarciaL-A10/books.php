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
        <a href="site.php" class="brand-logo"><img src="images/book.png" class="image-nav"/></a>
        <ul class="right hide-on-med-and-down">
          <li><a href="#!">Inventario</a></li>
          <li><a href="#!">Arrendamientos</a></li>
          <!-- Dropdown Trigger -->
          <li><a class="dropdown-button" href="#!" data-activates="dropdown1"><?php echo $_SESSION['username'] ?><i class="material-icons right">arrow_drop_down</i></a></li>
        </ul>
      </div>
    </nav>
     <div class="container">
       <div class="row">
         <div class="col s12 m12 l12">
           <div class="card white margin-top-min">
             <div class="card-content">
               <span class="card-title red-text">Inventario de Libros</span>
               <?php
                  include('conection.php');
                  $query = $conection->query("SELECT * FROM books");
                  if ($query->num_rows>0) {
                    echo'
                    <table class="responsive-table">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Nombre</th>
                          <th>Autor</th>
                          <th>Edición</th>
                          <th>Año</th>
                          <th>Editorial</th>
                          <th>ISBN</th>
                          <th>Idioma</th>
                          <th>Paginas</th>
                          <th>Descripción</th>
                          <th>Código</th>
                        </tr>
                      </thead>
                      <tbody>
                    ';
                    while ($row = $query->fetch_assoc()) {
                      echo '<tr><td>'.$row['id'].'</td><td>'.$row['name'].'</td><td>'.$row['author']
                      .'</td><td>'.$row['edition'].'</td><td>'.$row['year'].'</td><td>'.$row['editorial']
                      .'</td><td>'.$row['isbn'].'</td><td>'.$row['language'].'</td><td>'.$row['pages']
                      .'</td><td>'.$row['description'].'</td><td>'.$row['code'].'</td></tr>';
                    }
                    echo '</tbody></table>';
                  }else {
                    echo '<h2>0 Resultados...</h2>';
                  }
                  $conection->close();
               ?>
             </div>
           </div>
         </div>
       </div>
     </div>

     <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
     <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
   </body>
 </html>
