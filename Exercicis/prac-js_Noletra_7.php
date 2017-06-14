<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD> <TITLE>EX_7</TITLE>
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
	//var numero = esMayuscula(prompt("Introduce una cadena"));

	function esMayuscula(cadena){
		if(cadena == cadena.toUpperCase()){
			return("La cadena " + " ' " + cadena + " ' " + " es may�scula");
		}else if(cadena == cadena.toLowerCase()){
			return("La cadena " + " ' " + cadena + " ' " + " es min�scula");
		}
	}

	alert(esMayuscula("OBJETO VOLADOR NO IDENTIFICADO"));
	alert(esMayuscula("en un lugar de la mancha"));
	alert(esMayuscula("en un lugar de menorca"));


</script>

<h1 style="text-align:center; font-family:monospace;";> Exercici 7 </h1>

<div class="body_sp" style="text-align:center";>

</div>





</BODY>
</HTML>
