<?php
    session_start();
    include('../instance/dbinterless.php');

    if (!isset($_SESSION['username_hw'])) {
        header("Location: ./form_reg_log/login.php");
        exit();
    }

    if (!isset($_SESSION['user_id'])) {
        header("Location: ./form_reg_log/login.php");
        exit();
    }

    $user_id = $_SESSION['user_id'];
    
    //===================================
    //Obter todos os usuarios registrados
    //===================================
    $sql_register_user = "SELECT * FROM register_gch WHERE user_hw_id != '$user_id'";
    $result_register_user = $conn->query($sql_register_user);



    //===================================
    //Obter os detalhes do usuario
    //===================================
    $sql_details_user = "SELECT * FROM register_gch WHERE user_hw_id='$user_id'";
    $result_details_user = $conn->query($sql_details_user);

    if ($result_details_user->num_rows > 0) {
        $user_details = $result_details_user->fetch_assoc();
    } else {
        die("Usuario nao encotrado");
    }
    // $sql = "SELECT * FROM register_gch WHERE user_hw_id='$user_id'";
    // $result = $conn->query($sql);

    // if ($result->num_rows > 0) {
    //     $user = $result->fetch_assoc();
    // } else {
    //     die("Usuario nao encotrado");
    // }


    //============================
    // Enviar pedido de amizade
    //============================
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['receiver_id'])) {
        $receiver_id = $_POST['receiver_id'];

        // Verificar se o pedido de amizade já foi enviado
        $sql_check_pending_set = "SELECT * FROM friend_requests WHERE (sender_id='$user_id' AND receiver_id='$receiver_id') OR (sender_id='$receiver_id' AND receiver_id='$user_id')";
        $result_check_pending_set = $conn->query($sql_check_pending_set);

        if ($result_check_pending_set->num_rows > 0) {
            echo "Pedido de amizade já existente entre esses usuários!";
        } else {
            $sql_set_pending = "INSERT INTO friend_requests (sender_id, receiver_id) VALUES ('$user_id', '$receiver_id')";
            if ($conn->query($sql_set_pending) === TRUE) {
                echo "Pedido de amizade enviado!";
            } else {
                echo "Erro: " . $sql_set_pending . "<br>" . $conn->error;
            }
        }
    }

    
    //============================
    // Remover pedido de amizade
    //============================
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

    
    //==================================
    // Obter pedidos de amizade aceitos
    //==================================
    
    $sql_all_pending = "SELECT * FROM friend_requests WHERE  (sender_id = '$user_id' OR receiver_id = '$user_id') AND status='accepted'";
    $result_all_pending = $conn->query($sql_all_pending);

    $sql_accepted = "SELECT u.user_hw_id, u.username_hw, u.email_hw FROM friend_requests fr JOIN register_gch u ON fr.receiver_id = u.user_hw_id WHERE fr.sender_id='$user_id' AND fr.status='accepted'
            UNION
            SELECT u.user_hw_id, u.username_hw, u.email_hw FROM friend_requests fr JOIN register_gch u ON fr.sender_id = u.user_hw_id WHERE fr.receiver_id='$user_id' AND fr.status='accepted'";
    $result_accepted_friend = $conn->query($sql_accepted);
  

    
    //====================================
    // Obter pedidos de amizade pendentes
    //====================================
    $sql_pending = "SELECT u.user_hw_id, u.username_hw, u.email_hw FROM friend_requests fr JOIN register_gch u ON fr.receiver_id = u.user_hw_id WHERE fr.sender_id='$user_id' AND fr.status='pending'
            UNION
            SELECT u.user_hw_id, u.username_hw, u.email_hw FROM friend_requests fr JOIN register_gch u ON fr.sender_id = u.user_hw_id WHERE fr.receiver_id='$user_id' AND fr.status='pending'";
    $result_pending_friend = $conn->query($sql_pending);


    //====================================
    // Obter pedidos de amizade rejeitados
    //====================================
    $sql = "SELECT u.user_hw_id, u.username_hw, u.email_hw FROM friend_requests fr JOIN register_gch u ON fr.receiver_id = u.user_hw_id WHERE fr.sender_id='$user_id' AND fr.status='rejected'
            UNION
            SELECT u.user_hw_id, u.username_hw, u.email_hw FROM friend_requests fr JOIN register_gch u ON fr.sender_id = u.user_hw_id WHERE fr.receiver_id='$user_id' AND fr.status='rejected'";
    $result_rejected_friend = $conn->query($sql);
    

    
    //====================================
    //Obter os posts dos usuarios
    //====================================
    
    $sql_post = "SELECT id_post, user_id, title_post, content_post, media_type, media_url, created_at FROM posts WHERE user_id = ? ORDER BY created_at DESC";
    $stmt_post = $conn->prepare($sql_post);
    $stmt_post->bind_param("i", $user_id);
    $stmt_post->execute();
    $result_post = $stmt_post->get_result();
    
    $posts = [];
    if ($result_post->num_rows > 0) {
        while($row = $result_post->fetch_assoc()) {
            $posts[] = $row;
        }
    }

        //Obter posts de conteudos
        $sql_post_content = "SELECT id_post, user_id, title_post, content_post, media_type, media_url, created_at FROM posts WHERE user_id = ? AND media_type = 'text_post' ORDER BY created_at DESC";
        $stmt_post_content = $conn->prepare($sql_post_content);
        $stmt_post_content->bind_param("i", $user_id);
        $stmt_post_content->execute();
        $result_post_content = $stmt_post_content->get_result();
        // $result_post_content = $conn->query($sql_post_content);

        $posts_content = [];
        if ($result_post_content->num_rows > 0) {
            while($row = $result_post_content->fetch_assoc()) {
                $posts_content[] = $row;
            }
        }

        //Obter posts de videos
        $sql_post_video = "SELECT id_post, user_id, title_post, content_post, media_type, media_url, created_at FROM posts WHERE user_id = ? AND media_type = 'video_post' ORDER BY created_at DESC";
        $stmt_post_video = $conn->prepare($sql_post_video);
        $stmt_post_video->bind_param("i", $user_id);
        $stmt_post_video->execute();
        $result_post_video = $stmt_post_video->get_result();
        // $result_post_video = $conn->query($sql_post_video);

        $posts_video = [];
        if ($result_post_video->num_rows > 0) {
            while($row = $result_post_video->fetch_assoc()) {
                $posts_video[] = $row;
            }
        }

        //Obter posts de Musicas
        $sql_post_music = "SELECT id_post, user_id, title_post, content_post, media_type, media_url, created_at FROM posts WHERE user_id = ? AND media_type = 'music_post' ORDER BY created_at DESC";
        $stmt_post_music = $conn->prepare($sql_post_music);
        $stmt_post_music->bind_param("i", $user_id);
        $stmt_post_music->execute();
        $result_post_music = $stmt_post_music->get_result();
        // $result_post_music = $conn->query($sql_post_music);

        $posts_music = [];
        if ($result_post_music->num_rows > 0) {
            while($row = $result_post_music->fetch_assoc()) {
                $posts_music[] = $row;
            }
        }

        //Obter posts de Fotografias
        $sql_post_photo = "SELECT id_post, user_id, title_post, content_post, media_type, media_url, created_at FROM posts WHERE user_id = ? AND media_type = 'photo_post' ORDER BY created_at DESC";
        $stmt_post_photo = $conn->prepare($sql_post_photo);
        $stmt_post_photo->bind_param("i", $user_id);
        $stmt_post_photo->execute();
        $result_post_photo = $stmt_post_photo->get_result();
        // $result_post_photo = $conn->query($sql_post_photo);

        $posts_photo = [];
        if ($result_post_photo->num_rows > 0) {
            while($row = $result_post_photo->fetch_assoc()) {
                $posts_photo[] = $row;
            }
        }
?>