<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sala Caracolearn</title>
    <link rel="stylesheet" href="./conf/style/sala-materias.css">
    <!-- <link rel="stylesheet" href="room/conf/style/sala-materias.css">
    <link rel="stylesheet" href="style/mainHd.css"> -->
    <link rel="stylesheet" href="../style/mainHd.css">
    <script defer src="./conf/script/sala.js"></script>
</head>
<body>
    <header class="header-main-sala header-sala">
        <?php include('./inc-sala-materias/header.php');?>
    </header>
    <main id="sala-win" class="main-sala">
        <div id="left-main-sala" class="left-main-sala">
            <button id="show-hide" onclick="clickHdshow()" class="hdd-btn hidden-cnt-btn"></button>
            <button id="hide-show" onclick="clickHdhidde()" class="hdd-btn hidden-cnt-btn"></button>
            <div class="cnt-left-main-sala">
                <?php include('inc-sala-materias/left-side.html');?>
            </div>
        </div>
        <div id="rigth-main-sala" class="rigth-main-sala">
            <?php include('./inc-sala-materias/right-side.html');?>
        </div>
    </main>
</body>
</html>