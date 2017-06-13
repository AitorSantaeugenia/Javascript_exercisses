<!DOCTYPE html5>
<html>


<!-- INICI HEAD -->
	<head>
	
		<!-- INIC SCRIPTS -->
		<script type="text/javascript">
			function OnClickSpan(){
				var textInput = document.getElementById("textInp");
				var textArea = document.getElementById("textArea");
				textArea.innerHTML=textInput.value;
				}
		</script>
		
	</head>
<!-- FI    HEAD -->	



<!-- INICI BODY -->
	<body>
		<div>
			<input type="text" name="text" id="textInp"/><br>
		</div>
		
		<div>
		<br/>
			<span style="color:blue; border:1px solid green;" onclick="OnClickSpan()";> Click me</span>
		</div>
		
		<div>
		<br/>
			<textarea rows="4" cols="50" id="textArea"/> </textarea>
		</div>
	</body>
<!-- FI BODY -->


</html>