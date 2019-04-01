$(document).ready(function(){

	alert("eoaos");

	$.post("estados.php", function(datos){
			$("#estadoshtml").html(datos);

	});

	$("#estadoshtml").change(function(){
	

		var estado = $("#estadophp").val();
			
			$.get("municipios.php", {estado:estado}, function(datos){

				$("#ciudades").html(datos);

					});
	});

	$("#ciudades").change(function(){

		var municipio= $("#municipiophp").val();
			
				
			$.get("parroquias.php", {municipio:municipio}, function(datos){

				$("#parroquias").html(datos);

					});

	});
});

