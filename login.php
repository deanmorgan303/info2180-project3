<?php
session_start();
$user = filter_input(INPUT_POST,"user", FILTER_SANITIZE_STRING);
$pass = filter_input(INPUT_POST,"pass", FILTER_SANITIZE_STRING);
$host = getenv("IP");
 $username = getenv('C9_USER');
 $password = '';

$pdo = new PDO("mysql:host=$host;dbname=databasename",$username,$password);

$query = $pdo->query("select * from users where email='$user' and password='$pass'");

$row = $query->fetch(PDO::FETCH_ASSOC);

if (count($row) == 0){
    header('Location: '."Login.html");
}
else{
    header('Location: '."index.html");
}

?>