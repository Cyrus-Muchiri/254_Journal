<?php 
define("HOST", "localhost");
define("USERNAME","root");
define("PASSWORD", "");
define("DATABASE", "sarajaco_projects");

$mysql_connection = mysqli_connect(HOST, USERNAME, PASSWORD);

mysqli_select_db($mysql_connection, DATABASE);
?>