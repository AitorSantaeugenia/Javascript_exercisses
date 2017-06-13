<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD> <TITLE>Tres en raya</TITLE>
<META http-equiv=Content-Type content="text/html; charset=iso-8859-1">
<META content="Microsoft FrontPage 4.0" name=GENERATOR>
</HEAD>
<BODY bgColor=#ffffff>

<style>

.tictac {
    background-color: white;
    color: red;
    border: 2px solid #555555;
	font-weight:600;
	font-family:monospace;
}

.tictac:hover {
    background-color: #555555;
    color: red;
	font-weight:600;
	font-family:monospace;
}
#id_body{
	border:1px solid green;
	height:300px;
}
</style>

<SCRIPT>
	function mostrarValor(x){
		//var z = document.getElementById('comida').value=x;
		document.getElementById('id_body').innerHTML=x;
		
	}
</script>

</SCRIPT>
<h1 style="text-align:center; font-family:monospace;";> Exercici 5 </h1>
<div class="body_sp" style="text-align:center";>
	<form action="#">
		<select name="elejir_comida" 
			onchange="mostrarValor(this.options[this.selectedIndex].innerHTML);">
			<option value="1">Pizza</option>
			<option value="2">Hamburguesa</option>
			<option value="3">Kebab</option>
		</select>
	<!-- <input type="text" name="comida" id="comida" value="" /> -->
	
	<!-- INSERT INTO DIV -->
	<br/><br/>
		<div id="id_body">
		
		</div>
	</form>
</div>





</BODY>
</HTML>
