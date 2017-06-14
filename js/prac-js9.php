<html>
	<head>
		<meta charset="UTF-8">
		
		<title>Ejercicio </title>
	<style type="text/css">
		.oculto { display: none; }
		.visible { display: inline; }
	</style>
	
	<script type="text/javascript">
		function oculta()
		{

		 var enlace = document.getElementById("textoid");
		 enlace.className = "oculto";
		}
		function muestra(){
			var link = document.getElementById('textoid');
			link.className="visible"
		}
	</script>
	
	</head>
	<body>
		<p id="textoid" style="visible">Lorem ipsum dolor sit amet, consectetuer
		adipiscing easdft. Sed mattis enim vitae orci. Pellentesque </p>
		<br><br><span onclick="oculta()" style="border:1px solid #ccc;background-color:aqua; padding:4px;border-radius:5px;cursor:pointer;" >Ocultar</span><br><br>
		<span onclick="muestra()" style="border:1px solid #ccc;background-color:aqua; padding:4px;border-radius:5px;cursor:pointer;" >Ver</span>
	</body>
</html>	