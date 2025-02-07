<?php
    session_start();
    if (!isset($_SESSION['username_hw'])) {
        header("Location: ../includes/login.php");
        exit();
    }

    if (!isset($_SESSION['user_id'])) {
    	die("ERRO: user_id nao esta definido na sessao");
    }

	include ('../../instance/dbinterless.php');

	$user_id = $_SESSION['user_id'];

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$title = $_POST['title_post'];
		$content = $_POST['content_post'];

		//Inserir o Post ao banco de dados
		$sql = "INSERT INTO posts (user_id, title_post, content_post) VALUES ('$user_id', '$title', '$content')";
		if ($conn->query($sql) === TRUE) {
			echo "Post adicionado com sucesso";
		} else {
			echo "Erro ao adicionar o post";
		}
	}

	$conn->close();
	header("Location: ./profile.php?confProfilePages=new_post");
	exit();
?>