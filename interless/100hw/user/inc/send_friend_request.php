<?php
	session_start();
	if (!isset($_SESSION['username_hw'])) {
		header("Location: ../includes/login.php");
		exit();
	}

	include('../../../instance/dbinterless.php');

	$user_id = $_SESSION['user_id'];
	$receiver_id = $_GET['receiver_id'];

	//Verificar se o pedido de amizade foi enviado
	$sql = "SELECT * FROM friend_requests WHERE sender_id='$user_id' AND receiver_id='$receiver_id'";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		echo "Pedido de amizade ja enviado";
	} else {
		//Inserir o pedido de amizade no banco de dados
		$sql = "INSERT INTO friend_requests (sender_id, receiver_id) VALUES ('$user_id', '$receiver_id')";
		if ($conn->query($sql) === TRUE) {
			echo "Pedido de amizade enviado com sucesso";
		} else {
			echo "Erro ao enviar o pedido de amizade";
		}
	}

	$conn->close();
	header("Location: ../profile.php");
?>