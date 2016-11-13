<?php

function get_all($pdo){
    return $pdo->query('SELECT * FROM posts');
}

function get_post($pdo, $id){
    return $pdo->query("SELECT * FROM posts WHERE id=$id");
}

function check_user($pdo, $email){
    return $pdo->query("SELECT * FROM users WHERE email='$email'");
}

function login_user($pdo, $email, $password){
    return $pdo->query("SELECT * FROM users WHERE email='$email' AND password='$password'");
}

function new_user($pdo, $name, $email, $password){
    return $pdo->query("INSERT INTO users(name, email, password) VALUES ('$name', '$email', '$password')");
}

function get_comments($pdo, $id){
    return $pdo->query("SELECT * FROM comments as comm INNER JOIN users us ON comm.author_id = us.id WHERE post_id=$id");
}

function new_comment($pdo, $post_id, $author_id, $content){
    $pdo->query("INSERT INTO comments (post_id, author_id, content, date) VALUES ('$post_id', '$author_id', '$content', CURRENT_TIMESTAMP )");
}

function del_comment ($pdo, $comment_id){
    return $pdo->query("DELETE FROM comments WHERE com_id=$comment_id");
}

function del_post($pdo, $id){
    $pdo->query("DELETE FROM posts WHERE id=$id");
    $pdo->query("DELETE FROM comments WHERE post_id=$id");
}

function new_post($pdo, $title, $content){
    return $pdo->query("INSERT INTO posts(title, content, date) VALUES ('$title', '$content', CURRENT_TIMESTAMP )");
}

function edit_post($pdo, $id, $title, $content){
    return $pdo->query("UPDATE posts SET title='$title', content='$content' WHERE id=$id");
}



