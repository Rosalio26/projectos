
<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interless || 100HW || Login</title>
</head>
<body>
    <div class="cnt-form-reg-hw">
        <form id="cnt-itm-form" method="post" action="../confLogin.php">
            <div id="personalId">
                <div class="cnt-inp-lab">
                    <div class="itm-inp-lab">
                        <label for="usernameId">Nome de Usuario</label>
                        <input type="text" id="usernameId" name="username">
                    </div>
                    <div class="itm-inp-lab">
                        <label for="numberInc">Numero de Acesso</label>
                        <input type="number" id="numberInc" name="numberAccess">
                    </div>
                    <input type="submit" value="Enviar" id="submitForm">
                </div>
            </div>
        </form>
        <a href="../../index.php">Registro</a>
    </div>
</body>
</html>