<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body  onload="visible()">
	<div  >
	<form id="formulario">
		<span id="numuno"> 1.
		
		<input onclick="visible()" checked type="radio" name="desmarcado" id="uno">2 y 3 desaparecen
		</span>
		
		<br>
		
		
		
		<span id="numdos"> 2.<input   type="radio" name="desmarcado" id="dos"> visible</span><br>
		<span id="numtres"> 3.<input onclick="visible()"  type="radio" name="desmarcado" id="tre"> 4 y 5 desaparecen</span><br>
		<span id="numcua"> 4.<input  type="radio" name="desmarcado" id="cua"> visible</span><br>
		<span id="numcin"> 5.<input   type="radio" name="desmarcado" id="cin"> visible</span><br>
		<span id="numsei"> 6.<input onclick="visible()" type="radio" name="desmarcado" id="sei"> Todo visible </span><br>
		
	</form>
	
		<script>
			function visible()
			{
				var uno= document.getElementById('uno');
				var numuno= document.getElementById('numuno');
				var dos= document.getElementById('dos');
				var numdos= document.getElementById('numdos');
				var tre= document.getElementById('tre');
				var numtres= document.getElementById('numtres');
				var cua= document.getElementById('cua');
				var numcua= document.getElementById('numcua');
				var cin= document.getElementById('cin');
				var numcin= document.getElementById('numcin');
				var sei= document.getElementById('sei');
				var numsei= document.getElementById('numsei');
				
				if (uno.checked)
				{
					
					numuno.style.display='inline';
					
					numdos.style.display='none';
					
					numtres.style.display='none';
					
					numcua.style.display='inline';
					
					numcin.style.display='inline';
					
					numsei.style.display='inline';
				}else if (tre.checked)
				{
					 
					numuno.style.display='inline';
					 
					numdos.style.display='inline';
					 
					numtres.style.display='inline';
					 
					numcua.style.display='none';
					 
					numcin.style.display='none';
					 
					numsei.style.display='inline';
				}
				else 
				 
				{
					 
					numuno.style.display='inline';
					 
					numdos.style.display='inline';
					 
					numtres.style.display='inline';
					 
					numcua.style.display='inline';
					 
					numcin.style.display='inline';
					 
					numsei.style.display='inline';
				}
				  
			}
		</script>
	</div>
	</body>
</html>