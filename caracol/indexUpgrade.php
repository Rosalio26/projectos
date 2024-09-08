<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>CaracoLearn || Welcome</title>
    <link rel="stylesheet" href="./style/homeStyle.css">
    <link rel="stylesheet" href="./style/mainHd.css">
    <link rel="stylesheet" href="./style/outputs/header.css">
    <link rel="stylesheet" href="./room/conf/style/sala-materias.css">
    <script defer src="script/mainHd.js"></script>
    
</head>
<body>
    <header>
        <div class="header hd-1">
            <?php include('./libdextml/filemain/header.php');?>
        </div>
        <!-- <div id="hdSticky">
            <div>
                <?php include('./libdextml/filemain/headerSticky.php');?>
            </div>
        </div> -->
    </header>

    <span class="metter">Ajuda!</span>

    <main class="msn main dmn-mn-1">
        <div class="frt cnt-dmn">
            <?php include('./libdextml/filemain/boxeonepart.html');?>
        </div>
        
        <div class="hd-sec boxing">
            <?php include('./libdextml/filemain/boxesecpart.html');?>        
        </div>

        <div class="hd-thd">
            <?php include('./libdextml/filemain/boxethdpart.html');?>
        </div>
        <div class="asset frt-par">
            <?php include('./libdextml/filemain/boxefourpart.html');?>
        </div>
        <div class="conti-nl"></div>
    </main>
    <footer>
        <?php include('./libdextml/filemain/footerUpgrade.html');?>
    </footer>
</body>
</html>