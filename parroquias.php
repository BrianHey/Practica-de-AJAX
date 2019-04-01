<?php

$link = mysql_connect("localhost", "root", "12345678") or die ("No loco");

mysql_select_db('pruebas', $link) or die('No se pudo seleccionar la base de datos');
mysql_set_charset('utf8');

$municipiophp = $_GET['municipio'];

$consultamunicipios= mysql_query("SELECT * FROM municipios WHERE municipio='$municipiophp'");

$municipios= mysql_fetch_array($consultamunicipios);
		
		$puntero = $municipios[0];

$consultaparroquias= mysql_query("SELECT * FROM parroquias WHERE id_municipio='$puntero'");
		
	?>  <select id="parroquiasphp">	<?php

	 while ( $parroquia= mysql_fetch_array($consultaparroquias)) {
		
		?> <option><?php echo $parroquia[2]; ?> </option> <?php
	
}

?></select><br><br>