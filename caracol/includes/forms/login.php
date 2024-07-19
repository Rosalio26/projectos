<?php
  

    if(empty($_POST) or (empty($_POST["usuario"]) or (empty($_POST["password"])))) {
        print "<script>location.href='cadastro.php';</script>";
    }

    include('config_reg.php');

    $usuario = $_POST["usuario"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM usuarios WHERE usuario = '{$usuario}' AND password = '{$password}'";

    $res = $conn->query($sql) or die($conn->error);

    $row = $res->fetch_object();

    $qtd = $res->num_rows;

    if($qtd > 0) {
        session_start();
        $_SESSION["usuario"] = $usuario;
        $_SESSION["password"] = $password;
        print "<script>location.href='../../ownless/home-less.php';</script>";

    echo $tela;

   
    } else {
        print "<p>Usuario incorrecto</p>";
    }