<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD> <TITLE>EX_8</TITLE>
	<META http-equiv=Content-Type content="text/html";>
	<META content="Microsoft FrontPage 4.0" name=GENERATOR>
	<meta charset=utf-8>
</HEAD>
<BODY bgColor=#ffffff>

<style>

	.tictac {
		background-color: white;
		color: red;
		border: 2px solid #555555;
		font-weight:600;
		font-family:monospace;
	}

	.tictac:hover {
		background-color: #555555;
		color: red;
		font-weight:600;
		font-family:monospace;
	}

	#id_body{
		border:1px solid green;
		height:300px;
	}

</style>

	<script>
		
		var cont = 0;

		function mouseHover(comptador)
		{
			if(comptador==0)
			{
				var texto3 = "Y esta es la frase para la ampliación del texto."
				var elemento3 = document.getElementById("parrafo");
				elemento3.innerHTML += texto3;
			}
		}


	</script>

<body>
	<h1 style="text-align:center; font-family:monospace;";> Exercici 8 </h1>

	<div class="body_sp" style="text-align:center";>

		<p onclick="mouseHover(cont); cont++" id="parrafo">Pulsa aquí para ampliar el texto anterior: </p>

	</div>
</body>
</HTML>
