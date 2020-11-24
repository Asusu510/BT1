<?php 
session_start();

$id = $_GET['id'];

unset($_SESSION['user'][$id]);



header('location: list.php');


 ?>
