<?php
session_start();
ini_set('display_errors', 1);
require_once("../config.php");
require_once("../models/posts.php");

$post = get_post($pdo, $_GET['id']);
$comments = get_comments($pdo, $_GET['id']);

if(isset($_POST["new-comment"])) {

    if (!empty($_POST['new-comment'])) {
        $content = $_POST['comment-content'];
        $author_id = $_SESSION['session_id'];
        $post_id = $_GET['id'];
        new_comment($pdo, $post_id, $author_id, $content);

    }
    $comments = get_comments($pdo, $_GET['id']);
}

include("../views/post.php");


?>