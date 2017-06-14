<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
	<script type="text/javascript">
		var numero = prompt("Introduce un número entero");
		var resultado = parImpar(numero);
		var mayor = mayor(numero);
		
		alert("El número "+numero+" es "+resultado+" y "+mayor);
		
		function parImpar(numero)
		{
		 if(numero % 2 == 0) 
		 {
			return "par";
		 }
		 else 
		 {
			return "impar";
		 }
		}
		
		function mayor(numero)
		{
			 if(numero>10) 
			 {
				return "mayor que 10";
			 }else if(numero==10)
			 {
				 return "igual a 10";
			 }
			 else 
			 {
				return "menor que 10";
			 }
		}
	</script>
	</body>
</html>