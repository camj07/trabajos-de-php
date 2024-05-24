<?php
session_start();

if (!isset($_SESSION['login_user'])) {
    header("location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="welcome-container">
        <h2>Bienvenido, <?php echo htmlspecialchars($_SESSION['login_user']); ?></h2>
        <a href="logout.php">Cerrar Sesión</a>
    </div>
</body>
</html>
