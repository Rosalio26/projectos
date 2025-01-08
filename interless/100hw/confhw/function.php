<?php 
    session_start();

    function sanitize_input($data) {
        return htmlspecialchars(stripslashes(trim($data)));
    }

    function is_logged_in() {
        return isset($_SESSION['id']);
    }

    function redirect($url) {
        header("Location: $url");
        exit();
    }