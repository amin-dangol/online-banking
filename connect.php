<?php
$name = $_POST['first'];
$pass = $_POST['password'];

//database connect
$conn = new mysqli('localhost', 'root', '', 'final');
if($conn->connect_error)
{
    die('connection failed:' .$conn->connect_error);
}
else{
    $stmt = $conn->prepare("insert into huawei(username, password)
    values(?,?)");
    $stmt->bind_param("ss", $name, $pass);
    $stmt->execute();
    header('location: login.php');
    $stmt->close();
    $conn->close();
}
?>