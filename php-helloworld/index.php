<?php
print "Hello, World! Again php version is " . PHP_VERSION . "<br>";

$host        = $_ENV["INFODB_SERVICE_HOST"];
$port        = "";
$dbname      = $_ENV["POSTGRESQL_DATABASE"];
$user        = $_ENV["POSTGRESQL_USER"];
$password    = $_ENV["POSTGRESQL_PASSWORD"];

print " Host: " .$_ENV["INFODB_SERVICE_HOST"].  " DBname:" .$_ENV["POSTGRESQL_DATABASE"]. " User:" .$_ENV["POSTGRESQL_USER"]. " Password:" . $_ENV["POSTGRESQL_PASSWORD"]. "<br>";

if (!$connection = pg_connect ("host=$host dbname=$dbname user=$user password=$password")) {
    $error = error_get_last();
    echo "Connection failed. Error was: ". $error['message']. "\n";
} else {
    echo "Connection succesful.\n";
}
?>
