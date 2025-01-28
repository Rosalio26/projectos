<?php
    session_start();

    if (!isset($_SESSION['username_hw'])) {
        header("Location: includes/login.php");
        exit();
    }

    include('../instance/dbinterless.php');

    $user_id = $_SESSION['user_id'];

    //Obter todos os usuarios registrados
    $sql = "SELECT * FROM register_gch WHERE user_hw_id != '$user_id'";
    $result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New </title>
    <link rel="stylesheet" href="static/style/100hw.css">
</head>
<body id="body_new" class="body-gr body_new">    
    <div class="ac-sp">
        <div>
            <?php
                switch(@$_REQUEST["confPages"]) {
                    case 'newOfficcePage':
                        include("conf_home/new_conf.php");
                    break;
                    
                    case 'new_friend':
                        include("user/new_friend.php");
                    break;

                    case 'new_post':
                        include("user/new_post.php");
                    break;
            
                    default:
                        echo "";
                }
            
            ?>

            <?php
                switch(@$_REQUEST["attrPages"]) {
                    case 'messages':
                        include("store_fun/message.php");
                    break;
                    
                    case 'calls':
                        include("store_fun/calls.php");
                    break;

                    case 'business':
                        include("store_fun/business.php");
                    break;
            
                    default: echo "";
                }
            
            ?>
        </div>
    </div>
    <div class="rest-ft-fall">
        <!-- <div class="cnt-esc-rgh"><?php include("conf_home/home-rgh-set.php");?></div> -->
    </div>
    <script src="static/scripts/hw.js"></script>
</body>
</html>