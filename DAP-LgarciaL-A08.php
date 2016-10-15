<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<title>DAP-LgarciaL-A08</title>
</head>
<style media="screen">
	.well{margin-top: 200px;}
	input[type='submit']{margin-top: 20px;}
</style>
<body>
	<div class="container">
	  <div class="row">
	    <div class="well col-md-offset-3 col-md-6">
	      <form action="DAP-LgarciaL-A08-next.php" method='POST'>
	      	<label for="matricula">Matricula</label>
	      	<input type="text" name="matricula" id="matricula" class="form-control">
	      	<label for="nombre">Nombre</label>
	      	<input type="text" name="nombre" id="nombre" class="form-control">
	      	<input type="submit" value="Enviar" id="btnenviar" class="btn btn-info pull-right">
	      </form>
	    </div>
	  </div>
	</div>
<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript">
	$(function(){
		$('#btnenviar').hide();
		$(':input').keyup(habilitar);
	});
	$(function(){
		$('#btnenviar').click(enviar);
	});
	function enviar(){
		var nombre = $('#nombre').val().trim();
		var matricula = $('#matricula').val().trim();
		var stringFinal = 'nombre='+nombre+'&matricula='matricula;
		$.ajax({
			type:'POST',
			url: 'DAP-LgarciaL-A08-next.php',
			data: stringFinal,
			success: function(){
				alert('Jala');
			},
			error: function(){
				alert('No jala');
			}
		})
	}
	function habilitar(){
		var nombre = $('#nombre').val().trim();
		var matricula = $('#matricula').val().trim();

		if (nombre !='' && matricula!='') {
			$('#btnenviar').show();
		}else{
			$('#btnenviar').hide();
		};
	};
</script>
</body>
</html>
