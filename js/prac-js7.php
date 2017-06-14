<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
	<script type="text/javascript">
			
		function esMayuscula(texto)
		{
			var contadorMAY=0;
			var contadorMIN=0;
			var contadorNUM=0;
			
			for (i=0; i<texto.length;i++)
			{
				 
				
				if(Number.isInteger(Number.parseInt(texto.charAt(i))))
				
				{
					contadorNUM++;
					
				}else if(texto.charAt(i)==texto.charAt(i).toUpperCase())
				{
					contadorMAY++;
				}
				else
				{
					contadorMIN++;
				}
				
			}
			
			
			if(contadorMAY==0 && contadorMIN>0 && contadorNUM==0)
			{
				return ('TODO MINÚSCULA');
			}
			else if(contadorMIN==0 && contadorMAY>0 && contadorNUM==0)
			{
				return ('TODO MAYÚSCULA');
			}
			else if (contadorMIN>0 && contadorMAY>0 && contadorNUM==0)
			{
				return ('MEZCLA MINÚSCULAS Y MAYÚSCULAS');
				
			}else if (contadorMIN>0 && contadorMAY>0 && contadorNUM>0)
			{
				
				return ('MEZCLA MINÚSCULAS, MAYÚSCULAS Y NÚMEROS');
				
			}else if (contadorMIN>0 && contadorMAY==0 && contadorNUM>0)
			{
				
				return ('MEZCLA MINÚSCULAS  Y NÚMEROS');
				
			}else if (contadorMIN==0 && contadorMAY>0 && contadorNUM>0)
			{
				
				return ('MEZCLA MAYÚSCULAS  Y NÚMEROS');
				
			}else if (contadorMIN==0 && contadorMAY==0 && contadorNUM>0)
			{
				return ('TODO NÚMEROS');
			}else
				return ('OTRAS COMBINACIONES');
		
			
		}
	</script>
	<form>
		<input onkeypress="detecta(event);" id="texto"/> 
		<script>
			function detecta (event)
			{
				var tecla= event.keyCode;
				//alert(tecla);
				if (tecla==13)
				{
					alert(esMayuscula(document.getElementById('texto').value))
				}	
			}
			
		</script>
	</form>
	<span onclick="alert(esMayuscula(document.getElementById('texto').value))">ENVIAR</span> 
	</body>
</html>