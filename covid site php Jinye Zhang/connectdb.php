<?php
try {
    $connection = new PDO('mysql:host=localhost; port=3306; dbname=coviddb', "root", "");
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
