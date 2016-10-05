<?php
$host="localhost";
$user="root";
$pw="";
$db="bd_unidep";
$con=mysql_connect($host,$user,$pw) or die("Problemas al conectar con la base de datos");
mysql_select_db($db,$con) or die("problemas al conectarse con la base de datos");
?>
