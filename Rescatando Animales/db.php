<?php

define ("DB_HOST", "localhost"); // set database host

define ("DB_USER", ""); // set database user

define ("DB_PASS",""); // set database password

define ("DB_NAME",""); // set database name



$link = mysql_connect(DB_HOST, DB_USER, DB_PASS) or die("No se puede establecer una conexión.");

$db = mysql_select_db(DB_NAME, $link) or die("´No se puede seleccionar la base de datos");

?>