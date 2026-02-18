<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
</head>
<body>
    <style>
 body {
            background-image: url("download.jpg");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
        </style>
<?php include 'header.php'; ?>

<form method="post">
    <input type="text" name="uname" placeholder="Username" required>
    <input type="password" name="pass" placeholder="Password" required>
    <input type="submit" name="login" value="Login">
</form>

<?php
if (isset($_POST['login'])) {

    include 'includes/config.php';

    $uname = trim($_POST['uname']);
    $pass  = trim($_POST['pass']);

    $stmt = $conn->prepare("SELECT * FROM admin WHERE uname = ? AND pass = ?");
    $stmt->bind_param("ss", $uname, $pass);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $_SESSION['uname'] = $uname;
        echo "Login Successful";
    } else {
        echo "Login Failed";
    }
}
?>

</body>
</html>
