
<div class="left-itm-materias">
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
                print("Janela Materias");
            break;
        }
    ?>
</div>