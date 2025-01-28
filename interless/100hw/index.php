
<?php
    session_start();
    if (!isset($_SESSION['username_hw'])) {
        header("Location: includes/login.php");
        exit();
    }

    include('../instance/dbinterless.php');

    $user_id = $_SESSION['user_id'];

    //Obter os detalhes do usuario
    $sql = "SELECT * FROM register_gch WHERE user_hw_id='$user_id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
    } else {
        die("Usuario nao encotrado");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> 100 || Height-Weight || HomePage</title>
    <link rel="stylesheet" href="static/style/100hw.css">
</head>
<body class="body-home-hw-user body-gr">
    <div class="esc-inc-cnt">
        <div class="cnt-fles-itm">
            <div class="cnt-esc-lef"><?php include("conf_home/home-lef.php");?></div>
            <div class="cnt-esc-cet"><?php include("conf_home/home-cet.php");?></div>
        </div>
        <div class="rest-ft-fall">
            <div class="cnt-esc-rgh"><?php include("conf_home/home-rgh.php");?></div>
        </div>
    </div>
    <script src="./static/scripts/hw.js"></script>
</body>
</html>

<?php
    $conn->close();
?>