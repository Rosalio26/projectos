<?php
	session_start();

	if (!isset($_SESSION['username_hw'])) {
		header("Location: ../../includes/login.php");
		exit();
	}

	include ("../../../instance/dbinterless.php");

	$user_id = $_SESSION['user_id'];

	//Receber pedidos de amizades recebidas
	$sql = "SELECT * FROM friend_requests WHERE receiver_id='$user_id' AND status='pending'";
	$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Pedidos de Amizade</title>
</head>
<body>
    <h1>Bem-vindo, <?php echo $_SESSION['username_hw']; ?>!</h1>
    <h2>Pedidos de Amizade</h2>
    <h3>Pedidos Recebidos:</h3>
    <?php
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<p>Pedido de amizade de usuário ID: " . $row['sender_id'] . " <a href='accept_friend_request.php?request_id=" . $row['request_id'] . "&action=accept'>Aceitar</a> | <a href='accept_friend_request.php?request_id=" . $row['request_id'] . "&action=reject'>Rejeitar</a></p>";
        }
    } else {
        echo "Nenhum pedido de amizade recebido.";
    }
    ?>
    <a href="logout.php">Logout</a>
</body>
</html>

<?php
$conn->close();
?>