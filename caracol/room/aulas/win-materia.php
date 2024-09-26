<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materias Preparados || Inicio de Aula</title>
    <link rel="stylesheet" href="../conf/style/sala-materias.css">
    <link rel="stylesheet" href="../../style/mainHd.css">
    <link rel="stylesheet" href="./conf_lesson/style/win-materias.css">
    <script defer src="conf_lesson/script/appch.js"></script>
    <script defer src="conf_lesson/script/jquery.js"></script>
</head>
<body class="win-materias">
    <header>
        <?php include("../inc-sala-materias/header_materias.php");?>
    </header>
    <main class="materias-win">
        <div class="left-aside-materias">
            <div class="left-itm-materias">
                <div>
                    <?php
                        switch (@$_REQUEST["pages-material"]) {
                            case "programacao":
                                include("programacao/programacao-aside.html");
                            break;
                            case "eletronica":
                                include("eletronica/eletronica-aside.html");
                            break;
                            case "devweb":
                                include("dev_web/devweb-aside.html");
                            break;
                            case "matematica":
                                include("matematica/matematica-aside.html");
                            break;
                            default:
                                print("Erro no Carregamento dos arquivos! Por favoe tente reiniciar o seu navegador ou contacte o Administrador.");
                            break;
                        }
                    ?>
                </div>
            </div>
        </div>
        <div class="right-aside-materias">
            <?php
                switch (@$_REQUEST["pages-material"]) {
                    case "programacao":
                        include("programacao/programacao.php");
                    break;  
                    case "eletronica":
                        include("eletronica/eletronica.php");
                    break;
                    case "devweb":
                        include("dev_web/devweb.php");
                    break;
                    case "matematica":
                        include("matematica/matematica.php");
                    break;
                    default:        
                        print("Janela Materias");
                    break;
                }
            ?>
        </div>
    </main>
</body>
</html>





