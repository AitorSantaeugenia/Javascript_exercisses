<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<head> <TITLE>EX_11</TITLE>
	<META http-equiv=Content-Type content="text/html";>
	<META content="Microsoft FrontPage 4.0" name=GENERATOR>

	<meta charset="utf-8">


	<style type="text/css">
		div{
			text-align:center;
		}
	</style>

	<script type="text/javascript">
		var cont = 0;

		function aNegrotodo(objecte, color){
			//alert(color);
			//alert(objecte);
			objecte.style.background = color;
			objecte.style.color = "white";


		}

		function aNormalTodo(objecte, color){
			objecte.style.background = color;
			objecte.style.color = "black";
		}


		function mostrarValorColor(objecte, cont){
			var z = this.innerHTML;

			if(cont % 2 == 0) {
				var x = objecte.style.background;
				//objecte.innerHTML = x;


				var y = x.toString(16);
				//alert(y);

				var num1 = parseInt(y[4]+y[5]+y[6]);
				var num2 = parseInt(y[9]);
				var num3 = parseInt(y[12]);

				var omega = "#" + componentToHex(num1) + componentToHex(num2) + componentToHex(num3);
				//alert(omega);

				objecte.innerHTML = omega;


			}else {
				objecte.innerHTML = "DIV";
			}

			cont++;

		}

		function componentToHex(c) {
			var hex = c.toString(16);
			return hex.length == 1 ? "0" + hex : hex;
		}
	</script>

</head>

<body>
<h1> EJERCICIO 11 </h1>
	<!-- DIV 1 -->
	<div id="1" onclick="mostrarValorColor(this, cont); cont++"; onmouseover="aNegrotodo(this, '#FF0000')"; onmouseout="aNormalTodo(this, '#FFFFFF')"; style="border:1px solid black; background-color:red;">
	DIV
	</div>
	<br/>

	<!-- DIV 2 -->
	<div id="2" onclick="mostrarValorColor(this, cont); cont++"; onmouseover="aNegrotodo(this, '#FF0000')"; onmouseout="aNormalTodo(this, '#FFFFFF')"; style="border:1px solid black">
	DIV
	</div>
	<br/>

	<!-- DIV 3 -->
	<div id="3" onclick="mostrarValorColor(this, cont); cont++"; onmouseover="aNegrotodo(this, '#FF0000')"; onmouseout="aNormalTodo(this, '#FFFFFF')"; style="border:1px solid black">
	DIV
	</div>
	<br/>

	<!-- DIV 4 -->
	<div id="4" onclick="mostrarValorColor(this, cont); cont++"; onmouseover="aNegrotodo(this, '#FF0000')"; onmouseout="aNormalTodo(this, '#FFFFFF')"; style="border:1px solid black">
	DIV
	</div>
	<br/>

	<!-- DIV 5 -->
	<div id="5" onclick="mostrarValorColor(this, cont); cont++"; onmouseover="aNegrotodo(this, '#FF0000')"; onmouseout="aNormalTodo(this, '#FFFFFF')"; style="border:1px solid black">
	DIV
	</div>
	<br/>

	<!-- DIV 6 -->
	<div id="6" onclick="mostrarValorColor(this, cont); cont++"; onmouseover="aNegrotodo(this, '#FF0000')"; onmouseout="aNormalTodo(this, '#FFFFFF')"; style="border:1px solid black">
	DIV
	</div>

</body>

</HTML>
