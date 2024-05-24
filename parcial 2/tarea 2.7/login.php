<?php
session_start();
$conn = new mysqli("localhost", "root", "", "sistema");

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = $_POST['login'];
    $password = sha1($_POST['password']);

    $sql = "SELECT * FROM usuarios WHERE login='$login' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION['login_user'] = $login;
        header("location: welcome.php");
    } else {
        $message = "Login o Password incorrectos";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form method="post" action="">
            <label for="login">Login:</label>
            <input type="text" name="login" required>
            <label for="password">Password:</label>
            <input type="password" name="password" required>
            <button type="submit">Entrar</button>
        </form>
        <?php if ($message != "") { ?>
            <div class="message"><?php echo $message; ?></div>
        <?php } ?>
    </div>
</body>
</html>
