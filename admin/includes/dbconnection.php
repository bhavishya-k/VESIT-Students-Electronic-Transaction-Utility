<?php 
// DB credentials.
define('DB_HOST','db5002273471.hosting-data.io');
define('DB_USER','dbu660666');
define('DB_PASS','2712001vV***');
define('DB_NAME','dbs1830887');
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>