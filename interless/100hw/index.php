
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

        <!-- <?php if ($error) {echo "<p style = 'color: red;'>$error</p>"; }?>
        <?php if ($success) {echo "<p style = 'color: green;'>$success</p>"; }?> -->

        <form id="cnt-itm-form" method="post" action="confhw/confReg.php" onsubmit="return validateForm()">
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
                <button class="btn btn-step" type="button" onclick="nextStep()">Next</button>
            </div>

            <div id="personalId" style="display: none;">
                <div class="cnt-inp-lab">
                    <div class="itm-inp-lab">
                        <label class="lab-form" for="usernameId">Nome de Usuario</label> <br>
                        <input type="text" id="usernameId" name="username" readonly>
                    </div>
                    <div class="itm-inp-lab">
                        <label for="numberInc">Numero de Acesso</label> <br>
                        <input type="number" id="numberInc" name="numberAccess">
                    </div>
                    <!-- <button type="button" onclick="submitForm()">Enviar</button> -->
                    <button type="button" onclick="backForm()">Voltar</button>
                    <input type="submit" value="Enviar" id="submitForm">
                </div>
            </div>
        </form>
        <div class="arm-reg-log">Já tenho uma conta. </br> Só preciso fazer login para acessar. <a class="login-inc-form" href="confhw/inc/login.php">Login</a></div>
    </div>
    <script src="scripts/form.js"></script>
</body>
</html>