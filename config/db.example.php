<?php

$host     = "sql204.ezyro.com"; // o localhost para pruebas locales
$db_name  = "NOMBRE_DE_TU_BASE";
$username = "USUARIO_BD";
$password = "CONTRASEÑA_BD";
$charset  = "utf8mb4";

$dsn = "mysql:host=$host;dbname=$db_name;charset=$charset";

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

