<?php 
$usuario = 'uhpdzh2q9o3ki1rt';
$clave = '8Vb22UR7grPDpHuEzsif';
$servidor ='bioevlsoxoji8ey3abaq-mysql.services.clever-cloud.com';
$base = 'bioevlsoxoji8ey3abaq';
$l = @mysqli_connect($servidor,$usuario,$clave) or die('ERROR con el servidor');
@mysqli_select_db($l,$base) or die ("ERROR al conectarse a la db");
@mysqli_set_charset($l,'utf8');
?> 