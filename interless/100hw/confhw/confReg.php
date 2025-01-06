<?php
    include('./dbconn.php');

    $pName = $_POST["personalname"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $pass = md5($_POST["password"]);
    $numberAcess = $_POST["numberAccess"];

    $sql = "INSERT INTO getch (personalname, email, username, password, numberAccess) VALUES ('{$pName}', '{$email}', '{$username}', '{$pass}', '{$numberAcess}')";

    $res = $conn->query($sql);

    if($res==true){
        print "<script>location.href='../homeHw.php'</script>";
    }