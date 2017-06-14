<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<head> <TITLE>EX_13</TITLE>
	<META http-equiv=Content-Type content="text/html";>
	<META content="Microsoft FrontPage 4.0" name=GENERATOR>

	<meta charset="utf-8">


	<style type="text/css">
		div{
			text-align:center;
		}
	</style>

	<script type="text/javascript">
	function alCambiar(evt)
	{
			var x = document.getElementById("number1").value;
			var z = document.getElementById("spanAdverten");
			


			tecla = evt.keyCode;
			shift= evt.shiftKey;

			
			if( ! cumpleRegla(x,x.length))
			{
				document.getElementById("number1").value="";
				x = document.getElementById("number1").value;
				
			}
			
			
			if(x.length>=8)
			{



		}else if(tecla==8)
		{
			//backespace

		}else	if( (x.length==0) || (tecla==16) )
		{
			//shit

		}else	if( x.length>=1 && x.length<=3)
			{

				 
		
		
					if( tecla >= 65 && tecla <=90 && shift){
							//es una letra mayúscula

							z.style.backgroundColor = "green";
							z.innerHTML="";
					}else
					{
						//alert("Primera posicion una letra (L) y mayuscula");

						z.style.backgroundColor = "red";
						z.innerHTML="No es una letra mayúscula";

						 document.getElementById("number1").value=document.getElementById("number1").value.substring(0,x.length-1);
					}

			}else if(x.length==4)
			{

					if( tecla == 32)
					{

						 	z.innerHTML="";
						z.style.backgroundColor = "green";
					}	else
					 {
						z.style.backgroundColor = "red";
						z.innerHTML="se esperaba un espacio";
						document.getElementById("number1").value=document.getElementById("number1").value.substring(0,x.length-1);
					}

			}else if ( x.length>=5 &&  x.length<=8 )
			{


						if((tecla >= 48 && tecla <=57) && !shift)
						{
							z.innerHTML="";
							z.style.backgroundColor = "green";
					}else
					{
							z.style.backgroundColor = "red";
						  z.innerHTML="se esperaba un número";
							document.getElementById("number1").value=document.getElementById("number1").value.substring(0,x.length-1);
					}

			}


	}

function cumpleRegla(texto, longitud)
{
	for(i=0;i<=longitud;i++)
	{
		if(i==0 && texto.charAt(0)!= texto.charAt(0).toUpperCase())return false;
		if(i==1 && texto.charAt(0)!= texto.charAt(0).toUpperCase())return false;
		if(i==2 && texto.charAt(0)!= texto.charAt(0).toUpperCase())return false;
		if(i==3 && texto.charAt(0)== " ")return false;
		if(i==4 && ! Number.isInteger(Number.parseInt(texto.charAt(4))))return false;
		if(i==5 && ! Number.isInteger(Number.parseInt(texto.charAt(5))))return false;
		if(i==6 && ! Number.isInteger(Number.parseInt(texto.charAt(6))))return false;
		if(i==7 && ! Number.isInteger(Number.parseInt(texto.charAt(7))))return false;
		
	}
	
	return true;
}

</script>

</head>

<body>
<h1> EJERCICIO 13 </h1>
	<p>Introduce numeros y letras en formatos: LLL NNNN (ojo con el espacio)</p>
	<p> Siendo L = LETRA y N = NUMERO </p>
	<input type="text" name="number1" id="number1" maxlength="8" onkeyup="alCambiar(event);">
	<br/><br/><br/>
	<span id="spanAdverten" class="spanAdvertencia1" style="border:1px solid green; background-color:green; color:white;"> ERROR </span>


</body>

</HTML>
