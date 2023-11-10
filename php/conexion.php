<?php
$url = parse_url(getenv("mysql://u1n225xsewyuow5e:mfstkq8grwzlldab@y6aj3qju8efqj0w1.cbetxkdyhwsb.us-east-1.rds.amazonaws.com:3306/qwbv79bdopkafa17"));

$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"], 1);

$conn = new mysqli($server, $username, $password, $db);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

?>