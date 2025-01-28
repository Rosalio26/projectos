<?php
session_start();
if (!isset($_SESSION['username_hw'])) {
    header("Location: login.php");
    exit();
}

include('../../instance/dbinterless.php');

$user_id = $_POST['user_id'] ?? null;

if (!$user_id) {
    die("Erro: user_id não está definido.");
}

// Eliminar o usuário
$sql = "DELETE FROM register_gch WHERE user_hw_id='$user_id'";
if ($conn->query($sql) === TRUE) {
    echo "Usuário eliminado com sucesso!";
} else {
    echo "Erro ao eliminar usuário: " . $conn->error;
}

$conn->close();
header("Location: accepted_friends.php");
exit();
?>
