<?php
$dbhost = getenv("MYSQLDB_SERVICE_HOST");
$dbuser = getenv("databaseuser");
$dbpwd = getenv("databasepassword");
$dbname = getenv("databasename");

print " Host: ".$dbhost. "<br>";
/*
print " Host: " .$_ENV["INFODB_SERVICE_HOST"].  " DBname:" .$_ENV["POSTGRESQL_DATABASE"]. " User:" .$_ENV["POSTGRESQL_USER"]. " Password:" . $_ENV["POSTGRESQL_PASSWORD"]. "<br>";
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
