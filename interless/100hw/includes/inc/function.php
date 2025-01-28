<?php 
	session_start();

	switch (@$_REQUEST['form_page']) {
		case 'login':
		include('../../../instance/dbinterless.php');
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				$username = $_POST['username_hw'];
				$password = $_POST['password_hw'];

				//Verificar se o usuario existe
				$sql = "SELECT * FROM register_gch WHERE username_hw='$username'";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
					$user = $result->fetch_assoc();
					if (password_verify($password, $user['password_hw'])) {
						$_SESSION['username_hw'] = $user['username_hw'];
						$_SESSION['user_id'] = $user['user_hw_id'];
						header("Location: ../../index.php");
					} else {
						echo "Senha Incorreto";
					}
				} else {
					echo "USer not found";
				}
			}

			$conn->close();
		break;

		case 'register':
		session_start();
		include('../../../instance/dbinterless.php');
			if($_SERVER["REQUEST_METHOD"] == "POST") {
		        $personalName = $_POST['personalname_hw'];
		        $username = $_POST['username_hw'];
		        $email = $_POST['email_hw'];
		        $password = password_hash( $_POST['password_hw'], PASSWORD_BCRYPT);
		        $numberAccess = $_POST['numberaccess_hw'];

		        //Verificar se o usuario existe
		        $sql = "SELECT * FROM register_gch WHERE email_hw='$email'  ";
		        $result = $conn->query($sql);

		        if ($result->num_rows > 0) {
		        	echo "Este Usuario ja existe<br>Registe-se com outros dados.";
		        } else {
		        	//Inserindo os dados no banco de dados
		        	$sql = "INSERT INTO register_gch (personalname_hw, username_hw, email_hw, password_hw, numberaccess_hw) VALUES ('$personalName', '$username', '$email', '$password', '$numberAccess')";

		        	if ($conn->query($sql) === TRUE) {
		        		$_SESSION['username_hw'] = $username;
		        		$_SESSION['user_id'] = $conn->insert_id;
		        		header("Location: ../../index.php");
		        	} else {
		        		echo "Erro oa registrar";
		        	}
		        }
		    }
		    $conn->close();

		break;
		
		default:
			echo "";
			break;
	}

?>