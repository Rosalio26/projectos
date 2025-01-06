
<?php 
    session_start();
    if (!isset($_SESSION['user_id'])) {
        header("Location: confhw/inc/login.php");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> 100 || Height-Weight || HomePage</title>
    <link rel="stylesheet" href="style/100hw.css">
</head>
<body class="body-home-hw-user body-gr">
    <div class="esc-inc-cnt">
        <div class="cnt-fles-itm">
            <div class="cnt-esc-lef"><?php include("includes/homehw/home-lef.php");?></div>
            <div class="cnt-esc-cet"><?php include("includes/homehw/home-cet.php");?></div>
        </div>
        <div class="rest-ft-fall">
            <div class="cnt-esc-rgh"><?php include("includes/homehw/home-rgh.php");?></div>
        </div>
    </div>
    <script src="./scripts/hw.js"></script>
</body>
</html>