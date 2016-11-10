<?php
ini_set('display_errors', 1);
require_once("config.php");
require_once("models/posts.php");

$post = get_post($pdo, $_GET['id']);

include("views/post.php");

?>