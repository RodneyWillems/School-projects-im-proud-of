<?php
session_start();
$host = 'localhost';
$db = 'netland';
$user = 'root';
$password = '';
$charset = 'utf8mb4';
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$pdo = new PDO($dsn, $user, $password);
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
?>
<h1>Netland Admin Panel</h1>
<form name="login" method="post">
    <input type="text" name="username">
    <input type="text" name="password">
    <input type="submit" name="submit">
</form>
<?php
if (isset($_POST['submit'])) {
    $uname = $_POST['username'];
    $upassword = $_POST['password'];
    $res = $pdo->prepare('SELECT *
    FROM gebruikers
    WHERE usern = :naam AND passw = :ww');
    $res->bindParam(':naam', $uname, PDO::PARAM_STR);
    $res->bindParam(':ww', $upassword, PDO::PARAM_STR);
    $res->execute();
    $result = $res->fetch();
    if (!$res) {
        printf("Error: %s\n", mysqli_error($con));
        exit();
    }
    if ($result) {
        echo "You are login Successfully ";
        setcookie("login", "loggedin");
        header("location: index.php");
    } else {
        echo "failed ";
    }
}
?>