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
    <script>
        function toggleInputs() {
            var mediaType = document.getElementById("media_type").value;
            var contentDiv = document.getElementById("content_div");
            var fileInputDiv = document.getElementById("file_input_div");

            if (mediaType !== 'text') {
                contentDiv.style.display = 'none';
                fileInputDiv.style.display = 'block';
            } else {
                contentDiv.style.display = 'block';
                fileInputDiv.style.display = 'none';
            }
        }
    </script>
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
                        include("user/new_friend.php");
                        $conn->close();
                    break;

                    case 'new_post':
                        include("user/posts/new_post.php");
                    break;

                    case 'save_post':
                        include("user/posts/save_post.php");
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