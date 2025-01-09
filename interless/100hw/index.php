
<?php
    include('./confhw/dbconn.php');

    $error = '';
    $success = '';

    if ($_SERVER["REQUEST_METHOD"]=="POST") {
        $personalname = filter_input(INPUT_POST, "personalname", FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_STRING);
        // $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
        $username = $conn->real_escape_string($_POST["username"]);
        $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);
        $numberaccess = filter_input(INPUT_POST, "numberAccess", FILTER_SANITIZE_STRING);

        //Verificar se a sanitizacao e validacao foram bem-sucedidas
        if ($personalname && $email && $username && $password && $numberaccess) {
            //Verificar se o usuario, email e numero ja existem no banco de dados
            $stmt = $conn-> prepare("SELECT id FROM getch WHERE username = ? OR numberAccess = ? OR email = ?");
            $stmt->bind_param("sss", $username, $numberaccess, $email);
            $stmt->execute();
            $stmt->store_result();

            if ($stmt->num_rows > 0) {
                $error = "Nome de Usuario e email ja existem!";
            } else {
                //Has do password
                $passwordHash = password_hash($password, PASSWORD_DEFAULT);
                //Preparar eclaracao SQL para inserir dados
                $stmt = $conn->prepare("INSERT INTO getch (personalname, email, username, password, numberAccess) VALUES (?, ?, ?, ?, ?)");
                $stmt->bind_param("sssss", $personalname, $email, $username, $passwordHash, $numberaccess);
                
                if ($stmt->execute()) {
                    $_SESSION['username'];
                    header("Location: homeHw.php");
                } else {
                    $error = "Error";
                }

            }
            //Fechar Declaracao
            $stmt->close();
        } else {
            $error = "Dados Invalidos";
        }
    }

    //Fechar a conexao
    $conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interless || 100HW || Registro</title>
    <link rel="stylesheet" href="style/index.css">
    <link rel="stylesheet" href="style/100hw.css">
    <link rel="stylesheet" href="style/forms.css">
</head>
<body class="body-forms">
    <div class="cnt-form-reg-hw">
        <div class="dial-message">
            <p class="error-msg"><?php if ($error) { echo $error; } ?></p>
            <p class="success-msg"><?php if ($success) { echo $success; } ?></p>
        </div>
        <form id="cnt-itm-form" method="post" action="index.php" onsubmit="return validateForm()">
            <div id="personalDate" class="cnt-inp-lab">
                <div class="itm-inp-lab">
                    <label class="lab-form" for="personalname">Nome:</label> <br>
                    <input class="input-forms" type="text" id="personalname" name="personalname" required>
                </div>
                <div class="itm-inp-lab">
                    <label class="lab-form" for="email">Email:</label> <br>
                    <input class="input-forms" type="email" id="email" name="email" required>
                </div>
                <div class="itm-inp-lab">
                    <label class="lab-form" for="username">Nome de usuario</label> <br>
                    <input class="input-forms" type="text" id="username" name="username" required oninput="copyValue()">
                </div>
                <div class="itm-inp-lab">
                    <label class="lab-form" for="password">Palavra-Passe</label> <br>
                    <input class="input-forms" type="password" id="password" name="password">
                </div>
                <button class="btn btn-step" type="button" onclick="nextStep()">Next -></button>
            </div>

            <div id="personalId" style="display: none;">
                <div class="cnt-inp-lab">
                    <div class="itm-inp-lab">
                        <label class="lab-form" for="usernameId">Nome de Usuario</label> <br>
                        <input class="input-forms" type="text" id="usernameId" name="username" readonly>
                    </div>
                    <div class="itm-inp-lab">
                        <label class="lab-form" for="numberInc">Numero de Acesso</label> <br>
                        <input class="input-forms" type="number" id="numberInc" name="numberAccess">
                    </div>
                    <!-- <button type="button" onclick="submitForm()">Enviar</button> -->
                    <div style="display: flex; justify-content: space-between;">
                        <button class="btn btn-step" type="button" onclick="backForm()"><- Voltar</button>
                        <input class="btn btn-step" type="submit" value="Enviar" id="submitForm">
                    </div>
                </div>
            </div>
            <div class="arm-reg-log">Já tenho uma conta. </br> Só preciso fazer <a class="login-inc-form" href="confhw/inc/login.php">login</a> para acessar.</div>
        </form>
    </div>
    <script src="scripts/form.js"></script>
</body>
</html>