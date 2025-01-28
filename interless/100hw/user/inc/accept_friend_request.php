<?php
session_start();
if (!isset($_SESSION['username_hw'])) {
    header("Location: login.php");
    exit();
}

include('../../../instance/dbinterless.php');

$user_id = $_SESSION['user_id'];

// Obter amigos aceitos
$sql = "SELECT * FROM friend_requests WHERE (sender_id='$user_id' OR receiver_id='$user_id') AND status='accepted'";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Amigos Aceitos</title>
</head>
<body>
    <h1>Bem-vindo, <?php echo $_SESSION['username_hw']; ?>!</h1>
    <h2>Amigos Aceitos</h2>
    <ul>
    <?php
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $friend_id = ($row['sender_id'] == $user_id) ? $row['receiver_id'] : $row['sender_id'];
            $friend_sql = "SELECT username_hw FROM register_gch WHERE user_hw_id='$friend_id'";
            $friend_result = $conn->query($friend_sql);
            if ($friend_result->num_rows > 0) {
                $friend = $friend_result->fetch_assoc();
                echo "<li>" . $friend['username_hw'] . "</li>";
            }
        }
    } else {
        echo "<li>Nenhum amigo aceito encontrado.</li>";
    }
    ?>
    </ul>
    <a href="logout.php">Logout</a>
</body>
</html>

<?php
$conn->close();
?>

