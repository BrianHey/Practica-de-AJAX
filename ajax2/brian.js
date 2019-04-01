$(document).ready(function(){

	$("#ima").click(function(){

	var nombre = $("input").val();		

	$.get("prueba.php", {nombre:nombre}, function(datos){

		$("#resultado").html(datos);

		});

	});

});