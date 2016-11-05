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
        <div class="col s10 m10 l10 offset-s1 offset-m1 offset-l1">
          <form id='#form'>
            <div class="card white margin-top">
              <div class="card-content">
                <span class="card-title red-text">Registrarse</span>
                <div class="row">
                  <div class="col s12">
                    <div class="row margin-top-min">
                      <div class="input-field col s6">
                        <i class="material-icons prefix">account_circle</i>
                        <input type="text" class="validate" id="icon_prefix" name='username' required="true">
                        <label for="icon_prefix">Usuario</label>
                      </div>
                      <div class="input-field col s6">
                        <i class="material-icons prefix">lock</i>
                        <input type="password" class="validate" id="icon_prefix password" name='password' required="true">
                        <label for="icon_prefix">Password</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-action">
                <div class="left" id="status">
                </div>
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
          url: 'signup_validate.php',
          data: $('form').serialize(),
          success: function(){
            $('#status').html('Enviando...').hide()
              .fadeIn(3000, function(){
                $('#status').append('¡Enviado! :)');
                window.location.replace('site.php');
              })
          }
        });
        event.preventDefault();
      });
    </script>
    </body>
</html>
