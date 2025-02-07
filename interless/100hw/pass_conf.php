<?php
    session_start();

    if (!isset($_SESSION['username_hw'])) {
        header("Location: includes/login.php");
        exit();
    }

    include('../instance/dbinterless.php');

    $user_id = $_SESSION['user_id'];

    // Enviar pedido de amizade
    // if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['receiver_id'])) {
    //     $receiver_id = $_POST['receiver_id'];
    //     $sql = "INSERT INTO friend_requests (sender_id, receiver_id) VALUES ('$user_id', '$receiver_id')";
    //     if ($conn->query($sql) === TRUE) {
    //         echo "Pedido de amizade enviado!";
    //     } else {
    //         echo "Erro: " . $sql . "<br>" . $conn->error;
    //     }
    // }

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
                        // Enviar pedido de amizade
                        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['receiver_id'])) {
                            $receiver_id = $_POST['receiver_id'];

                            // Verificar se o pedido de amizade já foi enviado
                            $sql_check = "SELECT * FROM friend_requests WHERE (sender_id='$user_id' AND receiver_id='$receiver_id') OR (sender_id='$receiver_id' AND receiver_id='$user_id')";
                            $result_check = $conn->query($sql_check);

                            if ($result_check->num_rows > 0) {
                                echo "Pedido de amizade já existente entre esses usuários!";
                            } else {
                                $sql = "INSERT INTO friend_requests (sender_id, receiver_id) VALUES ('$user_id', '$receiver_id')";
                                if ($conn->query($sql) === TRUE) {
                                    echo "Pedido de amizade enviado!";
                                } else {
                                    echo "Erro: " . $sql . "<br>" . $conn->error;
                                }
                            }
                        }

                        // Remover pedido de amizade
                        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['remove_request_id'])) {
                            $remove_request_id = $_POST['remove_request_id'];

                            // Remover o pedido de amizade de ambos os lados
                            $sql_remove = "DELETE FROM friend_requests WHERE (sender_id='$user_id' AND receiver_id='$remove_request_id') OR (sender_id='$remove_request_id' AND receiver_id='$user_id')";
                            if ($conn->query($sql_remove) === TRUE) {
                                echo "Pedido de amizade removido!";
                            } else {
                                echo "Erro ao remover pedido de amizade: " . $conn->error;
                            }
                        }
                        include("user/new_friend.php");
                        $conn->close();
                    break;

                    case 'new_post':
                        include("user/posts/new_post.php");
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