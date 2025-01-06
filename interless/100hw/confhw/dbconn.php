<?php
    $host = 'localhost';
    $db = 'interless';
    $user = 'root';
    $pass = '';

    $conn = new mysqli($host, $user, $pass, $db);

    if ($conn->connect_error) {
        die("Erro de conexao: " . $conn->connect_error);
    }