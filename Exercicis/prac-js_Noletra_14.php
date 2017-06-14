<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<head> <TITLE>EX_14</TITLE>
	<META http-equiv=Content-Type content="text/html";>
	<META content="Microsoft FrontPage 4.0" name=GENERATOR>

	<meta charset="utf-8">


	<style type="text/css">
		div{
			text-align:center;
		}
	</style>

	<script type="text/javascript">
		function comptadorPalabros(object){
			var x = document.getElementById("spanEx14");
			y = document.getElementById("textArea14").value.length;
			//alert(y);
			var objeto = object;
			//alert(objetoLongitud);
			//x.innerHTML = y;
			//alert(y);
			if(y>=20){
				document.getElementById("textArea14").style.color = "red";
			}else{
				pintarNegre();
			}

			var maxlenght = 29;

			if (objeto.value.length > maxlenght) {
				objeto.value = objeto.value.substring(0, maxlenght);
			} else {
				maxlenght.value = maxlenght - objeto.value.length;
			}

			x.innerHTML = y;
		}

		function pintarNegre(){
			yom = document.getElementById("textArea14").value.length;
			//alert(yom);
			if(yom<=20){
			document.getElementById("textArea14").style.color = "black";
			}
		}
	</script>

</head>

<body>
<h1> EJERCICIO 14 </h1>
	<textarea rows="4" cols="50" id="textArea14" value="" onkeydown="comptadorPalabros(this);" maxlength="30"> 0
	</textarea>
	<br/><br/>

	<span id="spanEx14" style="border:1px solid green; padding-left:10px; padding-right:10px;"> </span>

</body>

</HTML>
