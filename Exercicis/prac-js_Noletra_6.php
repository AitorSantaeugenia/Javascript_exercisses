<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD> <TITLE>EX_6</TITLE>
	<META http-equiv=Content-Type content="text/html;>
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
	var numero = prompt("Introduce un número entero");
	var resultado = parImpar(numero);
	var mayorquediez = mayorDiez(numero);
	alert("El número "+numero+" es "+resultado + mayorquediez);
	
	function mayorDiez(){
		if(numero>10){
			return "y es mayor que 10";
		}else{
			return " ";
		}
	}
	
		function parImpar(numero){
			if(numero % 2 == 0) {
				return "par ";
				
			}else {
				return "impar ";
				
			}
		}
		
	
</script>

<h1 style="text-align:center; font-family:monospace;";> Exercici 6 </h1>

<div class="body_sp" style="text-align:center";>
	
</div>





</BODY>
</HTML>
