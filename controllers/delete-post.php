<?php
session_start();
require_once("../config.php");
require_once("../models/posts.php");
$post_id = $_GET['id'];
del_post($pdo, $post_id);

header("location:../index.php");