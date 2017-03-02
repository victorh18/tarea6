<html>
<head>
	<title>Tarea 6</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		

</head>
<body>
	<div class="container">
		<div>
			<h1>Ayúdanos a tumbar el PLD</h1>
		</div>
		<div id="map" style="width:500px; height:400px; background: #cccccc; margin: 0auto">
			Ultimos firmantes
		</div>
		<a href="<?php echo base_url('app/registro'); ?>" class="btn btn-primary">Registrate</a>
	</div>

	<script>

function initMap() {
  
  var myLatLng = {lat: 18.9373584, lng: -70.4792214};
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 7,
    center: myLatLng
  });

  <?php
  	$CI =& get_instance();
  	$rs = $CI->db->query("SELECT * FROM personas ORDER BY id DESC LIMIT 10");
  	$datos = $rs->result();

  	foreach($datos as $persona){
  		echo "var myLatLng = {lat: {$persona->latitud}, lng: {$persona->longitud}};
			  var marker = new google.maps.Marker({
			    position: myLatLng,
			    map: map,
			    title: 'Hello World!'
			  });
			";
  	}


   ?>

  
}

    </script>

    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBCoeY62nn84OhE63rosGnK1aLlpvtOK_0&callback=initMap"></script>
</body>
</html>