<?php
    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASS', '');
    define('BASE', 'interless');

    $conn = new MySQLi(HOST, USER, PASS, BASE);

    if ($conn->connect_error) {
        die("Falha na conexao ao banco de dados: " . $conn->connect_error);
    }