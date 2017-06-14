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
			//alert(x);


			tecla = evt.keyCode;
			shift= evt.shiftKey;

			//alert(x.length+' '+tecla + ' ' +shift);

			if(x.length>=8)
			{



		}else if(tecla==8){

			}else	if( (x.length==0) || (tecla==16) )
		{


		}else	if( x.length>0 && x.length<=3)
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
