<?php 
	$mensaje = "";

	$CI =& get_instance();
	if($_POST){
		$datos = $_POST;
		$datos['ip'] = $_SERVER['REMOTE_ADDR'];
		$CI->db->insert('personas', $datos);
		$mensaje = "Persona registrada";

	}


?>


<html>
<head>
	<title>Regístrate</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<h3>Firma con nosotros</h3>
		<form method="post">
		<div class="row">
			<div class="col col-sm-6">
				
				<div class="form-group input-group">
					<span class="input-group-addon">Cedula</span>
					<input type="text" class="form-control" name="cedula">

				</div>
				<div class="form-group input-group">
					<span class="input-group-addon">Nombre</span>
					<input type="text" class="form-control" name="nombre">

				</div>
				<div class="form-group input-group">
					<span class="input-group-addon">Apellido</span>
					<input type="text" class="form-control" name="apellido">

				</div>
				<div class="form-group input-group">
					<span class="input-group-addon">Telefono</span>
					<input type="text" class="form-control" name="telefono">

				</div>
				<div class="form-group input-group">
					<span class="input-group-addon">Comentario</span>
					<textarea class="form-control" name="comentario"></textarea>

				</div>

				<div class="text-center">
					<button type="submit" class="btn btn-success">Guardar</button>
					<a href="<?php echo base_url('app'); ?>" class="btn btn-primary">Regresar</a>
				</div>


			</div>

		</div>
		<input type="hidden" name="latitud" id="latitud"/>
		<input type="hidden" name="longitud" id="longitud"/>

		</form>
	</div>
	<script type="text/javascript">
		window.onload = function(){
			navigator.geolocation.getCurrentPosition(function(datos){
				document.getElementById('latitud').value = datos.coords.latitude;
				document.getElementById('longitud').value = datos.coords.longitude;

			})
		}

	</script>
</body>
</html>