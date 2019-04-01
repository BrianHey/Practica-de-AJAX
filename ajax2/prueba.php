<?php



$link = mysql_connect("localhost", "root", "") or die ("No loco");

mysql_select_db('pruebas', $link) or die('No se pudo seleccionar la base de datos');


$hola= mysql_query('SELECT * FROM estados');

	?>  <select id="estados">	<?php

	 while ( $user=mysql_fetch_array($hola)) {
		
		?> <option><?php echo $user[1]; ?> </option> <?php
	
}

?></select>