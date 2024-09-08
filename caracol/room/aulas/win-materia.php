<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materias Preparados || Inicio de Aula</title>
    <link rel="stylesheet" href="../conf/style/sala-materias.css">
    <link rel="stylesheet" href="../../style/mainHd.css">
</head>
<body>
    <header>
        <?php include("../inc-sala-materias/header.php");?>
    </header>
</body>
</html>





<?php 
include("left-aside.php");

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