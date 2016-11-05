<?php include('validate_session.php') ?>
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
    <div class="container">
      <div class="row">
        <div class="col s12 m12 l12">
          <form id='#form' action='create_validate.php' method='POST'>
            <div class="card white margin-top-min">
              <div class="card-content">
                <span class="card-title red-text">Ingresar Libro</span>
                <div class="row">
                  <div class="col s12">
                    <div class="row margin-top-min">
                      <div class="input-field col s6 l5">
                        <i class="material-icons prefix">info</i>
                        <input type="text" class="validate" id="icon_prefix" name='name' required="true">
                        <label for="icon_prefix">Nombre</label>
                      </div>
                      <div class="input-field col s6 l5">
                        <i class="material-icons prefix">assignment_ind</i>
                        <input type="text" class="validate" id="icon_prefix" name='author' required="true">
                        <label for="icon_prefix">Autor</label>
                      </div>
                      <div class="input-field col s6 l2">
                        <i class="material-icons prefix">mode_edit</i>
                        <input type="number" class="validate" id="icon_prefix" name='edition' required="true">
                        <label for="icon_prefix">Edicion</label>
                      </div>
                      <div class="input-field col s6 l2">
                        <i class="material-icons prefix">av_timer</i>
                        <input type="number" class="validate" id="icon_prefix" name='year' required="true">
                        <label for="icon_prefix">Año</label>
                      </div>
                      <div class="input-field col s6 l4">
                        <i class="material-icons prefix">business</i>
                        <input type="text" class="validate" id="icon_prefix" name='editorial' required="true">
                        <label for="icon_prefix">Editorial</label>
                      </div>
                      <div class="input-field col s6 l3">
                        <i class="material-icons prefix">turned_in_out</i>
                        <input type="number" class="validate" id="icon_prefix" name='isbn' required="true">
                        <label for="icon_prefix">ISBN</label>
                      </div>
                      <div class="input-field col s6 l3">
                        <i class="material-icons prefix">closed_caption</i>
                        <input type="text" class="validate" id="icon_prefix" name='language' required="true">
                        <label for="icon_prefix">Lenguage</label>
                      </div>
                      <div class="input-field col s6 l3">
                        <i class="material-icons prefix">forward_30</i>
                        <input type="number" class="validate" id="icon_prefix" name='pages' required="true">
                        <label for="icon_prefix">Paginas</label>
                      </div>
                      <div class="input-field col s6 l6">
                        <i class="material-icons prefix">view_day</i>
                        <input type="text" class="validate" id="icon_prefix" name='description' required="true">
                        <label for="icon_prefix">Descripcion</label>
                      </div>
                      <div class="input-field col s6 l3">
                        <i class="material-icons prefix">location_on</i>
                        <input type="text" class="validate" id="icon_prefix" name='code' required="true">
                        <label for="icon_prefix">Codigo</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-action">
                <div class="left" id="status">
                </div>
                <a href="site.php" class="left white-text red btn waves-effect">Regresar</a>
                <input type="submit" class="right white-text red btn waves-effect" value="Enviar">
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
    <script type="text/javascript">
      $('form').submit(function(event){
        $.ajax({
          type: 'post',
          url: 'create_validate.php',
          data: $('form').serialize(),
          success: function(){
            $('#status').html('Enviando...').hide()
              .fadeIn(3000, function(){
                $('#status').append('¡Enviado! :)');
                window.location.replace('books.php');
              })
          },error: function(){
            $('#status').html('Enviando...').fadeIn(3000, function(){
                $('#status').append('Error :(');
              })
          }
        });
        event.preventDefault();
      });
    </script>
    </body>
</html>
