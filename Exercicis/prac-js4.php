<!DOCTYPE html5>
<html>
<!-- IM THE COPY/PASTAH MASTA -->
<!-- http://www.lawebdelprogramador.com/codigo/JavaScript/2320-Cargar-valores-en-un-select-dependiendo-de-la-seleccion-en-otro-select.html -->

<!-- INICI HEAD -->
	<head>
	
		<!-- INIC SCRIPTS -->
		<script type="text/javascript">
			function aLaDerecha(){
				//alert("A la derecha");
				var aIzquierda = document.getElementById("textDerecha");
				var aDerecha = document.getElementById("textIzquierda");
				aIzquierda.value=aDerecha.value;
			}
			
			function aLaIzquierda(){
				//alert("A la izquierda");
				var aIzquierda = document.getElementById("textDerecha");
				var aDerecha = document.getElementById("textIzquierda");
				aDerecha.value=aIzquierda.value;
				
			}
		</script>
		
	</head>
<!-- FI    HEAD -->	



<!-- INICI BODY -->
	<body>
	
		<textarea rows="4" cols="50" id="textIzquierda"></textarea>
		<textarea rows="4" cols="50" id="textDerecha"></textarea>
		<div id="derecho" style="border:1px solid green; width: 30%; text-align:center;" onclick="aLaIzquierda()";> Mover izquierda</div>
		<div id="izquierdo" style="border:1px solid green; width: 30%; text-align:center;"; onclick="aLaDerecha()";> Mover derecha</div>
		
	</body>
<!-- FI BODY -->


</html>