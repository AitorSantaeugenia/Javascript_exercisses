<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
	
	<form id="formulario">
		
		<select id="pais" name="paises1" onchange="paises()">
		  <option id="Espana" value="Espana">ESPAÑA</option>
		  <option id="Japon" value="Japón">JAPÓN</option>
		</select>
		
		<select id="regiones1" name="regiones1">
		  <option id="Madrid" value="Madrid">Madrid</option>
		  <option id="Japón" value="Japón">Baleares</option>
		  <option id="Baleares"value="Baleares">Barcelona</option>
		  <option id="Extremadura" value="Extremadura">Extremadura</option>
		  <option id="Galicia"value="Galicia">Galicia</option>
		</select>
		
		
		<select id="regiones2" name="regiones2" style="display:none;">
		  <option id="chubu" value="Tokyo">Chūbu</option>
		  <option id="hokkaido" value="Saitama">Hokkaidō</option>
		  <option id="kanto"value="Baleares">Kantō</option>
		  <option id="shikoku" value="Extremadura">Shikoku</option>
		  <option id="tohoku"value="Galicia">Tōhoku</option>
		</select>
		
	</form>
	
		<script>
			
			
			function paises()
			{
				var paises= document.getElementById('pais');
				var espana= document.getElementById('regiones1');
				var japon= document.getElementById('regiones2');
				
				
				if (paises.selectedIndex==0)
				{
					espana.style.display='inline';
					japon.style.display='none';
				}
				else if (paises.selectedIndex==1)
				{
					japon.style.display='inline';
					espana.style.display='none';
				}
			}
		</script>
	
	</body>
</html>