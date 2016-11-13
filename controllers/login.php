<?php
session_start();
ini_set('display_errors', 1);
require_once("../config.php");
require_once("../models/posts.php");



if(isset($_SESSION["session_name"])){
    // вывод "Session is set"; // в целях проверки
    header("Location: intropage.php");
}

if(isset($_POST["login"])){

    if(!empty($_POST['email']) && !empty($_POST['password'])) {
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);

        $query = login_user($pdo, $email, $password);
        $numrows = $query->rowCount();
        if($numrows!=0)
        {
            while($row = $query->fetch())
            {
                $dbemail = $row['email'];
                $dbpassword = $row['password'];
                $dbname = $row['name'];
                $dbid = $row['id'];
            }
            if($email == $dbemail && $password == $dbpassword)
            {
                // старое место расположения
                //  session_start();
                $_SESSION['session_name'] = $dbname;
                $_SESSION['session_id'] = $dbid;
                /* Перенаправление браузера */
                header("Location: ../index.php");
            }
        } else {
            echo  "Ви ввели невірну електрону адресу або пароль!";
        }
    } else {
        $message = "Всі поля обовязкові!";
    }
}

include("../views/login.php");

?>


