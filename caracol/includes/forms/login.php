<?php

    session_start();
    include('config_reg.php');

    $usuario = $_POST["usuario"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM usuarios WHERE usuario = '{$usuario}' AND password = '{$password}'";

    $res = $conn->query($sql) or die($conn->error);


    $qtd = $res->num_rows;

    if($qtd > 0) {
        $_SESSION["usuario"] = $usuario;
        $_SESSION["password"] = $password;
    } else {
        print "<p>Usuario incorrecto</p>";
    }