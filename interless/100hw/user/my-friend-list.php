<?php
    session_start();

    if (!isset($_SESSION['username_hw'])) {
        header("Location: includes/login.php");
        exit();
    }

    include('../../instance/dbinterless.php');

    $user_id = $_SESSION['user_id'];

    //Obter todos os usuarios registrados
    $sql = "SELECT * FROM register_gch WHERE user_hw_id != '$user_id'";
    $result = $conn->query($sql);



    //Obter os amigos do usuario
    $sql_friend = "SELECT * FROM friend_requests WHERE  (sender_id = '$user_id' OR receiver_id = '$user_id') AND status='accepted'";
    $result_friends = $conn->query($sql_friend);


    if ($result_friends->num_rows > 0) {
        while ($row = $result_friends->fetch_assoc()) {
            $friend_id = ($row['sender_id'] == $user_id) ? $row['receiver_id'] : $row['sender_id'];

            $friend_sql = "SELECT username_hw FROM register_gch WHERE user_hw_id = '$friend_id'";

            $friend_result = $conn->query($friend_sql);
            if ($friend_result->num_rows > 0) {
                $friend = $friend_result->fetch_assoc();

                echo "<li class='cnt-friend-accept'>" . $friend['username_hw'] . "</li>";
            }
        }
    } else {
        echo "Ainda nao tens amigos";
    }
?>