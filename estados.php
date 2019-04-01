<?php

$link = mysql_connect("localhost", "root", "12345678") or die ("No loco");

mysql_select_db('pruebas', $link) or die('No se pudo seleccionar la base de datos');

mysql_set_charset('utf8');

$estados= mysql_query('SELECT * FROM estados');

	?>  <select id="estadophp">	<?php

	 while ( $estadosarray=mysql_fetch_array($estados) ) {
		?> <option><?php echo $estadosarray[1]; ?> </option> <?php
	
}

?></select>
