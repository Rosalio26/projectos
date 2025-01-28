
<button type="button" id="btn-tgg" class="toggle-btn btn-lef-tgg">-></button>
<div>
    <?php
        switch(@$_REQUEST["pagesCenter"]){
            case "mensagem":
                include("store_fun/message.php");
            break;
            case "chamadas":
                include("store_fun/calls.php");
            break;
            case "business":
                include("store_fun/business.php");
            break;
            case "platform":
                include("store_fun/platform.php");
            break;
            case "settings":
                include("store_fun/settings.html");
            break;
            default:
                include("conf_home/posts_home_page.php");
        }
    ?>
</div>