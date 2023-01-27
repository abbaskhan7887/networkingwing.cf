<?php

$con = mysqli_connect('localhost', 'root');

if($con){
    echo "Database Successfully Connected";
}

else{
    echo "Database Not Connected";
}

mysqli_select_db($con, 'database');

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$query = "insert into userdatabase (name, email, phone, message) values ('$name', '$email', '$phone', '$message')";

mysqli_query($con, $query);

header('location:index.html');

?>