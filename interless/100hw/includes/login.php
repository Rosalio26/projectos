
<?php
    session_start();
    $error = isset($_SESSION['error']) ? $_SESSION['error'] : null;
    unset($_SESSION['error']);
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
            <p id="error-msg" class="error-msg" style="display: none" data-error="<?php echo $error; ?>"></p>
        </div>
        <form id="cnt-itm-form" method="post" action="inc/function.php?form_page=login">
            <div id="personalId">
                <div class="cnt-inp-lab">
                    <div class="itm-inp-lab">
                        <span class="spn-act-res">
                            <img src="../static/style/icon/user-1.png">
                            <input 
                                class="input-forms username" 
                                type="text" 
                                id="username" 
                                name="username_hw"
                                placeholder="Usuario" 
                                required 
                                minlength="4" 
                                maxlength="9" 
                                oninput="copyValue()">
                        </span>
                    </div>
                    <div class="itm-inp-lab">
                        <span class="spn-act-res">
                            <img src="../static/style/icon/password.png">
                            <input 
                                class="input-forms" 
                                type="password" 
                                id="password" 
                                name="password_hw"
                                placeholder="Palavra-Passe"
                                required>
                        </span>
                    </div>
                    <input class="btn btn-step" type="submit" value="Enviar" id="submitForm">
                </div>
            </div>
            <div class="arm-reg-log">Sou novo e ainda nao tenho uma conta. Gostaria de fazer um <a class="login-inc-form" href="../register.php">Registro</a> para poder entrar na plataforma.</div>
        </form>
        <script src="../static/scripts/form.js"></script>
    </div>
</body>
</html>