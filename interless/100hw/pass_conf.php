<?php 
    include("conf/post_friend_processes.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New </title>
    <link rel="stylesheet" href="static/style/100hw.css">
    <!-- <link rel="stylesheet" href="static/style/profile.css"> -->
</head>
<body id="body_new" class="body-gr body_new">    
    <div class="ac-sp">
        <div>
            <?php
                switch(@$_REQUEST["confPages"]) {
                    case 'newOfficcePage':
                        include("conf_home/new_conf.php");
                        $conn->close();
                    break;
                    
                    case 'new_friend':
                        include("user/friend/new_friend.php");
                        $conn->close();
                    break;

                    case 'new_post':
                        include("user/posts/new_post.php");
                    break;

                    case 'save_post':
                        include("user/posts/save_post.php");
                    break;
                    
                    case 'save_post_content':
                        include("user/posts/save_post_content.php");
                    break;
                    
                    case 'save_post_photo':
                        include("user/posts/save_post_photo.php");
                    break;

                    case 'save_post_video':
                        include("user/posts/save_post_video.php");
                    break;

                    case 'save_post_music':
                        include("user/posts/save_post_music.php");
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
    <script src="static/scripts/logout_time.js"></script>
</body>
</html>