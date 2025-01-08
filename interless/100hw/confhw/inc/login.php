
<?php
    session_start();
    include("../dbconn.php");
    
    $error = '';

    //Verificar se os dados foram enviados
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //Validar os dados de formulario
        $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
        $numberaccess = filter_input(INPUT_POST, 'numberAccess', FILTER_SANITIZE_STRING);

        //Busacando o usuario
        $stmt = $conn->prepare("SELECT id, numberAccess FROM getch WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->store_result();

        //Verificar se o usuario existe
        if ($stmt->num_rows > 0) {
            $stmt->bind_result($st_username, $stored_numberaccess);
            $stmt->fetch();

            //verificando o numero
            if($numberaccess == $stored_numberaccess) {
                $_SESSION['username'] = $username;
                header("Location: ../../homeHw.php");
                exit();
            } else {
                $error = "Error numero";
            }
        } else {
            $error = "Usuario nao encotrado";
        }
        $stmt->close();
    }
    $conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interless || 100HW || Login</title>
    <link rel="stylesheet" href="../../style/index.css">
    <link rel="stylesheet" href="../../style/100hw.css">
    <link rel="stylesheet" href="../../style/forms.css">
</head>

<body class="body-forms">
    <div class="cnt-form-reg-hw">
        <div class="dial-message">
            <p class="error-msg"><?php if ($error) { echo $error; } ?></p>
        </div>
        <form id="cnt-itm-form" method="post" action="login.php">
            <div id="personalId">
                <div class="cnt-inp-lab">
                    <div class="itm-inp-lab">
                        <label class="lab-form" for="usernameId">Nome de Usuario</label>
                        <input class="input-forms" type="text" id="usernameId" name="username">
                    </div>
                    <div class="itm-inp-lab">
                        <label class="lab-form" for="numberInc">Numero de Acesso</label>
                        <input class="input-forms" type="number" id="numberInc" name="numberAccess">
                    </div>
                    <input class="btn btn-step" type="submit" value="Enviar" id="submitForm">
                </div>
            </div>
            <div class="arm-reg-log"><a href="../../index.php">Registro</a></div>
        </form>
    </div>
</body>
</html>