<?php
print "Hello, World! Again php version is " . PHP_VERSION . "\n";

/*
$host        = INFODB_SERVICE_HOST;
$port        = INFODB_SERVICE_PORT_POSTGRESQL;
$dbname      = POSTGRESQL_DATABASE;
$user        = POSTGRESQL_USER;
$password    = POSTGRESQL_PASSWORD;
*/

$host        = ".$_ENV["INFODB_SERVICE_HOST"].";
$port        = "";
$dbname      = ".$_ENV["POSTGRESQL_DATABASE"].";
$user        = ".$_ENV["POSTGRESQL_USER"].";
$password    = ".$_ENV["POSTGRESQL_PASSWORD"].";

print "Host: " .$_ENV["INFODB_SERVICE_HOST"]. "\n";

if (!$connection = pg_connect ("host=$host dbname=$dbname user=$user password=$password")) {
    $error = error_get_last();
    echo "Connection failed. Error was: ". $error['message']. "\n";
} else {
    echo "Connection succesful.\n";
}
?>
