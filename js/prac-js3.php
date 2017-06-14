<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<style>
			#caja{
				border: 1px solid black;
				 
			}
			
			div.color1{
				background-color:#facaca;
				border:4px solid #ccc;
			}
			
			div.color2{
				background-color:#defeca;
			}
			
			div.color3{
				background-color:#FF0000;
			}
		</style>
	</head>
	<body>
	
	<div id="caja" class="color2" onclick="cambiarcolor(cont);cont++;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
	<br/>
	<span  style="border:1px solid #ccc; background-color:aqua; padding:3px; cursor:pointer;" onclick="cambiarcolor(cont);cont++;" > INTERRUPTOR</span>
	
	<span onclick="cambiaTodo('color1');" style="border:1px solid #ccc; background-color:aqua; padding:3px; cursor:pointer;" > CAMBIA TODO</span>
		<script>
		
		
	 
		var cont=0;
		
			function cambiarcolor(cont)
			{
				
				
				var caja= document.getElementById('caja');
				 
				
				if (cont % 2==0)
				{
					caja.className='color1';
					
				}else 
				{
					caja.className='color2';
				}
				
			}
			
			function cambiaTodo(nombreClase) 
			{
				var x = document.getElementsByClassName(nombreClase);
				var i;
				for (i = 0; i < x.length; i++) 
				{
					x[i].className = 'color3';
				}
			}
		</script>
		
		
		
		

	</body>
</html>