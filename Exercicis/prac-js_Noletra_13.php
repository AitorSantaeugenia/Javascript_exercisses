<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<head> <TITLE>EX_13</TITLE>
	<META http-equiv=Content-Type content="text/html;>
	<META content="Microsoft FrontPage 4.0" name=GENERATOR>
	
	<meta charset="utf-8">


	<style type="text/css">
		div{
			text-align:center;
		}
	</style>

	<script type="text/javascript">
		function alCambiar(){
			var x = document.getElementById("number1").value;
			//alert(x);
			if(x.length>=9){
				alert("Te has pasado con la longitud");
				var z = document.getElementById("spanAdverten");
				z.style.backgroundColor = "red";
			}
			
			var num1 = x[0];
			var num2 = x[1];
			var num3 = x[2];
			var num4 = x[3];
			var num5 = x[4];
			var num6 = x[5];
			var num7 = x[6];
			var num8 = x[7];
			
			var letrasTres = num1+num2+num3;
			//alert(num4);
			
			if(!isNaN(num1) || !isNaN(num2) || !isNaN(num3)){
				alert("Tres primeros digitos no son una letra");
				var z = document.getElementById("spanAdverten");
				z.style.backgroundColor = "red";
			}
			
			if(isNaN(num5) || isNaN(num6) || isNaN(num7) || isNaN(num8)){
				alert("Cuatro ultimos digitos no son numeros");
				var z = document.getElementById("spanAdverten");
				z.style.backgroundColor = "red";
			}
			
			if(letrasTres != letrasTres.toUpperCase()){
				alert("Las tres primeras letras no estan en mayuscula");
				var z = document.getElementById("spanAdverten");
				z.style.backgroundColor = "red";
			}
			
			if(num4 != " "){
					alert("No has dejado espacio en la cuarta posicion");
			}


			

			
			
		}
	</script>
	
</head>

<body>
<h1> EJERCICIO 13 </h1>
	<p>Introduce numeros y letras en formatos: LLL NNNN (ojo con el espacio)</p>
	<p> Siendo L = LETRA y N = NUMERO </p>
	<input type="text" name="number1" id="number1" value="asd 1989" onchange="alCambiar(this)">
	<br/><br/><br/>
	<span id="spanAdverten" class="spanAdvertencia1" style="border:1px solid green; background-color:green; color:white;"> ERROR </span>

	
</body>

</HTML>
