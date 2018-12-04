<?php
session_start();

$cat = filter_input(INPUT_POST,"cat", FILTER_SANITIZE_STRING);
 $location = filter_input(INPUT_POST,"location", FILTER_SANITIZE_STRING);
 $company = filter_input(INPUT_POST,"company", FILTER_SANITIZE_STRING);
 $title = filter_input(INPUT_POST,"title", FILTER_SANITIZE_STRING);
 $discription= filter_input(INPUT_POST,"discription", FILTER_SANITIZE_STRING);
  $host = getenv("IP");
 $username = getenv('C9_USER');
 $password = '';
 
 $pdo = new PDO("mysql:host=$host;dbname=databasename",$username,$password);
 
 date_default_timezone_set("Jamaica");
  $time = $a=date("Y-m-d H:i:s");
  
 $pdo->query("INSERT INTO Jobs(job_title,job_description,category,company_name,company_location,date_posted)VALUES('$title','$discription','$cat','$company','$location','$time')");
header('Location: '."index.html");
?>