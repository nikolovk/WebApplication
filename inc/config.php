<?php

session_start();
//$db_hostname = "xxxxxx";
//$db_database = "xxxxxxx";
$db_username = "xxxxx";
$db_password = "xxxxxx";
try {
    $db = new PDO('mysql:host=localhost;dbname=polivane_geomat', $db_username, $db_password);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
try {
    $db_second = new PDO('mysql:host=localhost;dbname=polivane_geomat', $db_username, $db_password);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>
