<?php
session_start();
if (!isset($_SESSION['username_hw'])) {
    header("Location: ../includes/login.php");
    exit();
}

include('../../instance/dbinterless.php');

$user_id = $_GET['user_id'] ?? null;

if (!$user_id) {
    die("Erro: user_id não está definido.");
}

// Obter detalhes do usuário
$sql = "SELECT * FROM register_gch WHERE user_hw_id='$user_id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
} else {
    die("Usuário não encontrado.");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Detalhes do Usuário</title>
    <link rel="stylesheet" type="text/css" href="../static/style/profile.css">
    <link rel="stylesheet" type="text/css" href="../../static/style/interless_design.css">
</head>
<body>
    <div class="header-view-details-friend">
        <div class="img-view-details-friend"></div>
        <ul class="cnt-oth-conf">
            <li class="cnt-username-friend"><?php echo $user['username_hw']; ?></li>
            <li class="cnt-act-conf">
                <ul class="hold-act-conf">
                    <li class="act-itm">
                        <form method="post" action="delete_friend.php">
                            <input type="hidden" name="user_id" value="<?php echo $user['user_hw_id']; ?>">
                            <input type="submit" value="Eliminar">
                        </form>
                    </li>
                    <li class="act-itm">
                        <form method="post" action="delete_friend.php">
                            <input type="hidden" name="user_id" value="<?php echo $user['user_hw_id']; ?>">
                            <input type="submit" value="Mensagem">
                        </form>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</body>
</html>

<?php
$conn->close();
?>
