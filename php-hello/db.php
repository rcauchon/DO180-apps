<?php
$dbhost = getenv("MYSQLDB_SERVICE_HOST");
$dbuser = getenv("database-user");
$dbpwd = getenv("database-password");
$dbname = getenv("database-name");

print " Host: ".$dbhost. "<br>";
/*
print " Host: " .$dbhost.  " DBname:" .$dbname. " User:" .$dbuser. " Password:" . $dbpwd. "<br>";
*/
$connection = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);

if ($connection->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
} else {
    printf("Connected to the database");
}
$connection->close();
?>
