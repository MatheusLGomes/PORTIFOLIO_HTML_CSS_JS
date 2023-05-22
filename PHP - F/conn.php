<?php

define('HOSTNAME', 'localhost');
define('DBNAME', 'datamatheus');
define('USER', 'root');
define('PASS', '');

try {
    $conn = new PDO("mysql:host=" . HOSTNAME . ";dbname=" . DBNAME . ";", USER, PASS);
} catch (PDOException $e) {
    echo "Ocorreu um error: " . $e;
}

?>
