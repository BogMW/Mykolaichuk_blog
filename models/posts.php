<?php

function get_all($pdo){
    return $pdo->query('SELECT * FROM posts');
}

function get_post($pdo, $id){
    return $pdo->query("SELECT * FROM posts WHERE id=$id");
}

function del_post($pdo, $id){
    return $pdo->query("DELETE * FROM posts WHERE id=$id");
}

function add_post($pdo, $id){
    return $pdo->query("SELECT * FROM posts WHERE id=$id");
}

function edit_post($pdo, $id){
    return $pdo->query("SELECT * FROM posts WHERE id=$id");
}



