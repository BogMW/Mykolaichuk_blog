<?php
session_start();
require_once("../config.php");
require_once("../models/posts.php");

$id = $_GET['id'];
$sql = get_post($pdo, $id);

if(isset($_POST['edit-post'])){
    $title = $_POST['title'];
    $content = $_POST['content'];
    edit_post($pdo, $id, $title, $content);
    header("location:../index.php");
}


include('../views/edit-post.php');