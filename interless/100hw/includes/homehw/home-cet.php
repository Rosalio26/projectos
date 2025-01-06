
<button type="button" id="btn-tgg" class="toggle-btn btn-lef-tgg">-></button>
<div>
    <?php
        switch(@$_REQUEST["pagesCenter"]){
            case "mensagem":
                include("includes/files_speak/message.php");
            break;
            case "chamadas":
                include("includes/files_speak/calls.php");
            break;
            case "business":
                include("includes/files_speak/business.php");
            break;
            default:
                include("includes/rest/img-center-background.html");
        }
    ?>
</div>