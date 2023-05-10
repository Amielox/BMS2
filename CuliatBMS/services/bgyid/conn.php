<?php

define("DB_HOST", "localhost");
define("DB_NAME", "bms_database");
define("DB_CHARSET", "utf8");
define("DB_USER", "root");
define("DB_PASSWORD", "");

try {
    $pdo = new PDO(
        "mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=".DB_CHARSET,
        DB_USER,DB_PASSWORD,[
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
} catch (Exception $ex) {
    exit ($ex->getMessage());
}