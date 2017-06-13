<!DOCTYPE html5>
<html>
<!-- IM THE COPY/PASTAH MASTA -->
<!-- http://www.lawebdelprogramador.com/codigo/JavaScript/2320-Cargar-valores-en-un-select-dependiendo-de-la-seleccion-en-otro-select.html -->

<!-- INICI HEAD -->
	<head>
	
		<!-- INIC SCRIPTS -->
		<script type="text/javascript">
			function cargarSelect2(valor){
				//ARRAY DE LOS VALORES DEL SEGUNDO SELECT
				var arrayValores=new Array(
					new Array(1,1,"Andalucía"),
					new Array(1,2,"Baleares"),
					new Array(1,3,"Comunidad Valenciana"),
					new Array(1,4,"Extremadura"),
					new Array(1,5,"Asturias"),
					new Array(1,6,"Murcia"),
					new Array(2,1,"Sudoeste"),
					new Array(2,2,"Sudeste"),
					new Array(2,3,"Londres"),
					new Array(3,1,"Isla de Francia"),
					new Array(3,2,"Normandía"),
					new Array(3,3,"Nueva Aquitania"),
					new Array(3,4,"Occitania")
				);
				
				if(valor==0) {
					//desactivamos el segundo select
					document.getElementById("select2").disabled=true;
				}else{
					//eliminamos todos los posibles valores que contenga el select2
					document.getElementById("select2").options.length=0;
 
					//añadimos los nuevos valores al select2
					document.getElementById("select2").options[0]=new Option("Selecciona una opcion", "0");
			for(i=0;i<arrayValores.length;i++){
            // unicamente añadimos las opciones que pertenecen al id seleccionado
            // del primer select
            if(arrayValores[i][0]==valor)
            {
                document.getElementById("select2").options[document.getElementById("select2").options.length]=new Option(arrayValores[i][2], arrayValores[i][1]);
            }
        }
 
        // habilitamos el segundo select
        document.getElementById("select2").disabled=false;
    }
}

			function seleccinado_select2(value){
				var v1 = document.getElementById("select1");
				var valor1 = v1.options[v1.selectedIndex].value;
				var text1 = v1.options[v1.selectedIndex].text;
				var v2 = document.getElementById("select2");
				var valor2 = v2.options[v2.selectedIndex].value;
				var text2 = v2.options[v2.selectedIndex].text;
			}
		</script>
		
	</head>
<!-- FI    HEAD -->	



<!-- INICI BODY -->
	<body>
	
		<div>
		<select id='select1' onchange='cargarSelect2(this.value);'>
            <option value='0'>Selecciona una País</option>
            <option value='1'>España</option>
            <option value='2'>Inglaterra</option>
            <option value='3'>Francia</option>
        </select>
		</div>
		
		<div>
		<br/>
		<select id='select2' onchange='seleccinado_select2();' disabled>
            <option value='0'>Selecciona una Región</option>
        </select>
		</div>
		
	</body>
<!-- FI BODY -->


</html>