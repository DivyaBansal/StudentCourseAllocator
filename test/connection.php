<?php
error_reporting(E_ALL & ~E_DEPRECATED);
$connect = mysql_connect("localhost","root","mysql") or die("Couldn't connect to the database!");
mysql_select_db("project") or die("Couldn't connect to database");
?>
