

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="../../style/homeStyle.css">
</head>

<?php
  include('config_reg.php');

  //Definindo variaveis e envindo valores vazios
  $name = $email ="";
  $nameErr = $emailErr = "";

 if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }

  $surname = $_POST["surname"];
  $usuario = $_POST["usuario"];
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

  $password = $_POST["password"];

  $insertD = "INSERT INTO usuarios (name, surname, usuario, email, password) VALUES ('{$name}', '{$surname}', '{$usuario}', '{$email}', '{$password}')";

  $res =  $conn->query($insertD);

  if($res==true) {
    print "<p>Redericionando</p>";
    print "<script>location.href='../../ownless/home-less.php';</script>";
  } else{
    print "<p>Dados incopletos  </p>";
  }
}
 
  function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<div class="cnt-lg-cd">
    <div class="row-lg-cd">
        <div>    
            <div class="login-text">
                <h1>Cadastro</h1>
            </div>
            <form action="cadastro.php" method="post">
                <hr class="hl-frt-lg-cd">
                <div class="sep-itm-cd">
                    <div class="info-person">
                        <div class="cnt-lbf">
                            <label class="lb-txt" for="idname">Nome</label> <br>
                            <input class="inp-lg-cd" type="text" name="name" id="idname" value="<?php echo $name; ?>">
                            <span class="error">* <?php echo $nameErr;?></span>
                        </div>
                        <div class="cnt-lbf">
                            <label class="lb-txt" for="idsurname">Sobrenome</label> <br>
                            <input class="inp-lg-cd" type="text" name="surname" id="idsurname">
                        </div>
                        <div class="cnt-lbf">
                            <label class="lb-txt" for="iduser">ID-Usuario</label> <br>
                            <input class="inp-lg-cd" type="text" name="usuario" id="iduser">
                        </div>
                    </div>
                    <div class="cmp-email-pass">
                        <div class="cnt-lbf">
                            <label class="lb-txt" for="idemail">Email</label> <br>
                            <input class="inp-lg-cd" type="email" name="email" id="idemail" value="<?php echo $email; ?>">
                            <span class="error">* <?php echo $emailErr;?></span>
                        </div>
                        <div class="cnt-lbf">
                            <label class="lb-txt" for="idpass">Palavra-Passe</label> <br>
                            <input class="inp-lg-cd" type="password" name="password" id="idpass">
                        </div>
                    </div>
                </div>
                <hr class="hl-frt-lg-cd">
                <div class="btn-sub">
                    <input type="submit" value="Enviar">
                </div>
            </form>
        </div>
    </div>
</div>

