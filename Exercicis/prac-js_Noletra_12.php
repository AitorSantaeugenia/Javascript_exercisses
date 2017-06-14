<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<head> <TITLE>EX_12</TITLE>
	<META http-equiv=Content-Type content="text/html";>
	<META content="Microsoft FrontPage 4.0" name=GENERATOR>

	<meta charset="utf-8">


	<style type="text/css">
		div{
			text-align:center;
		}
	</style>

	<script type="text/javascript">
		function esMultiplo(){
			var x = document.getElementById("number1").value;
			var y = document.getElementById("number2").value;

			if((x % y) == 0){
				alert("Es multiplo");
			}else{
				alert("No es multiplo");
			}
			//alert(x);
		}

	</script>

</head>

<body>
<h1> EJERCICIO 12 </h1>
	Numero 1: <input type="number" name="number1" id="number1">-> Sera multiplo del segundo<br>
	Numero 2: <input type="number" name="number2" id="number2"><br>
	<br/>
	<input type="button" name="multiplo" value="Multiplo" onclick="esMultiplo()";><br>

</body>

</HTML>
