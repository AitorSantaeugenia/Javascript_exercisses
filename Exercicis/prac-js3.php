<!DOCTYPE html5>
<html>
<!-- IM THE COPY/PASTAH MASTA -->
<!-- http://www.lawebdelprogramador.com/codigo/JavaScript/2320-Cargar-valores-en-un-select-dependiendo-de-la-seleccion-en-otro-select.html -->

<!-- INICI HEAD -->
	<head>
		
		<!-- INIC SCRIPTS -->
		<script type="text/javascript">
			function escondePrimero(){
				document.getElementById('segundoRad').style.display = 'none';
				document.getElementById('tercerRad').style.display = 'none';
				document.getElementById('segundoRadLab').style.visibility = "hidden";
				document.getElementById('tercerRadLab').style.visibility = "hidden";
			}
			
			function aparecenTodos(){
				document.getElementById('segundoRad').style.display = 'inline';
				document.getElementById('tercerRad').style.display = 'inline';
				document.getElementById('segundoRadLab').style.visibility = "visible";
				document.getElementById('tercerRadLab').style.visibility = "visible";
				document.getElementById('cuartoRad').style.display = 'inline';
				document.getElementById('quintoRad').style.display = 'inline';
				document.getElementById('cuartoRadLab').style.visibility = "visible";
				document.getElementById('quintoRadLab').style.visibility = "visible";
			}
			
			function escondeTercer(){
				document.getElementById('cuartoRad').style.display = 'none';
				document.getElementById('quintoRad').style.display = 'none';
				document.getElementById('cuartoRadLab').style.visibility = "hidden";
				document.getElementById('quintoRadLab').style.visibility = "hidden";
			}
		</script>
		
	</head>
<!-- FI    HEAD -->	



<!-- INICI BODY -->
	<body>
	
		<input type="radio" name="textRadio" value="text1" id="primeroRad" onclick="escondePrimero()"> <label id="primeroRadLab">Texto 1</label></input><br>
		<input type="radio" name="textRadio" value="text2" id="segundoRad"><label id="segundoRadLab">Texto 2</label></input><br>
		<input type="radio" name="textRadio" value="text3" id="tercerRad" onclick="escondeTercer()"><label id="tercerRadLab">Texto 3</label></input><br>
		<input type="radio" name="textRadio" value="text4" id="cuartoRad"><label id="cuartoRadLab">Texto 4</label></input><br>
		<input type="radio" name="textRadio" value="text5" id="quintoRad"><label id="quintoRadLab">Texto 5</label></input><br>
		<input type="radio" name="textRadio" value="text6" id="sextoRad" onclick="aparecenTodos()"><label id="sextoRadLab">Texto 6</label></input><br>
		
	</body>
<!-- FI BODY -->


</html>