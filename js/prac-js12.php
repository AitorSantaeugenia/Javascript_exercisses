<!doctype>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	</head>
	<body>
		<form>
			A:<input id="dividendo" type="number"></input>
			B:<input id="divisor" type="number"></input>
			<button onclick="esMultiplo()" type="button">Multiplo</button>
		</form>
	</body>
</html>


<script type="text/javascript">
	function esMultiplo()
	{
		var a = document.getElementById('dividendo').value;
		var b = document.getElementById('divisor').value;
		var resto= a % b;
	
		if (resto==0)
		{
			alert(a+' es multiplo de '+b);
		}
		else
		{
			alert(a+' no es multiplo de '+b);
		}
	}

</script>
