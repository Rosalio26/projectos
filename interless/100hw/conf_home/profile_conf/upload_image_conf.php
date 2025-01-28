
<?php
	session_start();
	if (!isset($_SESSION['username_hw'])) {
		header("Location: ../../login.php");
		exit();
	}

	include('../../../instance/dbinterless.php');

	$user_id = $_SESSION['user_id'];

	if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES['profile_image'])) {
		$target_dir = __DIR__ . "/uploads/";
		$target_file = $target_dir . basename($_FILES['profile_image']['name']);
		$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

		//Verificar se o arquivo é uma image
		$check_if_image = getimagesize($_FILES["profile_image"]["tmp_name"]);
		if ($check_if_image === false) {
			die("Desculpe, o arquivo nao e uma imagem");
		}

		//Permitir certos formatos de arquivo
		if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "JPEG" && $imageFileType != "GIF") {
			die("Deculpe, mas somente sao suportados arquivos: PNG, JPEG, JPG, GIF");
		}

		//Fazendo upload
		if (move_uploaded_file($_FILES["profile_image"]["tmp_name"], $target_file)) {
			
			$sql = "UPDATE register_gch SET profile_image='" . basename($_FILES["profile_image"]["name"]) . "' WHERE user_hw_id='$user_id'";	
			if ($conn->query($sql) === TRUE) {
				echo "Success";
			} else {
				echo "Erro" .$conn->error;
			}
		} else {
			die("Erro");
		}
	}

	$conn->close();
	header("Location: ../../index.php");
	exit();
	
?>