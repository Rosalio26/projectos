
<?php
    session_start();
    if (!isset($_SESSION['username_hw'])) {
        header("Location: ../includes/login.php");
        exit();
    }

    include('../../instance/dbinterless.php');

    $user_id = $_SESSION['user_id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="../static/style/profile.css">
    <link rel="stylesheet" href="../static/style/index.css">
</head>
<body id="body_profile" class="body-gr body_profile"> 
    <div class="asp_profile">
        <div class="break_info_user">
            <div class="photo_img_profile"></div>
            <div class="oth_info_profile">
                <div class="oth_info user_name"><?php echo $_SESSION['username_hw'];?></div>
                <div class="oth_info unkw_stg_1"></div>
                <div class="oth_info unkw_stg_2"></div>
            </div>
        </div>
        <div class="btns_inc_state">
            <ul class="esc_cnt">
                <li class="flet_itm"><a class="lk_btn_ril" href="?confProfilePages=new_post">Post</a></li>
                <li class="flet_itm"><a class="lk_btn_ril" href="?confProfilePages=my_friend">Friend</a></li>
            </ul>
        </div>
        <div class="rec_inc_state">
            <?php
                switch(@$_REQUEST["confProfilePages"]) {
                    case 'my_friend':

                    $sql = "SELECT * FROM friend_requests WHERE  (sender_id = '$user_id' OR receiver_id = '$user_id') AND status='accepted'";
                    $result = $conn->query($sql);
                        include("my_friends.php");

                        $conn->close();
                    break;

                    case 'new_post':
                        //Obter os posts do usuario logado
                    $sql = "SELECT * FROM posts WHERE user_id='$user_id'";
                    $result = $conn->query($sql);
                        include("my_posts.php");
                        $conn->close();
                    break;
            
                    default:
                        include("posts.php");
                }    
            ?>
        </div>
        <div>
            <button class="btn-back">Voltar</button>
        </div>
    </div>
    <script>
        function goBack() {
            window.history.back();
        }

        var backBtn = document.querySelectorAll('.btn-back');

        backBtn.forEach(button => {
            button.addEventListener('click', goBack);
        });
    </script>
</body>
</html>