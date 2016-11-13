<?php
session_start();
ini_set('display_errors', 1);
require_once("config.php");
require_once("models/posts.php");

if(isset($_SESSION['session_id'])) {
    $posts = get_all($pdo);
    include("views/posts.php");
} else {
    header("location:controllers/login.php");
}



?>