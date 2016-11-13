<?php
ini_set('display_errors', 1);
require_once("../config.php");
require_once("../models/posts.php");

include("../views/registration.php");

function checkEmail($email) {
    if(preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/",$email))
    {
        return true;
    }
    return false;
}

if(isset($_POST["register"])){

    if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password'])) {
        $name= htmlspecialchars($_POST['name']);
        $email=  htmlspecialchars($_POST['email']);
        $validEmail = checkEmail($email);
        $password = htmlspecialchars($_POST['password']);
        $query = check_user($pdo, $email);
        $numrows = $query->rowCount();

        if($validEmail==1) {
            if($numrows==0)
            {
                $sql=new_user($pdo, $name, $email, $password);
                $result = $sql->rowCount();
                if($result){
                    $message = "Вітаємо, Ваш аккаунт успішно створено";
                } else {
                    $message = "Виникла помилка при створенні аккаунта";
                }
            } else {
                $message = "Кристувач з такою електронною адресою вже існує";
            }
        } else {
            $message = "Введіть коректний Email";
        }

    } else {
        $message = "Заповніть усі поля";
    }
}
?>

<?php if (!empty($message)) {echo "<p class=\"error\">" . "Повідомлення: ". $message . "</p>";} ?>

