<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysql_connect("localhost", "selenium_user", "Cwright2207");
// Selecting Database
$db = mysql_select_db("selenium_test", $connection);
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['user_email'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysql_query("SELECT `user_email` FROM `users` WHERE `user_email`='$user_check'", $connection);
$row = mysql_fetch_assoc($ses_sql);
$login_session =$row['user_email'];
if(!isset($login_session)){
mysql_close($connection); // Closing Connection
header('Location: index.php'); // Redirecting To Home Page
}
?>