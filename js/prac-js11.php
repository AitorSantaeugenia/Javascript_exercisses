<!doctype>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	</head>
	<body>
		<div id="caja1" onmouseover="cambiaColor(this,'#454545')" onmouseout="vuelveColor(this)" onclick="codiColor(this,contadorcaja1);contadorcaja1++;"  style="width:200px; height:50px; background-color:#FF6790;"></div><br>
		
		<div id="caja2" onmouseover="cambiaColor(this,'#999999')" onmouseout="vuelveColor(this)" onclick="codiColor(this,contadorcaja2);contadorcaja2++;" style="width:200px; height:50px; background-color:#FF6790;"></div><br>
		<div id="caja3" onmouseover="cambiaColor(this,'steelblue')" onmouseout="vuelveColor(this)" onclick="codiColor(this,contadorcaja3);contadorcaja3++;"   style="width:200px; height:50px; background-color:#FF6790;"></div><br>
		<div id="caja4" onmouseover="cambiaColor(this,'gold')" onmouseout="vuelveColor(this)" onclick="codiColor(this,contadorcaja4);contadorcaja4++;"   style="width:200px; height:50px; background-color:#FF6790;"></div><br>
		<div id="caja5" onmouseover="cambiaColor(this,'lightgreen')" onmouseout="vuelveColor(this)" onclick="codiColor(this,contadorcaja5);contadorcaja5++;"   style="width:200px; height:50px; background-color:#FF6790;"></div><br>
		<div id="caja6" onmouseover="cambiaColor(this,'crimson')" onmouseout="vuelveColor(this)" onclick="codiColor(this,contadorcaja5);contadorcaja5++;"  style="width:200px; height:50px; background-color:#FF6790;"></div>
	</body>
</html>


<script type="text/javascript">
var contadorcaja1=0;
var contadorcaja2=0;
var contadorcaja3=0;
var contadorcaja4=0;
var contadorcaja5=0;
var contadorcaja6=0;



	function cambiaColor(obj, color)
	{
		obj.style.background=color;
	}
	
	
	function vuelveColor(obj)
	{
		obj.style.background='#FF6790';
		
	}
	
	function codiColor(obj,n)
	{
		if(n%2==0)
		{
			obj.innerHTML='#454545';	
		}
		else 
		{
			obj.innerHTML="";
		}
	}
		
	 
</script>
