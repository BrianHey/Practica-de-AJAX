$(document).ready(function(){

	$.post("estados.php", function(datos){
			$("#estadoshtml").html(datos);
					
	});

	$("#estadoshtml").change(function(){
	
		var estado = $("#estadophp").val();
			
			$.get("municipios.php", {estado:estado}, function(datos){

				$("#municipioshtml").html(datos);

					});

	});

	$("#municipios").change(function(){

		var municipio= $("#municipiophp").val();
				
			$.get("parroquias.php", {municipio:municipio}, function(datos){

				$("#parroquiashtml").html(datos);

					});

	});
});
