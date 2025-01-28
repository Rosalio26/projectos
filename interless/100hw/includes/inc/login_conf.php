<?php
	session_start();
	include('../../instance/dbconn.php');

	function login_session($conn, $username, $numberaccess) {
		//Verificar se os dados foram enviados
	    if ($_SERVER["REQUEST_METHOD"] == "POST") {
	        //Validar os dados de formulario
	        $username = filter_input(INPUT_POST, 'username_hw', FILTER_SANITIZE_STRING);
	        $numberaccess = filter_input(INPUT_POST, 'numberaccess_hw', FILTER_SANITIZE_STRING);

	        //Busacando o usuario
	        $stmt = $conn->prepare("SELECT user_hw_id, numberaccess_hw FROM register_gch WHERE username_hw = ?");
	        $stmt->bind_param("s", $username);
	        $stmt->execute();
	        $stmt->store_result();

	        //Verificar se o usuario existe
	        if ($stmt->num_rows > 0) {
	            $stmt->bind_result($user_hw_id, $stored_numberaccess);
	            $stmt->fetch();

	            //verificando o numero
	            if($numberaccess == $stored_numberaccess) {
	            	$_SESSION['user_id_post'] = $user_hw_id;
	                $_SESSION['username_hw'] = $username;
	                header("Location: ../index.php");
	                exit();
	            } else {
	                $error = "O numero discardo nao e valido";
	            }
	        } else {
	            $error = "Usuario nao encotrado no banco de dados";
	        }
	        $stmt->close();
	    }
	    $conn->close();
	}