<?php
  include('config_reg.php');

 if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $surname = $_POST["surname"];
  $usuario = $_POST["usuario"];
  $email = $_POST["email"];
  $password = $_POST["password"];

  $insertD = "INSERT INTO usuarios (name, surname, usuario, email, password) VALUES ('{$name}', '{$surname}', '{$usuario}', '{$email}', '{$password}')";

  $res =  $conn->query($insertD);

  if($res==true) {
    print "<p>Redericionando</p>";
    print "<script>location.href='../../ownless/home-less.php';</script>";
  } else{
    print "<p>Dados incopletos  </p>";
  }
}

