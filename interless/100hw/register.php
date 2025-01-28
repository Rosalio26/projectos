
<?php
    // include('./instance/dbconn.php');
    include('includes/inc/function.php');

    $error = '';
    $success = '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interless || 100HW || Registro</title>
    <link rel="stylesheet" href="static/style/100hw.css">
    <link rel="stylesheet" href="static/style/forms.css">
</head>
<body class="body-forms">
    <div class="cnt-form-reg-hw">
        <div class="dial-message">
            <p class="error-msg"><?php if ($error) { echo $error; } ?></p>
            <p class="success-msg"><?php if ($success) { echo $success; } ?></p>
        </div>
        <form id="cnt-itm-form" method="post" action="includes/inc/function.php?form_page=register" onsubmit="return validateForm()">
            <div id="personalDate" class="cnt-inp-lab">
                <div class="itm-inp-lab">
                    <label class="lab-form" for="personalname_hw">Nome:</label> <br>
                    <input class="input-forms" type="text" id="personalname" name="personalname_hw" required>
                </div>
                <div class="itm-inp-lab">
                    <label class="lab-form" for="email">Email:</label> <br>
                    <input class="input-forms" type="email" id="email" name="email_hw" required>
                </div>
                <div class="itm-inp-lab">
                    <label class="lab-form" for="username">Nome de usuario</label> <br>
                    <input class="input-forms" type="text" id="username" name="username_hw" required oninput="copyValue()">
                </div>
                <div class="itm-inp-lab">
                    <label class="lab-form" for="password">Palavra-Passe</label> <br>
                    <input class="input-forms" type="password" id="password" name="password_hw">
                </div>
                <button class="btn btn-step" type="button" onclick="nextStep()">Next -></button>
            </div>

            <div id="personalId" style="display: none;">
                <div class="cnt-inp-lab">
                    <div class="itm-inp-lab">
                        <label class="lab-form" for="usernameId">Nome de Usuario</label> <br>
                        <input class="input-forms" type="text" id="usernameId" name="username_hd" readonly>
                    </div>
                    <div class="itm-inp-lab">
                        <label class="lab-form" for="numberInc">Numero de Acesso</label> <br>
                        <input class="input-forms" type="number" id="numberInc" name="numberaccess_hw">
                    </div>
                    <!-- <button type="button" onclick="submitForm()">Enviar</button> -->
                    <div style="display: flex; justify-content: space-between;">
                        <button class="btn btn-step" type="button" onclick="backForm()"><- Voltar</button>
                        <input class="btn btn-step" type="submit" value="Enviar" id="submitForm">
                    </div>
                </div>
            </div>
            <div class="arm-reg-log">Já tenho uma conta. </br> Só preciso fazer <a class="login-inc-form" href="includes/login.php">login</a> para acessar.</div>
        </form>
    </div>
    <script src="static/scripts/form.js"></script>
</body>
</html>