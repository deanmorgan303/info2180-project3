<?php

 $tele = $_POST["tele"];
 
 $lname = $_POST["lnames"];
 $fname = $_POST["fnames"];
 $pass = $_POST["pass"];
 $email = $_POST["email"];
 
 $host = getenv("IP");
 $username = getenv('C9_USER');
 $password = '';
 
 $pdo = new PDO("mysql:host=$host;dbname=databasename",$username,$password);
 
 $newemail = filter_input(INPUT_POST,"email", FILTER_VALIDATE_EMAIL);
 echo $newemail;
 
 $newlname = filter_input(INPUT_POST,"lnames", FILTER_SANITIZE_STRING);
 $newfname = filter_input(INPUT_POST,"fnames", FILTER_SANITIZE_STRING);
 $newtele = filter_input(INPUT_POST,"tele", FILTER_SANITIZE_STRING);
 $newpass = md5(filter_input(INPUT_POST,"pass", FILTER_SANITIZE_STRING));
 echo $newpass;
 
 date_default_timezone_set("Jamaica");
  $time = $a=date("Y-m-d H:i:s");
 
 
 
 
 
 $pdo->query("INSERT INTO users(firstname,lastname,password,telephone,email,date_joined)VALUES('$newfname','$newlname','$newpass','$newtele','$newemail','$time')");
 
 header('Location: '."login.html");
 
?>