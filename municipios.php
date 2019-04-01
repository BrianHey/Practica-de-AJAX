<?php

$link = mysql_connect("localhost", "root", "12345678") or die ("No loco");

mysql_select_db('pruebas', $link) or die('No se pudo seleccionar la base de datos');
mysql_set_charset('utf8');

$estadophp = $_GET['estado'];

$consultaestados= mysql_query("SELECT * FROM estados WHERE estado='$estadophp'");

$estados= mysql_fetch_array($consultaestados);
	
		$puntero = $estados[0];
	
$consultamunicipios= mysql_query("SELECT * FROM municipios WHERE id_estado='$puntero'");
		
	?>  <select id="municipiophp">	<?php

	 while ( $municipio= mysql_fetch_array($consultamunicipios)) {
		
		?> <option><?php echo $municipio[2]; ?> </option> <?php
	
}

?></select><br><br>