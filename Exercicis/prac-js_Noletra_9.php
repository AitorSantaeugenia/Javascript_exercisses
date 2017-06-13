<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<head> <TITLE>EX_9</TITLE>
	<META http-equiv=Content-Type content="text/html;>
	<META content="Microsoft FrontPage 4.0" name=GENERATOR>
	<meta charset=utf-8>


	<style type="text/css">
		.oculto { display: none; }
		.visible { display: inline; }
	</style>

	
	<script type="text/javascript">
		function muestra() {
			alert("MUESTRA");
			var enlace = document.getElementById("textoid");
			enlace.className = "visible";
		}
		
		function desaparece() {
			alert("DESAPARECE");
			var enlace = document.getElementById("textoid");
			enlace.className = "oculto";
		}
	</script>
</head>

<body>
<div>
	<p id="textoid" style="visible">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed mattis enim vitae orci. Pellentesque </p>
</div><br/>
	<span style="border:1px solid red;" onclick="muestra()"> APARECE </span><br/>
	<span style="border:1px solid green;" onclick="desaparece()"> DESAPARECE </span>
</body>

</HTML>
