<?php
session_start();
require_once("../config.php");
require_once("../models/posts.php");


if(isset($_POST['new-post'])){
    $title = $_POST['title'];
    $content = $_POST['content'];
    new_post($pdo, $title, $content);
    header("location:../index.php");
}

include('../views/new-post.php');