<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<script>
			var name=prompt("Introduce tu nombre, por favor.","nombre");
			
			function saludo()
			{
				var today = new Date ();
				
				var hrs = today.getHours();
				
				if (hrs<=14)
				{
					return "buenos días";
				}
				else if (hrs>=14 && hrs<=20)
				{
					return"buenas tardes";
				}
				else if (hrs>=20 && hrs<=23)
				{
					return"buenas noches";
				}
			}
			document.write('Hola, ' + name + ', ' + saludo() + '!');
			document.writeln('<br>');
			
			
		</script>

	</body>
</html>