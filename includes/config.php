<?php
ob_start(); // Turns on output buffering
session_start();

date_default_timezone_set("Europe/Paris");

try {
    $con = new PDO("mysql:dbname=nt-php;host=localhost", "root", "root");
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
}
catch (PDOException $e) {
    exit("Connection Failed: " . $e->getMessage());
}