<?php
$conn = new mysqli("localhost","root","","lottery_db");
if($conn->connect_error){
    die("Database Error");
}
session_start();
?>