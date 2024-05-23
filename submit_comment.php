<?php
// 连接数据库
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn>connect_error) {
    die("连接失败： " . $conn>connect_error);
}
// 插入评论数据到数据库
$sql = "INSERT INTO comments (username, email, comment)
VALUES ('" . $_POST["username"] . "', '" . $_POST["email"] . "', '" . $_POST["comment"] . "')";
if ($conn>query($sql) === TRUE) {
    echo "评论提交成功";
} else {
    echo "Error: " . $sql . "<br>" . $conn>error;
}
$conn>close();
?>