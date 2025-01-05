<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    $username = $_POST['username']; $lastname = $_POST['lastname']; 
    // Conectar ao banco de dados 
    $conn = new mysqli("localhost", "seu_usuario", "sua_senha", "seu_banco_de_dados"); 
    // Verificar conexão
     if ($conn->connect_error) { die("Conexão falhou: " . $conn->connect_error); } 
     // Inserir dados no banco de dados 
     $sql = "INSERT INTO usuarios (username, lastname) VALUES ('$username', '$lastname')"; 
     
     if ($conn->query($sql) === TRUE) { 
        echo "Dados inseridos com sucesso!"; 
    } else { 
        echo "Erro: " . $sql . "<br>" . $conn->error; 
    } 
    $conn->close(); 
}