<?php
session_start();
require_once("../config.php");
require_once("../models/posts.php");
$comment_id = $_GET['id'];
del_comment($pdo, $comment_id);

header("location:../index.php");