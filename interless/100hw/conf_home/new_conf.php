<style>
    .logic-new-forum
    {
        overflow: hidden;
    }

    .cnt-uss
    {
        font-family: poppis-light;
        text-transform: uppercase;
    }

    .ing-uss
    {
        text-transform: lowercase;
        font-family: poppis-light;
        font-weight: 100;
    }
</style>
<div class="cnt-cant logic-new-forum">
    <?php 
        switch(@$_REQUEST['newConfStates']){
            case 'detailsFriend':
                include("profile_friend_details.php");
                break;
            default:
                include("conf_home/new_semi_conf/body_new_confing.php");
                break;
        }
    ?>
   
</div>