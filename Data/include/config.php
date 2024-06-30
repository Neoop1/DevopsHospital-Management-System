<?php
$envVarMARIADB_HOST = getenv('MARIADB_HOST');
$envVarMARIADB_PASSWORD = getenv('MARIADB_PASSWORD');
$envVarMARIADB_USER = getenv('MARIADB_USER');
$envVarMARIADB_DB = getenv('MARIADB_DB');


define('DB_SERVER',$envVarMARIADB_HOST);
define('DB_USER',$envVarMARIADB_USER);
define('DB_PASS' ,$envVarMARIADB_PASSWORD);
define('DB_NAME', $envVarMARIADB_DB);
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>