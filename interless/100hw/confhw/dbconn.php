<?php
    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASS', '');
    define('BASE', 'nome Banco de dados');

    $conn = new mysqli($HOST, $USER, $PASS, $BASE);

    if ($conn->connect_error) {
        die("Falha nba conexao: " . $conn->connect_error);
    }