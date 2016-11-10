<?php
ini_set('display_errors', 1);
require_once("config.php");
require_once("models/posts.php");

$posts = get_all($pdo);

include("views/posts.php");

?>

