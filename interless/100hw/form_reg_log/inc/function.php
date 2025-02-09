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
						$_SESSION['numberaccess_hw'] = $user['numberaccess_hw'];
						$_SESSION['email_hw'] = $user['email_hw'];
						$_SESSION['user_id'] = $user['user_hw_id'];
						header("Location: ../../index.php");
					} else {
						$_SESSION['error'] = "A senha que introduziste é invalido!";
			        	header("Location: ../login.php");
			        	exit();
					}
				} else {
					$_SESSION['error'] = "Usuario não encotrado.";
		        	header("Location: ../login.php");
		        	exit();
				}
			}

			$conn->close();
		break;

		case 'register':
		// session_start();
		include('../../../instance/dbinterless.php');
			if($_SERVER["REQUEST_METHOD"] == "POST") {
		        $personalName = $_POST['personalname_hw'];
		        $username = $_POST['username_hw'];
		        $email = $_POST['email_hw'];
		        $password = password_hash( $_POST['password_hw'], PASSWORD_BCRYPT);
		        // $numberAccess 
		        $prefixPhone = '0' . $_POST['numberaccess_hw'];
		        $pin = $_POST['pinaccess_hw'];


		        //Validação do email
		        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		        	$_SESSION['error'] = "Email inválido";
		        	header("Location: register.php");
		        	exit();
		        }

		        //Validação da senha
		        if (strlen($password) < 6 || !preg_match('/[0-9]/', $password) || !preg_match('/[\W]/', $password)) {
		        	$_SESSION['error'] = "A senha deve ter no mínimo 6 caracteres, incluindo números e símbolos";
		        	header("Location: register.php");
		        	exit();
		        }

		        //Validação do número de telefone
		        if (!ctype_digit($prefixPhone) || strlen($prefixPhone) !=10) {
		        	$_SESSION['error'] = "O número de acesso deve ter somente 10 digitos";
		        	header("Location: register.php");
		        	exit();
		        }

		        //Validação do usuário
		        if (strlen($username) > 9) {
		        	$_SESSION['error'] = "O nome de usuário deve ter no máximo 9 digitos";
		        	header("Location: register.php");
		        	exit();
		        }

		        //Verificar se o usuario existe
		        $sql_check = "SELECT * FROM register_gch WHERE username_hw='$username' OR email_hw='$email'  ";
		        $result_check = $conn->query($sql_check);


		        if ($result_check->num_rows > 0) {
		        	$row = $result_check->fetch_assoc();
		        	if ($row['username_hw'] === $username && $row['email_hw'] === $email) {
			            $_SESSION['error'] = "O nome de usuário e o email já estão registrados!";
			        } elseif ($row['username_hw'] === $username) {
			            $_SESSION['error'] = "O nome de usuário já está registrado!";
			        } elseif ($row['email_hw'] === $email) {
			            $_SESSION['error'] = "Este email já está registrado!";
			        }
			        header("Location: ../../register.php");
			        exit();
		        }


				//Inserindo os dados no banco de dados
		 		$sql = "INSERT INTO register_gch (personalname_hw, username_hw, email_hw, password_hw, numberaccess_hw, pinaccess_hw) VALUES ('$personalName', '$username', '$email', '$password', '$prefixPhone', $pin)";

	        	if ($conn->query($sql) === TRUE) {
	        		$_SESSION['username_hw'] = $username;
					$_SESSION['numberaccess_hw'] = $user['numberaccess_hw'];
					$_SESSION['email_hw'] = $user['email_hw'];
	        		$_SESSION['user_id'] = $conn->insert_id;
	        		header("Location: ../../index.php");
	        	} else {
	        		$_SESSION['error'] = "Desculpe houve um erro ao tentar registar!" . $sql . "<br>" . $conn->error;
			        header("Location: ../../register.php");
			        exit();
	        	}
		    }
		    $conn->close();

		break;
		
		default:
			echo "";
			break;
	}

?>