
<?php
    include("inc/function.php");
    $error = '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interless || 100HW || Login</title>
    <link rel="stylesheet" href="../static/style/index.css">
    <link rel="stylesheet" href="../static/style/100hw.css">
    <link rel="stylesheet" href="../static/style/forms.css">
</head>

<body class="body-forms">
    <div class="cnt-form-reg-hw">
        <div class="dial-message">
            <p class="error-msg"><?php if ($error) { echo $error; } ?></p>
        </div>
        <form id="cnt-itm-form" method="post" action="inc/function.php?form_page=login">
            <div id="personalId">
                <div class="cnt-inp-lab">
                    <div class="itm-inp-lab">
                        <label class="lab-form" for="usernameId">Nome de Usuario</label>
                        <input class="input-forms" type="text" id="usernameId" name="username_hw">
                    </div>
                    <div class="itm-inp-lab">
                        <label class="lab-form" for="numberInc">Palavra Passe</label>
                        <input class="input-forms" type="number" id="numberInc" name="password_hw">
                    </div>
                    <input class="btn btn-step" type="submit" value="Enviar" id="submitForm">
                </div>
            </div>
            <div class="arm-reg-log">Sou novo e ainda nao tenho uma conta. Gostaria de fazer um <a class="login-inc-form" href="../register.php">Registro</a> para poder entrar na plataforma.</div>
        </form>
    </div>
</body>
</html>