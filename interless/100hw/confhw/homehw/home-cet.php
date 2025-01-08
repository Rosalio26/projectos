
<button type="button" id="btn-tgg" class="toggle-btn btn-lef-tgg">-></button>
<div>
    <?php
        switch(@$_REQUEST["pagesCenter"]){
            case "mensagem":
                include("confhw/files_speak/message.php");
            break;
            case "chamadas":
                include("confhw/files_speak/calls.php");
            break;
            case "business":
                include("confhw/files_speak/business.php");
            break;
            default:
                include("confhw/rest/img-center-background.html");
        }
    ?>
</div>