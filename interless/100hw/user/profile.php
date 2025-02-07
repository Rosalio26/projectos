
<?php
    session_start();
    if (!isset($_SESSION['username_hw'])) {
        header("Location: ../includes/login.php");
        exit();
    }

    include('../../instance/dbinterless.php');

    $user_id = $_SESSION['user_id'];

    //Obter os detalhes do usuario
    $sql = "SELECT * FROM register_gch WHERE user_hw_id='$user_id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
    } else {
        die("Usuario nao encotrado");
    }
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

            <div class="photo_img_profile">
                <div class="item-cnt-lef cnt-lef-username">
                    <?php if ($user['profile_image']): ?>
                        <a href="../index.php?pagesStamen=uploadImagem" class="cnt-user-icon">
                            <img class="icon-sml-img" src="../conf_home/profile_conf/uploads/<?php echo $user['profile_image'];?>" alt="user icon">
                        </a>
                    <?php else: ?>
                        <a href="../index.php?pagesStamen=uploadImagem" class="cnt-user-icon">
                            <img class="icon-sml-img" src="../static/midia/img/user.png" alt="user icon">
                        </a>
                    <?php endif; ?>
                </div>
            </div>

            <div class="oth_info_profile">
                <div class="oth_info user_name">
                    <span class="tlt-span-jub">Nome de usuario</span>
                    <span class="cnt-span-jub"><?php echo $user['username_hw'];?></span>
                </div>

                <div class="oth_info unkw_stg_1">
                    <span class="tlt-span-jub">Numero de acesso</span>
                    <span class="cnt-span-jub"><?php echo $user['numberaccess_hw'];?></span>
                </div>

                <div class="oth_info unkw_stg_2">
                    <span class="tlt-span-jub">Email</span>
                    <span class="cnt-span-jub"><?php echo $user['email_hw'];?></span>
                </div>
            </div>

        </div>
        <div class="btns_inc_state">
            <ul class="esc_cnt">
                <li class="flet_itm"><a class="lk_btn_ril home-lk-ps" href="../index.php">Home</a></li>
                <li class="flet_itm"><a class="lk_btn_ril" href="?confProfilePages=new_post">Post</a></li>
                <li class="flet_itm"><a class="lk_btn_ril" href="?confProfilePages=my_friend">Friend</a></li>
            </ul>
            <button type="button" class="flet-setting-btn" onclick="showFlet()">
                <span class="cnt-set-bool"></span>
                <span class="cnt-set-bool"></span>
                <span class="cnt-set-bool"></span>
            </button>
            <div class="block-flet">
                <button type="button" class="close-flet-block" onclick="closeFlet()"><span >X</span></button>
                <ul>
                    <li><a href="oth_conf/account_settings.php">Contas</a></li>
                    <li><a href="oth_conf/account_settings.php">Definicoes</a></li>
                    <li><a href="oth_conf/account_settings.php">Plataformas</a></li>
                    <li><a href="oth_conf/account_settings.php">Ficheiros</a></li>
                </ul>
            </div>
        </div>
        <div class="rec_inc_state">
            <?php
                switch(@$_REQUEST["confProfilePages"]) {

                    case 'my_friend':
                        $sql = "SELECT * FROM friend_requests WHERE  (sender_id = '$user_id' OR receiver_id = '$user_id') AND status='accepted'";
                        $result = $conn->query($sql);


                        // Obter pedidos de amizade aceitos
                        $sql_accepted = "SELECT u.user_hw_id, u.username_hw, u.email_hw FROM friend_requests fr JOIN register_gch u ON fr.receiver_id = u.user_hw_id WHERE fr.sender_id='$user_id' AND fr.status='accepted'
                                UNION
                                SELECT u.user_hw_id, u.username_hw, u.email_hw FROM friend_requests fr JOIN register_gch u ON fr.sender_id = u.user_hw_id WHERE fr.receiver_id='$user_id' AND fr.status='accepted'";
                        $result_accepted_friend = $conn->query($sql_accepted);


                        // Obter pedidos de amizade pendentes
                        $sql_pending = "SELECT u.user_hw_id, u.username_hw, u.email_hw FROM friend_requests fr JOIN register_gch u ON fr.receiver_id = u.user_hw_id WHERE fr.sender_id='$user_id' AND fr.status='pending'
                                UNION
                                SELECT u.user_hw_id, u.username_hw, u.email_hw FROM friend_requests fr JOIN register_gch u ON fr.sender_id = u.user_hw_id WHERE fr.receiver_id='$user_id' AND fr.status='pending'";
                        $result_pending_friend = $conn->query($sql_pending);

                        // Obter pedidos de amizade rejeitados
                        $sql = "SELECT u.user_hw_id, u.username_hw, u.email_hw FROM friend_requests fr JOIN register_gch u ON fr.receiver_id = u.user_hw_id WHERE fr.sender_id='$user_id' AND fr.status='rejected'
                                UNION
                                SELECT u.user_hw_id, u.username_hw, u.email_hw FROM friend_requests fr JOIN register_gch u ON fr.sender_id = u.user_hw_id WHERE fr.receiver_id='$user_id' AND fr.status='rejected'";
                        $result_rejected_friend = $conn->query($sql);

                        include("my_friends.php");
                    break;



                    case 'new_post':
                    //Obter os posts do usuario logado
                    $sql = "SELECT * FROM posts WHERE user_id='$user_id'";
                    $result = $conn->query($sql);
                        include("posts/my_posts.php");
                    break;
            
                    default:
                    // ;
                }    
            ?>
        </div>
        <div class="cnt-btn-back">
            <button class="btn-back"><- Voltar</button>
        </div>
    </div>
    <script src="../static/scripts/profile.js"></script>
    <script src="../static/scripts/logout_time.js"></script>
</body>
</html>