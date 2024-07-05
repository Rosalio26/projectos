<?php
  include('config_reg.php');

 if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $surname = $_POST["surname"];
  $email = $_POST["email"];
  $password = $_POST["password"];

  $insertdados = "INSERT INTO usuarios(name, surname, email, password) VALUES ('$name, $surname, $email, $password')";

  $connection->query($insertdados);
}

$url = "../../ownless/home-less.php";

$connection->close();
?>