<?php
print "Hello, World! Again php version is " . PHP_VERSION . "\n";
/*
$host        = INFODB_SERVICE_HOST;
$port        = INFODB_SERVICE_PORT_POSTGRESQL;
$dbname      = POSTGRESQL_DATABASE;
$user        = POSTGRESQL_USER;
$password    = POSTGRESQL_PASSWORD;
*/

$host        = "172.21.30.166";
$port        = "";
$dbname      = "acmedb";
$user        = "user1";
$password    = "mypa55";


if (!$connection = pg_connect ("host=$host dbname=$dbname user=$user password=$password")) {
    $error = error_get_last();
    echo "Connection failed. Error was: ". $error['message']. "\n";
} else {
    echo "Connection succesful.\n";
}
?>
